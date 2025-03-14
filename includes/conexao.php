<?php
$host = 'localhost';      
$dbname = 'sistemateste';  
$dbuser = 'root';          
$dbpass = '';              
// $port = '8080';            

try {
    // Conexão com o banco de dados utilizando PDO e especificando a porta
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    
    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Captura o erro e exibe uma mensagem
    echo "Erro na conexão: " . $e->getMessage();
}
?>
