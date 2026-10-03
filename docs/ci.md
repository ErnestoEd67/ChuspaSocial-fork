# Integración continua

ChuspaSocial utiliza GitHub Actions para ejecutar verificaciones automáticas y tareas relacionadas con integración continua, despliegue y seguridad.

## Workflows

| Workflow | Cuándo corre | Qué verifica o ejecuta |
|---|---|---|
| ci.yml — CI | En Pull Requests dirigidos a dev o main | Verifica que el Pull Request tenga una descripción y que haga referencia a un issue mediante Closes #, Fixes # o Refs #. |
| deploy.yml — Deploy | En cada push a main | Ejecuta el workflow de despliegue. Actualmente contiene un paso de ejemplo pendiente de definir para el despliegue del proyecto. |
| security.yml — Security scan | En cada push a dev y en Pull Requests dirigidos a main | Ejecuta un análisis de seguridad mediante CodeQL para JavaScript/TypeScript. |
