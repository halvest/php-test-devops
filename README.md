# PHP Login with Docker and Jenkins

A basic PHP app that prints a login interface and processes credentials using native PHP.  
This project is used for CI/CD practice using Jenkins running inside Docker.

## 🧱 Structure

- `index.php` – Simple login page with session-based authentication (username: `admin`, password: `123456`)
- `Dockerfile` – Docker build configuration using PHP 7.4 CLI
- `Jenkinsfile` – Jenkins CI/CD pipeline that clones repo, builds Docker image, and runs container

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone  https://github.com/halvest/php-test-devops.git
cd php-test-devops
