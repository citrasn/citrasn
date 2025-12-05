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
        echo '🐘 Running PHP Script'
        bat '"C:\\xampp\\php\\php.exe" index.php'
    }
}
    }

    post {
        always {
            echo '🏁 Pipeline completed!'
        }
    }
}
