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

		4.2.3 Creada la 'Entity' Row y Rows dentro del bundle DemoBundle con todos su atributos
		4.2.4 Actualizar la base de datos
			4.2.4.1 php bin/console doctrine:schema:update --force
			
*. Ejecutar el comando con -> php ./bin/console agenda


Pregunta:
'Así mismo, nos gustaría que nos explicaras como diseñarías la arquitectura para mostrar esos datos en otra web pública (con un par de párrafos nos bastaría).'

Bueno para mostrar los datos obtenidos desde el servicio de opendata la opcion mas viable es crear un servicio restful a nuestro gusto que proporcione los datos que nos interesan de forma clara y ordenada. Dicho servicio se implementaria en uno o varios servidores dependiendo de las necesidades de esa web publica y seria compatible con cualquier dispositivo ya sea, android, ios, ordenador o cualquier dispositivo que tenga conexion a  internet. Esto permite una compatibilidad garantizada con casi el 100% de dispositivos y que el cliente tenga los datos siempre disponibles desde cualquier sitio.

En cuanto a la arquitectura interna, se puede crear desde algo muy rapido en python con flask o usar el propio symfony y sus caracteristicas para aprovecharlo al maximo haciendo esa API restful comentada jugando con el famoso 'routing' que incorpora.

Aunque si los datos no necesitan ser procesados, y solo visualizados, crear un pequeño script js que descarge los datos con ajax es los mas optimo para el cliente. Sin servidores extra, pagos mensuales, etc.