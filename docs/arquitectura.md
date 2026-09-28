# Arquitectura del Sistema

## Visión general

## Componentes principales

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