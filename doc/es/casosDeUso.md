<div x-placement="center">

# Casos de Uso

Aquí podrás el diagrama de los casos de uso y además la documentación de sus actores y dichos casos de uso

## Índice
- [Diagrama de Casos de Uso](#diagrama)
- [Documentación](#documentación-del-diagrama)
    - [Actores](#actores)
    - [Casos de Uso](#casos-de-uso-1)

## Diagrama

<div x-placement="center">

![Diagrama de Casos de Uso](../../assets/img/Diagrama%20de%20Casos%20de%20Uso%20GrooveBox.png)

## Documentación del Diagrama

### Actores

| Actor           | Usuario Plataforma Web                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Descripción     | Usuario consumidor de la plataforma web                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| Características | No tiene privilegios más allá de lo que él introduzca o se le sea compartido en la aplicación                                                                                                                                                                                                                                                                                                                                                                                                 |
| Relaciones      | Consumidor API                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| Referencias     | Iniciar sesión, Crear cuenta, Recuperar Cuenta, Guardar Mezcla a Tracklist, Eliminar Mezcla de Tracklist, Solicitar Token, Gestionar Tracklist, Eliminar Tracklist, Descargar Tracklist, Modificar Tracklist, Crear Tracklist, Escuchar Tracklist, Compartir Tracklist, Buscar Tracklist, Escuchar Mezcla, Elegir Mezcla, Elegir Tracklist, Gestionar Mezcla, Eliminar Mezcla, Actualizar Mezcla, Guardar Mezcla a Favoritos, Publicar Mezcla, Descargar Mezcla, Eliminar Mezcla de Favoritos |
| Notas           | ---                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           | 
| Autor           | [Tomhuel](https://github.com/Tomhuel)                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| Fecha           | 09/03/2023                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    | 

| Actor           | Consumidor API                                                                                                                                                                                                                                                                                      |
|-----------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Descripción     | Usuario/Entidad consumidora de la API REST                                                                                                                                                                                                                                                          |
| Características | No puede crear ni eliminar usuarios ni listas de favoritos. Para poder hacer cualquier acción en un usuario, requiere el token de este usuario.                                                                                                                                                     |
| Relaciones      | Usuario Plataforma Web                                                                                                                                                                                                                                                                              |
| Referencias     | GET, PUT, DELETE, POST, PATCH, GET Tracklist, GET Mezcla, GET User, GET Favoritos, DELETE Tracklist, DELETE Mezcla PUT Mezcla, PUT Tracklist, PUT Mezcla, PUT Favoritos, POST Tracklist, POST Mezcla, PATCH Tracklist, PATCH Mezcla, PATCH User, PATCH Favoritos, Autenticar Token, Solicitar Token |
| Notas           | Centrado para empresas u otras entidades que administren los datos de los Usuarios                                                                                                                                                                                                                  | 
| Autor           | [Tomhuel](https://github.com/Tomhuel)                                                                                                                                                                                                                                                               |
| Fecha           | 09/03/2023                                                                                                                                                                                                                                                                                          | 

</div>

### Casos de Uso

| Caso de Uso      | Iniciar sesión                        |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Inicia sesión en la plataforma web    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener cuenta creada                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Crear cuenta                          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Crea una cuenta en la plataforma web  |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Recuperar cuenta                                 |
|------------------|--------------------------------------------------|
| Fuentes          | ---                                              | 
| Actor            | Usuario Plataforma Web                           |
| Descripción      | Recuperación de la cuenta vía correo electrónico |
| Flujo Básico     | ---                                              |
| Pre-Condiciones  | ---                                              |
| Post-Condiciones | ---                                              |
| Requerimientos   | Tener cuenta creada                              |
| Notas            | ---                                              | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)            |
| Fecha            | 09/03/2023                                       |

| Caso de Uso      | Guardar Mezcla a Tracklist            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Guarda una Mezcla en una Tracklist    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Mezcla y Tracklist             |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Eliminar Mezcla de Tracklist          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Mezcla y Tracklist             |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Solicitar Token                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión                        |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Gestionar Tracklist                                                                                                             |
|------------------|---------------------------------------------------------------------------------------------------------------------------------|
| Fuentes          | ---                                                                                                                             | 
| Actor            | Usuario Plataforma Web                                                                                                          |
| Descripción      | Descripción                                                                                                                     |
| Flujo Básico     | ---                                                                                                                             |
| Pre-Condiciones  | Iniciar sesión                                                                                                                  |
| Post-Condiciones | Eliminar Mezcla, Actualizar Mezcla, Guardar Mezcla a Favoritos, Descargar Mezcla, Eliminar Mezcla de Favoritos, Publicar Mezcla |
| Requerimientos   | Tener sesión iniciada                                                                                                           |
| Notas            | ---                                                                                                                             | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)                                                                                           |
| Fecha            | 09/03/2023                                                                                                                      |

| Caso de Uso      | Eliminar Tracklist                    |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Descargar Tracklist                   |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Modificar Tracklist                   |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Crear Tracklist                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Escuchar Tracklist                    |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Compartir Tracklist                   |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Tracklist      |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Buscar Tracklist                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión                        |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Escuchar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   |                                       |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Elegir Mezcla                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión                        |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Elegir Tracklist                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Gestionar Mezcla                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión                        |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Eliminar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Actualizar Mezcla                     |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Guardar Mezcla a Favoritos            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Publicar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión                        |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Descargar Mezcla                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |

| Caso de Uso      | Eliminar Mezcla de Favoritos          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descripción                           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Iniciar sesión, Elegir Mezcla         |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener sesión iniciada                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 09/03/2023                            |


___


| Caso de Uso      | GET                                                |
|------------------|----------------------------------------------------|
| Fuentes          | ---                                                | 
| Actor            | Consumidor API                                     |
| Descripción      | Caso de uso general para solicitudes HTTP tipo GET |
| Flujo Básico     | ---                                                |
| Pre-Condiciones  | ---                                                |
| Post-Condiciones | GET Tracklist, GET Mezcla, GET User, GET Favoritos |
| Requerimientos   | Autenticar el Token                                |
| Notas            | ---                                                | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)              |
| Fecha            | 10/03/2023                                         |

| Caso de Uso      | GET Tracklist                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Obtener Tracklist/s                   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | GET Mezcla                            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Obtener Mezcla/s                      |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | GET User                              |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Obtener Usuario                       |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | GET Favoritos                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Obtener Favoritos                     |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | DELETE                                                |
|------------------|-------------------------------------------------------|
| Fuentes          | ---                                                   | 
| Actor            | Consumidor API                                        |
| Descripción      | Caso de Uso general para solicitudes HTTP tipo DELETE |
| Flujo Básico     | ---                                                   |
| Pre-Condiciones  | ---                                                   |
| Post-Condiciones | DELETE Tracklist, DELETE Mezcla                       |
| Requerimientos   | Autenticar el Token                                   |
| Notas            | ---                                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)                 |
| Fecha            | 10/03/2023                                            |

| Caso de Uso      | DELETE Tracklist                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Eliminar Tracklist                    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | DELETE Mezcla                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Eliminar Mezcla                       |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PUT                                              |
|------------------|--------------------------------------------------|
| Fuentes          | ---                                              | 
| Actor            | Consumidor API                                   |
| Descripción      | Caso de Uso general para solicitudes HTTP de PUT |
| Flujo Básico     | ---                                              |
| Pre-Condiciones  | ---                                              |
| Post-Condiciones | PUT Tracklist, PUT Mezcla, PUT Favoritos         |
| Requerimientos   | Autenticar el Token                              |
| Notas            | ---                                              | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)            |
| Fecha            | 10/03/2023                                       |

| Caso de Uso      | PUT Tracklist                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Subir una Tracklist modificada        |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PUT Mezcla                            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Subir una mezcla modificada           |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PUT Favoritos                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Subir lista de Favoritos modificada   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | POST                                                |
|------------------|-----------------------------------------------------|
| Fuentes          | ---                                                 | 
| Actor            | Consumidor API                                      |
| Descripción      | Caso de Uso general para solicitudes HTTP tipo POST |
| Flujo Básico     | ---                                                 |
| Pre-Condiciones  | ---                                                 |
| Post-Condiciones | POST Tracklist, POST Mezcla                         |
| Requerimientos   | Autenticar el Token                                 |
| Notas            | ---                                                 | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)               |
| Fecha            | 10/03/2023                                          |

| Caso de Uso      | POST TRACKLIST                        |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Publicar nueva Tracklist              |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | POST Mezcla                           |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Publicar nueva Mezcla                 |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PATCH                                                      |
|------------------|------------------------------------------------------------|
| Fuentes          | ---                                                        | 
| Actor            | Consumidor API                                             |
| Descripción      | Caso de Uso general para solicitud HTTP tipo PATCH         |
| Flujo Básico     | ---                                                        |
| Pre-Condiciones  | ---                                                        |
| Post-Condiciones | PATCH Tracklist, PATCH Mezcla, PATCH User, PATCH Favoritos |
| Requerimientos   | Autenticar el Token                                        |
| Notas            | ---                                                        | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)                      |
| Fecha            | 10/03/2023                                                 |

| Caso de Uso      | PATCH Tracklist                        |
|------------------|----------------------------------------|
| Fuentes          | ---                                    | 
| Actor            | Consumidor API                         |
| Descripción      | Subir Tracklist ligeramente modificada |
| Flujo Básico     | ---                                    |
| Pre-Condiciones  | ---                                    |
| Post-Condiciones | Autenticar el Token                    |
| Requerimientos   | Autenticar el Token                    |
| Notas            | ---                                    | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)  |
| Fecha            | 10/03/2023                             |

| Caso de Uso      | PATCH Mezcla                          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Subir Mezcla ligeramente modificada   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PATCH User                            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Subir Usuario ligeramente modificado  |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | Autenticar el Token                   |
| Requerimientos   | Autenticar el Token                   |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |

| Caso de Uso      | PATCH Favoritos                                 |
|------------------|-------------------------------------------------|
| Fuentes          | ---                                             | 
| Actor            | Consumidor API                                  |
| Descripción      | Subir lista de Favoritos ligeramente modificada |
| Flujo Básico     | ---                                             |
| Pre-Condiciones  | ---                                             |
| Post-Condiciones | Autenticar el Token                             |
| Requerimientos   | Autenticar el Token                             |
| Notas            | ---                                             | 
| Autor            | [Tomhuel](https://github.com/Tomhuel)           |
| Fecha            | 10/03/2023                                      |

| Caso de Uso      | Autenticar Token                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   | 
| Actor            | Consumidor API                        |
| Descripción      | Autenticación del Token del Usuario   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-Condiciones | ---                                   |
| Requerimientos   | Tener un token previo                 |
| Notas            | ---                                   | 
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 10/03/2023                            |



</div>