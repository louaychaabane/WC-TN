pipeline {
    agent none
    stages {
        stage('Test') {
            steps {
                sh 'ls'
                echo 'Hello World'
            }
            post {
                always {
                    echo 'This will always run'
                }
            }
        }
    }
}
