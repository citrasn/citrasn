<?php
echo "========================================\n";
echo "        JENKINS CI/CD PIPELINE\n";
echo "========================================\n";
echo "Repository: citrasn/citrasn\n";
echo "Time: " . date('Y-m-d H:i:s') . "\n";
echo "PHP Version: " . PHP_VERSION . "\n";
echo "========================================\n\n";

// Simple function for testing
function calculate($x, $y, $operation) {
    switch($operation) {
        case '+': return $x + $y;
        case '-': return $x - $y;
        case '*': return $x * $y;
        case '/': return $y != 0 ? $x / $y : 'undefined';
        default: return 'invalid operation';
    }
}

echo "🧮 MATHEMATICAL OPERATIONS:\n";
echo "15 + 7 = " . calculate(15, 7, '+') . "\n";
echo "20 - 8 = " . calculate(20, 8, '-') . "\n";
echo "6 * 9 = " . calculate(6, 9, '*') . "\n";
echo "100 / 25 = " . calculate(100, 25, '/') . "\n\n";

// Array example
$technologies = ['Jenkins', 'GitHub', 'NGROK', 'PHP', 'PHPUnit'];
echo "🛠️ TECHNOLOGIES USED:\n";
foreach($technologies as $index => $tech) {
    echo ($index + 1) . ". " . $tech . "\n";
}

echo "\n";
echo "✅ TUGAS 2: powershell 'php index.php' - COMPLETED!\n";
echo "✅ CI/CD Pipeline is working!\n";
echo "========================================\n";
?>
