pipeline {
    agent any
    
    environment {
        GITHUB_REPO = 'https://github.com/citrasn/citrasn'
        BUILD_TIME = sh(script: 'date +"%Y-%m-%d %H:%M:%S"', returnStdout: true).trim()
    }
    
    triggers {
        githubPush()
    }
    
    stages {
        stage('Checkout Code') {
            steps {
                echo '🚀 Starting CI/CD Pipeline'
                echo '📦 Checking out code from GitHub...'
                
                checkout([
                    $class: 'GitSCM',
                    branches: [[name: '*/main']],
                    userRemoteConfigs: [[
                        url: 'https://github.com/citrasn/citrasn.git'
                    ]]
                ])
                
                // Show git info
                bat '''
                    echo ============================
                    echo GIT INFORMATION
                    echo ============================
                    git log --oneline -1
                    echo Branch: 
                    git branch --show-current
                    echo ============================
                '''
            }
        }
        
        stage('List Files') {
            steps {
                echo '📁 Files in repository:'
                bat 'dir /B'
            }
        }
        
        stage('Create Required Files') {
            steps {
                echo '📝 Creating required files...'
                
                // Create index.php if not exists
                script {
                    if (!fileExists('index.php')) {
                        writeFile file: 'index.php', text: '''<?php
echo "=================================\\n";
echo "     CI/CD PIPELINE DEMO\\n";
echo "=================================\\n";
echo "Time: " . date("Y-m-d H:i:s") . "\\n";
echo "PHP Version: " . PHP_VERSION . "\\n";
echo "=================================\\n";

// Simple calculations
$a = 10;
$b = 5;
echo "10 + 5 = " . ($a + $b) . "\\n";
echo "10 - 5 = " . ($a - $b) . "\\n";
echo "10 * 5 = " . ($a * $b) . "\\n";
echo "10 / 5 = " . ($a / $b) . "\\n";

echo "\\n✅ PHP script executed successfully!\\n";
?>
'''
                        echo '✅ Created index.php'
                    }
                }
                
                // Create composer.json for PHPUnit
                script {
                    if (!fileExists('composer.json')) {
                        writeFile file: 'composer.json', text: '''{
    "name": "citrasn/ci-cd",
    "require-dev": {
        "phpunit/phpunit": "^9.5"
    }
}
'''
                        echo '✅ Created composer.json'
                    }
                }
            }
        }
        
        stage('Run PHP Script') {
            steps {
                echo '🐘 Running PHP Script (Tugas 2)...'
                echo 'Command: powershell "php index.php"'
                
                powershell '''
                    Write-Host "=== EXECUTING PHP ===" -ForegroundColor Cyan
                    php index.php
                    if ($LASTEXITCODE -eq 0) {
                        Write-Host "✅ PHP script successful!" -ForegroundColor Green
                    }
                '''
            }
        }
        
        stage('Simple Test') {
            steps {
                echo '🧪 Running simple test...'
                bat 'echo "CI/CD Pipeline Test Complete!"'
                bat 'echo "Build time: %date% %time%"'
            }
        }
    }
    
    post {
        always {
            echo '🏁 Pipeline completed!'
        }
        success {
            echo '✅ BUILD SUCCESS!'
        }
    }
}
