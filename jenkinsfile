pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/main']], userRemoteConfigs: [[url: 'https://github.com/citrasn/citrasn.git']]])
            }
        }

        stage('Run PHP') {
            steps {
                bat 'php index.php'
            }
        }
    }

    post {
        always {
            echo '🏁 Pipeline completed!'
        }
    }
}
