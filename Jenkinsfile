// pipeline {
//     agent none
//     stages {
//         stage('Test') {
//             steps {
//                 sh 'ls'
//                 echo 'Hello World'
//             }
//             post {
//                 always {
//                     echo 'This will always run'
//                 }
//             }
//         }
//     }
// }

pipeline {
    agent {
        node {
            label 'maître'
        }
    }
    stages {
        stage('Test') {
            steps {
                // Check if the database is up and running
                sh 'mysql -h db -u worldcup -p password -e "SELECT 1"'
                script {
                    if (currentBuild.result == null) {
                        // The database is up, exit with success
                        echo 'Success'
                    } else {
                        // The database is down, create a new database and switch the application to use it
                        sh 'mysql -h db -u worldcup -p password -e "CREATE DATABASE worldCupBackUp"'
                        sh 'mysql -h db -u worldcup -p password worldCupBackUp < dump.sql'
                        // Update the application to use the new database
                        // Run a test to make sure the new database is working fine
                        // Delete the old database
                    }
                }
            }
            post {
                always {
                    echo 'This will always run'
                }
            }
        }
    }
}