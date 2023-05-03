pipeline {
    agent {
        docker { image 'node:18.16.0-alpine' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'node --version'
                sh 'ls'
                echo 'Hello World na7nik'
            }
        }
        post {
        always {
            echo 'This will always run'
        }}
    }
}