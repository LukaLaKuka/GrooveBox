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

| Actor           | Usuario Plataforma Web                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
|-----------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| Descripción     | Usuario consumidor de la plataforma web                                                                                                                                                                                                                                                                                                                                                                                                                                                                          |
| Características | No tiene privilegios más allá de lo que él introduzca o se le sea compartido en la aplicación                                                                                                                                                                                                                                                                                                                                                                                                                    |
| Relaciones      | Consumidor API                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| Referencias     | Iniciar sesión, Crear cuenta, Descargar Mezcla, Escuchar Mezcla, Elegir Mezcla, Gestionar Mezcla, Eliminar Mezcla, Actualizar Mezcla, Guardar Mezcla a Favoritos, Eliminar Mezcla de Favoritos, Publicar Mezcla, Guardar Mezcla ---Tracklist, Eliminar Mezcla de Tracklist, Gestionar Perfil Artista, Modificar Perfil Artista, Crear Perfil Artista, Gestionar Tracklist, Eliminar Tracklist, Modificar Tracklist, Crear Tracklist, Escuchar Tracklist, Compartir Tracklist, Buscar Tracklist, Elegir Tracklist |
| Notas           | ---                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              | 
| Autor           | [Tomhuel](https://github.com/Tomhuel)                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| Fecha           | 09/03/2023                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |

</div>

### Casos de Uso

| Caso de Uso      | Iniciar sesión                        |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Inicia la sesión en la Web            |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | Tener cuenta creada                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Crear cuenta                          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Crea una cuenta en la web             |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Descargar Mezcla                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Descarga el audio de la mezcla        |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir la mezcla                      |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Escuchar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Se escucha la mezcla                  |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir la mezcla                      |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Elegir Mezcla                         |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elige una mezcla de la plataforma     |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Gestionar Mezcla                                                                                                                |
|------------------|---------------------------------------------------------------------------------------------------------------------------------|
| Fuentes          | ---                                                                                                                             |
| Actor            | Usuario Plataforma Web                                                                                                          |
| Descripción      | Permite gestionar una mezcla                                                                                                    |
| Flujo Básico     | ---                                                                                                                             |
| Pre-Condiciones  | ---                                                                                                                             |
| Post-condiciones | Eliminar Mezcla, Actualizar Mezcla, Guardar Mezcla a Favoritos, Descargar Mezcla, Eliminar Mezcla de Favoritos, Publicar Mezcla |
| Requerimientos   | Tener un perfil de artista creado                                                                                               |
| Notas            | ---                                                                                                                             |
| Autor            | [Tomhuel](https://github.com/Tomhuel)                                                                                           |
| Fecha            | 30/05/2023                                                                                                                      |



| Caso de Uso      | Eliminar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elimina una mezcla de la plataforma   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Eligir una Mezcla                     |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Actualizar Mezcla                     |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Actualiza los datos de una mezcla     |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir una mezcla                     |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Guardar Mezcla a Favoritos            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Guardar una mezcla a favoritos        |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir una mezcla                     |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Eliminar Mezcla de Favoritos          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elimina una mezcla de favoritos       |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir una mezcla                     |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Publicar Mezcla                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Publica una mezcla en la plataforma   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Guardar Mezcla a Tracklist            |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Guarda una mezcla en una tracklist    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Mezcla                         |
| Post-condiciones | ---                                   |
| Requerimientos   | Tener tracklists                      |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Eliminar Mezcla de Tracklist          |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elimina una mezcla de una tracklist   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Mezcla, Tener Tracklist        |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Gestionar Perfil Artista                 |
|------------------|------------------------------------------|
| Fuentes          | ---                                      |
| Actor            | Usuario Plataforma Web                   |
| Descripción      | El usuario gestiona su perfil de Artista |
| Flujo Básico     | ---                                      |
| Pre-Condiciones  | ---                                      |
| Post-condiciones | ---                                      |
| Requerimientos   | ---                                      |
| Notas            | ---                                      |
| Autor            | [Tomhuel](https://github.com/Tomhuel)    |
| Fecha            | 30/05/2023                               |



| Caso de Uso      | Modificar Perfil Artista                  |
|------------------|-------------------------------------------|
| Fuentes          | ---                                       |
| Actor            | Usuario Plataforma Web                    |
| Descripción      | Modifica el perfil de artista del usuario |
| Flujo Básico     | ---                                       |
| Pre-Condiciones  | Tiene un perfil de artista creado         |
| Post-condiciones | ---                                       |
| Requerimientos   | ---                                       |
| Notas            | ---                                       |
| Autor            | [Tomhuel](https://github.com/Tomhuel)     |
| Fecha            | 30/05/2023                                |



| Caso de Uso      | Crear Perfil Artista                  |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Crea su perfil de artista             |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Gestionar Tracklist                   |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Gestiona una Tracklist                |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Eliminar Tracklist                    |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elimina una Tracklist                 |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Tracklist                      |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Modificar Tracklist                   |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Modifica los datos de la Tracklist    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Tracklist                      |
| Post-condiciones | ---                                   |
| Requerimientos   | Iniciar sesión                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Crear Tracklist                       |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Crea una Tracklist                    |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | Iniciar sesión                        |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Escuchar Tracklist                    |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Escucha las mezclas de una Tracklist  |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | Elegir Tracklist                      |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Compartir Tracklist                     |
|------------------|-----------------------------------------|
| Fuentes          | ---                                     |
| Actor            | Usuario Plataforma Web                  |
| Descripción      | Comparte la Tracklist de manera pública |
| Flujo Básico     | ---                                     |
| Pre-Condiciones  | Elegir Tracklist                        |
| Post-condiciones | ---                                     |
| Requerimientos   | ---                                     |
| Notas            | ---                                     |
| Autor            | [Tomhuel](https://github.com/Tomhuel)   |
| Fecha            | 30/05/2023                              |



| Caso de Uso      | Buscar Tracklist                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Busca una Tracklist                   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |



| Caso de Uso      | Elegir Tracklist                      |
|------------------|---------------------------------------|
| Fuentes          | ---                                   |
| Actor            | Usuario Plataforma Web                |
| Descripción      | Elige una Tracklist                   |
| Flujo Básico     | ---                                   |
| Pre-Condiciones  | ---                                   |
| Post-condiciones | ---                                   |
| Requerimientos   | ---                                   |
| Notas            | ---                                   |
| Autor            | [Tomhuel](https://github.com/Tomhuel) |
| Fecha            | 30/05/2023                            |

</div>
