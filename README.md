# Convertidor de monedas

## Tecnologias:
Software desarrollado en Laravel 10.x, VueJs, Tailwind, FortAwesome y InertiaJs

## Infraestructura:
Servicio corriendo sobre EC2 de AWS en la ip **http://18.222.21.149**. Se conecta a una base de datos desplegada en Amazon RDS con el gestor MySQL.

## Funcionalidad:
Puedes escoger una divisa principal y observar cual es su valor en una moneda segundaria. Para usuarios invitados, solo puedes realizar hasta 5 consultas por día.

## Integraciones con API:
- Se usa una API externa para las consultas de los exchanges: http://api.currencylayer.com/
- Tambien se usa una API interna para registro de base de datos: http://18.222.21.149/api/convert/{from}/{to}/{amount}

## Como Iniciarlo:
- Descargar este repositorio.
- Ejecutar `composer install` para instalar los paquetes necesarios de la aplicación.
- Renombrar el archivo `.env.example` por `.env` y colocar los datos de acceso a la DB.
- Ejecutar el comando `yarn` o `npm install` para instalar las dependecias de nodeJs.
- Finalmente ejecutar `yarn build` para publicar la app.

> [!NOTA]
> Se adjunta la estructura de la DB para la creación de la base de datos externa o interna que puede ejecutar antes o despues de la instalación ya que es independiente del proyecto, es decir, no se tiene que ejecutar migración 
