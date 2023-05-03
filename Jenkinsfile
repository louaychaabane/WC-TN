pipeline {
    agent none
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