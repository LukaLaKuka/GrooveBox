<div align="justify">

  # Anteproyecto - GrooveBox

  <div align="center">
  
  <img src="../../assets/img/Groove.png" width="75%">
  
  </div>
  
  ## Índice

  - [Descripción del problema](#descripción-del-problema)
  - [Objetivo](#objetivo)
  - [Arquitectura y tecnologías a utilizar](#arquitectura-y-tecnologías-a-utilizar)
  - [Boceto de la solución](#boceto-de-la-solución)
  
  ### Descripción del problema.

   A día de hoy los DJ's producen mezclas con música de artistas conocidos mundialmente, con mezclas que crean ellos mismos o mezclas pre-producidas por ellos mismos u otros DJ's. En el caso de las mezclas pre-producidas, los DJ's se encuentran en el dilema de poder encontrar esas mezclas y que además tengan una buena calidad.

  ### Objetivo.

  GrooveBox ofrece la posibilidad a los DJ's una plataforma en la que poder publicar sus mezclas para almacenarlas y ofrecerlas a otros DJ's para que puedan utilizar estas como recursos musicales de una manera cómoda, además de ofrecer una API REST para los distintos software de mezcla como RekordBox o Serato DJ para que estos puedan ofrecer consumo de mezclas sin necesidad descargar nada manualmente.

  
  ### Arquitectura y tecnologías a utilizar.
  
  GrooveBox se constará de cuatro servicios. Un servicio para la plataforma web desarrollada en Angular, que consume de un servicio de API REST desarrollado en Laravel (versión a determinar) que este a su vez consume de un servidor de archivos de Amazon Web Service S3 y un Servidor de Base de Datos MYSQL. El servicio API REST puede ser consumido por los usuarios directamente mediante tokens. Cada servicio sería desplegado con Docker exceptuando el de Amazon, que estaría desplegado directamente por Amazon.

  #### Tecnologías

  - Docker
  - Angular JS (TypeScript)
  - Laravel (PHP)
  - AWS S3
  - MySQL Server

  #### Boceto de la solución

  <div align="center">
  
  ![Boceto Solución](../../assets/img/BocetoSolucion.png)

  </div>

</div>

</div>