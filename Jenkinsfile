pipeline {
    agent any

    stages {
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
                sh 'docker run --rm -d -p 8000:8000 --name php-app php-test-devops'
            }
        }
    }
}
