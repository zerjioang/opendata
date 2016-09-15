Descripcion del proyecto

1. He creado un proyecto llamado challenge
	php symfony new challenge

2. dentro de ese proyecto un bundle llamado DemoBundle
	php bin/console generate:bundle

3. dentro de ese bundle un comando llamado agenda
	php bin/console generate:command

4. desarrollo

	4.1 Para realizar la peticion al servicio opendata se usa el componente crawler de symfony con el modulo goutte
		4.1.1 Instalandolo con composer --> php composer require symfony/browser-kit
		4.1.2 Instalando gouete 		--> php composer require fabpot/goutte

	4.2 Procesar los datos xml obtenidos y convertirlos a un objeto deserializado de symfony con el modulo serializer
		4.2.1 Instalar el modulo con composer 	-> php composer require symfony/serializer

		4.2.2 Crear el modelo de base de datos antes de deserializarlo

			4.2.2.1 php bin/console doctrine:database:create
			4.2.2.2 php bin/console doctrine:generate:entity

		4.2.3 Creada la 'Entity' Agenda dentro del bundle DemoBundle con todos su atributos

*. Ejecutar el comando con -> php ./bin/console agenda