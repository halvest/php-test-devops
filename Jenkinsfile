pipeline {
    agent any

    stages {

        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/halvest/php-test-devops.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                echo 'No dependencies needed for this PHP app'
            }
        }

        stage('Unit Test') {
            steps {
                echo 'No tests defined'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t php-test-devops .'
            }
        }

        stage('Run App') {
            steps {
                sh 'docker run --rm -p 8000:8000 php-test-devops'
            }
        }

    }
}
