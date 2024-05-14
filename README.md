# Ebikes Project

This is a WordPress website developed for an exam project, set up using Docker for containerization.

Prerequisites
Before you begin, ensure you have the following installed on your machine:

Docker
Docker Compose

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/denis-lmph/wordpress-exam.git

2. Navigate to the project directory:

    cd wordpress-exam

3. Build the Docker containers:
   docker-compose build

4. Start the Docker containers:
docker-compose up -d

5. Access the WordPress site in your browser at http://localhost:8000.

File Structure
wordpress-exam/
├── .docker/
│   ├── build/
│   │   └── Gulp/
│   │       └── Dockerfile
│   └── docker-entrypoint-initdb.d/
│       └── init.sql
├── docker-compose.yml
├── Dockerfile
├── html/
│   ├── wp-content/
│   └── wp-config.php
├── themesrc/
│   ├── gulpfile.js
│   ├── package.json
│   └── src/
│       ├── scss/
│       │   └── style.scss
│       └── css/
└── db/
    └── init.sql
