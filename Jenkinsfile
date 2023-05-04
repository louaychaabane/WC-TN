pipeline {
    agent none
    stages {
        stage('Test') {
            agent {
                label 'my-node' // specify the node or agent to run the step on
            }
            steps {
                sh 'ls'
                echo 'Hello World'
            }
        }
    }
}
