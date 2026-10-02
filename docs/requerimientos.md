# Requerimientos del Proyecto

## Requerimientos Funcionales

### Seguidores
### Anuncios
### Reacciones

| ID | Descripción | Prioridad | Estado |
|---|---|---|---|
| RF-001 | | Alta | Pendiente |
| RF-014 | Ver el numero de reacciones | Medio | Pendiente |
| RF-020 | Ver la lista de seguidores y seguidos | Baja | Pendiente |

#### Criterios de aceptación

### RF-014

**Criterio 1**

- **Dado** un usuario que visualiza una publicación,
- **Cuando** la publicación tiene una o más reacciones,
- **Entonces** se muestra el número total de reacciones de la publicación.

**Criterio 2**

- **Dado** una publicación que no tiene reacciones,
- **Cuando** el usuario visualiza la publicación,
- **Entonces** se muestra que el total de reacciones es cero.
#### Criterios de aceptación

### RF-020

**Criterio 1**
- **Dado** un usuario autenticado que sigue a otros usuarios y tiene seguidores,
- **Cuando** accede a la lista de seguidores y seguidos,
- **Entonces** ve ambas listas separadas y paginadas, mostrando la información básica de cada usuario.

**Criterio 2**
- **Dado** un usuario con muchos seguidores o seguidos,
- **Cuando** navega por la lista,
- **Entonces** la lista se pagina correctamente y puede avanzar o retroceder entre páginas sin perder el contexto.
| RF-021 | Ver el feed personalizado | Media | Pendiente |

#### Criterios de aceptación

### RF-021

**Criterio 1**
- **Dado** un usuario autenticado que sigue a otros usuarios y tags,
- **Cuando** accede a su feed personalizado,
- **Entonces** ve las publicaciones de los usuarios y tags que sigue, ordenadas por fecha.

**Criterio 2**
- **Dado** un usuario que sigue nuevos usuarios o tags,
- **Cuando** recarga su feed personalizado,
- **Entonces** las nuevas publicaciones de esos usuarios y tags aparecen en el feed.
| RF-022 | Publicar un anuncio oficial en una materia | Alta | Pendiente |

#### Criterios de aceptación

### RF-022

**Criterio 1**
- **Dado** un docente autenticado en una materia,
- **Cuando** marca una publicación como anuncio oficial,
- **Entonces** el anuncio aparece destacado en el muro de la materia para todos los inscritos.

**Criterio 2**
- **Dado** un docente que redacta una publicación en su materia,
- **Cuando** la marca como anuncio oficial y confirma,
- **Entonces** el anuncio queda registrado como oficial con autor, fecha y materia, y es visible para los estudiantes inscritos.
| RF-023 | Publicar un anuncio institucional en el muro general | Media | Pendiente |

#### Criterios de aceptación

### RF-023

**Criterio 1**
- **Dado** un administrador autenticado en la plataforma,
- **Cuando** publica un anuncio institucional desde el módulo Anuncios,
- **Entonces** el anuncio aparece en el muro general visible para todos los usuarios.

**Criterio 2**
- **Dado** un administrador que redacta un anuncio institucional,
- **Cuando** confirma la publicación,
- **Entonces** el anuncio queda registrado con autor, fecha y contenido, y es visible en el muro general.
| RF-024 | Destacar visualmente los anuncios oficiales | Media | Pendiente |

#### Criterios de aceptación

### RF-024

**Criterio 1**
- **Dado** un anuncio oficial publicado en el muro,
- **Cuando** el usuario visualiza el muro o el anuncio,
- **Entonces** el anuncio se muestra con un color y un ícono distintos que lo diferencian de las publicaciones normales.

**Criterio 2**
- **Dado** un anuncio oficial y una publicación regular en el mismo muro,
- **Cuando** el usuario los compara visualmente,
- **Entonces** puede identificar el anuncio oficial por su estilo destacado (color e ícono) sin necesidad de leer el contenido.

### Actividad de Moodle

| ID | Descripción | Prioridad | Estado |
|---|---|---|---|
| RF-025 | Mostrar tareas nuevas en el muro de la materia | Media | Pendiente |

#### Criterios de aceptación

### RF-025

**Criterio 1**
- **Dado** un docente que crea una nueva tarea en una materia,
- **Cuando** la tarea se publica,
- **Entonces** se genera automáticamente una publicación de actividad en el muro de la materia visible para los estudiantes inscritos.

**Criterio 2**
- **Dado** un estudiante inscrito en una materia con tareas nuevas,
- **Cuando** accede al muro de la materia,
- **Entonces** ve las publicaciones de actividad correspondientes a las tareas nuevas, con la información de la tarea y su fecha.

## Requerimientos No Funcionales

| ID | Descripción | Categoría | Estado |
|---|---|---|---|
| RNF-001 | El plugin debe instalarse y funcionar sin errores en Moodle 4.5 LTS (rama MOODLE_405_STABLE). Verificación: ejecutar la suite PHPUnit y moodle-plugin-ci sobre Moodle 4.5 en el CI, que debe pasar sin fallos. | Compatibilidad | Pendiente |
| RNF-002 | El plugin debe instalarse y ejecutarse sin errores en PHP 8.1, 8.2 y 8.3. Verificación: ejecutar la suite PHPUnit y moodle-plugin-ci sobre las tres versiones de PHP en el CI, que debe pasar sin fallos. | Compatibilidad | Pendiente |


## Requerimientos de Sistema

| ID | Descripción |
|---|---|
| RS-001 | |
