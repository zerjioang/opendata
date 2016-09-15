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
        $output->writeln('Iniciando cliente...');
        $client = new OpenDataClient();
        $output->writeln('Obteniendo datos de la agenda de cultura');
        $response = $client->getAgendaText();

        if($response){
            $output->writeln('Procesando datos de la agenda de cultura');
            //procesar datos
            $procesor = new AgendaProcesor();
            $class = '';
            $type = 'xml';
            
            $object = $procesor->run($output, $class, $type);

            //$output->writeln($response);
            $argument = $input->getArgument('argument');

            if ($input->getOption('option')) {
            }
        }
        else{
            $output->writeln('No se pudo recuperar los datos de la agenda. revise su conexion a Internet');
        }

        $output->writeln('Comando *agenda* finalizado');
    }

}
