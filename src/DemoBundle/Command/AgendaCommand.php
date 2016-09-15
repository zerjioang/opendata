<?php

namespace DemoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AgendaCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('agenda')
            ->setDescription('Utilidad que informa sobre los eventos culturales de Bilbao usando OpenData como fuente')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();

        $output->writeln('Iniciando cliente...');
        $client = new OpenDataClient();
        $output->writeln('Obteniendo datos de la agenda de cultura');
        $response = $client->getAgenda();
        if($response){
            $output->writeln('Procesando datos de la agenda de cultura');
            //procesar datos
            $procesor = new AgendaProcesor();
            $parsed = $procesor->run($response);
            $size = count($parsed->getRow());
            if($size > 0){
                $output->writeln('Eventos procesados correctamente: '.$size.PHP_EOL);
                $output->writeln('Guardando en base de datos local...');
                //guardar en la base de datos
                //var_dump($parsed);
                $persistence = new DBManager($em);
                $persistence->store($parsed);
                $output->writeln('Query realizada con exito. Por favor compruebe los datos en su base de datos.');
            }
            else{
                $output->writeln('No se proceso ningun evento. Compruebe el esquema de los datos recibidos.'.PHP_EOL);
            }
        }
        else{
            $output->writeln('No se pudo recuperar los datos de la agenda. Revise su conexion a Internet');
        }

        $output->writeln('Comando *agenda* finalizado');
    }

}
