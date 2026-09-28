# Arquitectura del Sistema

## Visión general

## Componentes principales

El sistema sigue la arquitectura por capas estándar de Moodle:

* **Servicios de Lógica de Negocio (`classes/local/`)**: Contiene las clases de servicio y la lógica principal de la aplicación, desacoplada de los controladores de vista.
* **Capa de Persistencia (`classes/persistent/`)**: Define la estructura de datos y modelos persistentes basados en la API `core\persistent` de Moodle para la interacción con la base de datos.
* **Funciones Externas y API Web (`classes/external/`)**: Implementa los endpoints y servicios web utilizando la API externa de Moodle (`external_api`), gestionando la validación de parámetros y retornos para consumo AJAX/REST.
* **Vistas e Interfaz de Usuario (`templates/`)**: Plantillas Mustache para renderizar el marcado HTML de forma desacoplada de la lógica PHP.
* **Módulos Frontend y Lógica de Cliente (`amd/src/`)**: Módulos JavaScript (definidos bajo el estándar AMD / RequireJS) que gestionan la interactividad, eventos en cliente y llamadas asíncronas a la API externa.

## Diagrama de arquitectura

```mermaid
sequenceDiagram
    autonumber
    actor Usuario
    participant Index as index.php
    participant Service as post_service
    participant BD as Base de Datos
    participant Evento as Event Manager / Evento

    Usuario->>Index: Publicar entrada
    Index->>Service: Procesar publicación
    Service->>BD: Guardar post
    BD-->>Service: Confirmación de guardado
    Service->>Evento: Disparar evento de publicación
    Service-->>Index: Retornar resultado exitoso
    Index-->>Usuario: Mostrar muro actualizado