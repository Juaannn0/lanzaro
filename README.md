# Lanzaro - Gestión de Contenido Multiplataforma

<div align="center">
    <img src="assets/img/logo.png" alt="Lanzaro Logo" width="200"/>
    <p><strong>Simplifica la gestión de tu contenido digital</strong></p>
</div>

## 🚀 Sobre Lanzaro

Lanzaro es una plataforma web moderna diseñada para simplificar la gestión de contenido digital a través de múltiples plataformas. Nuestro objetivo es proporcionar una solución centralizada y segura para empresas y creadores de contenido.

## ✨ Características Principales

- **Panel Intuitivo**: Interface moderna y fácil de usar
- **Gestión de Usuarios**: Sistema completo de autenticación y roles
- **Seguridad Avanzada**: Protección robusta de datos y contenido
- **Multiplataforma**: Gestiona contenido para diferentes plataformas desde un solo lugar
- **Interfaz Responsive**: Accede desde cualquier dispositivo

## 🛠️ Tecnologías

- **Backend**: PHP 7.4 con CodeIgniter 3
- **Frontend**: HTML5, CSS3, JavaScript
- **Base de Datos**: MySQL
- **Contenedorización**: Docker

## 🚦 Requisitos Previos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Docker y Docker Compose
- Composer

## 🔧 Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/tuusuario/lanzaro.git
cd lanzaro
```

2. Construir y levantar los contenedores:
```bash
docker-compose up -d --build
```

3. Instalar dependencias:
```bash
composer install
```

4. Configurar la base de datos:
```bash
docker exec -i lanzaro_db mysql -uroot -proot < database/schema.sql
```

## 📚 Estructura del Proyecto

```
lanzaro/
├── backend/                # Aplicación CodeIgniter
│   ├── application/       # Lógica principal
│   ├── assets/           # Recursos estáticos
│   └── system/           # Core de CodeIgniter
├── frontend/             # (Futuro desarrollo UI/UX)
├── docker/              # Configuraciones Docker
└── database/           # Schemas y migraciones
```

## 👥 Características de Usuario

- **Autenticación**
  - Registro de usuarios
  - Inicio de sesión
  - Recuperación de contraseña
  
- **Panel de Control**
  - Gestión de perfil
  - Estadísticas de contenido
  - Acciones rápidas
  
- **Gestión de Contenido**
  - Publicación multiplataforma
  - Programación de contenido
  - Análisis de rendimiento

## 🔒 Seguridad

- Protección contra CSRF
- Contraseñas hasheadas
- Sesiones seguras
- Validación de formularios
- Sanitización de datos

## 📝 Licencia

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

## 🤝 Contribuir

Las contribuciones son bienvenidas. Por favor, lee [CONTRIBUTING.md](CONTRIBUTING.md) para detalles sobre nuestro código de conducta y el proceso para enviarnos pull requests.
