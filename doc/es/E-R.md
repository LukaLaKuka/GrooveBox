<div x-placement="center">

# Entidad - Relación

Aquí podrás el diagrama Entidad-Relación y además la documentación de sus Entidades y Relaciones

## Índice
- [Diagrama Entidad-Relación](#diagrama)
- [Documentación](#documentación-del-diagrama)
    - [Entidades](#entidades)
    - [Relaciones](#relaciones)
    - [Tablas](#tablas)

## Diagrama

![Diagrama Entidad Relacion](../../assets/img/Diagrama%20Entidad%20Relación%20GrooveBox.png)

## Documentación del Diagrama

### Entidades

| Entidad     | Tokens                                                       |
|-------------|--------------------------------------------------------------|
| Descripción | Token único para el usuario, para solicitudes a la API REST. |
| Relaciones  | Un **Token** pertenece a un único **Usuario**.               |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                        |
| Fecha       | 10/03/2023                                                   |

| Entidad     | Usuario                                                               |
|-------------|-----------------------------------------------------------------------|
| Descripción | Usuario de la plataforma.                                             |
| Relaciones  | Un **Usuario** tiene un sólo **Token**, tiene 0 o más **Tracklists**. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                 |
| Fecha       | 10/03/2023                                                            |

| Entidad     | Tracklist                                                                                                                 |
|-------------|---------------------------------------------------------------------------------------------------------------------------|
| Descripción | Listado personalizado para almacenar Mezclas.                                                                             |
| Relaciones  | Una **Tracklist**  pertenece sólo a un único **Usuario** y una **Tracklist** puede tener 0 o más **Mezclas** almacenadas. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                                     |
| Fecha       | 10/03/2023                                                                                                                |

| Entidad     | Mezcla                                                                                                |
|-------------|-------------------------------------------------------------------------------------------------------|
| Descripción | Mezcla es el audio que se usa para _mezclar_ con otro audio y con ello generar otra mezcla.           |
| Relaciones  | Una **Mezcla** puede estar en 0 o más **Tracklists**. Una **Mezcla** puede tener 0 o más **Géneros**. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                                                                 |
| Fecha       | 10/03/2023                                                                                            |

| Entidad     | Género                                                   |
|-------------|----------------------------------------------------------|
| Descripción | Género músical.                                          |
| Relaciones  | Pueden haber 0 o más **Géneros** en una sola **Mezcla**. |
| Autor       | [Tomhuel](https://github.com/Tomhuel)                    |
| Fecha       | 10/03/2023                                               |

### Relaciones

| Entidad 1 | Relación | Entidad 2 | Descripción                                                                                              |
|-----------|----------|-----------|----------------------------------------------------------------------------------------------------------|
 | Usuario   | Tiene    | Token     | Un Usuario tiene un solo Token, y un Token solo pertenece a un Usuario                                   |
| Usuario   | Tiene    | Tracklist | Un Usuario puede tener 0 o más Tracklists, y una Tracklist solo puede pertenecer a un Usuario            |
| Usuario   | Tiene    | Mezcla    | Un Usuario le pueden gustar 0 o más mezclas, y una mezcla puede ser gustada por 0 o más Usuarios         |
| Tracklist | Tiene    | Mezcla    | Una Tracklist puede tener 0 o más Mezclas, mientras que una Mezcla puede pertenecer a 0 o más Tracklists |
| Mezcla    | Tiene    | Género    | Una Mezcla puede tener 0 o más Géneros, mientras que un Género puede pertenecer a 0 o más Mezclas        |


### Tablas

#### Usuario

| Campo           | Tipo de Dato                   | Dato a almacenar               |
|-----------------|--------------------------------|--------------------------------|
| ID              | INT AUTO_INCREMENT PRIMARY KEY | ID del Usuario                 |
| name            | CHAR(30) NOT NULL              | Nombre del Usuario             |
| lastname_first  | CHAR(30) NOT NULL              | Primer apellido del Usuario    |
| lastname_second | CHAR(30) NOT NULL              | Segundo apellido del Usuario   |
| username        | CHAR(30) NOT NULL              | Apodo del Usuario              |
| email           | CHAR(50) NOT NULL              | Correo electrónico del Usuario |
| password        | CHAR(50) NOT NULL              | Contraseña del Usuario         |
| token           | FOREIGN KEY Token              | Token del Usuario              |
| image           | CHAR(90) NOT NULL              | Imagen del Usuario             |

#### Token

| Campo | Tipo de Dato                   | Dato a almacenar |
|-------|--------------------------------|------------------|
| ID    | INT AUTO_INCREMENT PRIMARY KEY | ID del Token     |
| token | CHAR(50) NOT NULL              | Valor del Token  |


#### Tracklist

| Campo       | Tipo de Dato                   | Dato a almacenar            |
|-------------|--------------------------------|-----------------------------|
| ID          | INT AUTO_INCREMENT PRIMARY KEY | ID de la Tracklist          |
| name        | CHAR(30) NOT NULL              | Nombre de la Tracklist      |
| description | VARCHAR(5000) NOT NULL         | Descripción de la Tracklist |
| privacy     | CHAR(1) NOT NULL               | Privacidad de la Tracklist  |
| image       | CHAR(90) NOT NULL              | Imagen de la Tracklist      |


#### Usuario - Tracklist

| Campo   | Tipo de Dato                   | Dato a almacenar   |
|---------|--------------------------------|--------------------|
| userID  | FOREIGN KEY Usuario NOT NULL   | ID del Usuario     |
| tlistID | FOREIGN KEY Tracklist NOT NULL | ID de la Tracklist |


#### Mezcla

| Campo       | Tipo de Dato                   | Dato a almacenar           |
|-------------|--------------------------------|----------------------------|
| ID          | INT AUTO_INCREMENT PRIMARY KEY | ID de la Mezcla            |
| name        | CHAR(30) NOT NULL              | Nombre de la Mezcla        |
| description | VARCHAR(5000) NOT NULL         | Descripción de la Mezcla   |
| image       | VARCHAR(90) NOT NULL           | Imagen de la Mezcla        |
| audio       | VARCHAR(90) NOT NULL           | Audio de la Mezcla         |
| author      | FOREIGN KEY Usuario            | Autor de la Mezcla         |
| privacy     | CHAR(1) NOT NULL               | Privacidad de la Tracklist |


#### Usuario - Mezcla

| Campo  | Tipo de Dato                 | Dato a almacenar |
|--------|------------------------------|------------------|
| userID | FOREIGN KEY Usuario NOT NULL | ID del Usuario   |
| mixID  | FOREIGN KEY Mezcla NOT NULL  | ID de la Mezcla  |


#### Tracklist - Mezcla

| Campo   | Tipo de Dato                   | Dato a almacenar   |
|---------|--------------------------------|--------------------|
| tlistID | FOREIGN KEY Tracklist NOT NULL | ID de la Tracklist |
| mixID   | FOREIGN KEY Mezcla NOT NULL    | ID de la Mezcla    |


#### Genero

| Campo | Tipo de Dato                   | Dato a almacenar  |
|-------|--------------------------------|-------------------|
| ID    | INT AUTO_INCREMENT PRIMARY KEY | ID del Género     |
| name  | CHAR(20) NOT NULL              | nombre del Género |

#### Mezcla - Genero

| Campo   | Tipo de Dato                | Dato a almacenar |
|---------|-----------------------------|------------------|
| mixID   | FOREIGN KEY Mezcla NOT NULL | ID de la Mezcla  |
| genreID | FOREIGN KEY Genero NOT NULL | ID del Género    |

</div>
