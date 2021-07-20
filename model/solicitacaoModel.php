<?php
require_once 'connect.php';

$nome = $_POST["nome"];
$ip = $_POST["ip"];
$link = $_POST["link"];
$email = $_POST["email"];

try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $stmt = $pdo->prepare('INSERT INTO liberacao (nomeSolicitacao, emailSolicitacao, urlSolicitacao, ipSolicitacao, statusSolicitacao) VALUES(:nome, :email, :link, :ip, 0)');
    $stmt->execute(array(
      ':nome' => $nome,
      ':email' => $email,
      ':link' => $link,
      ':ip' => $ip
    ));
    echo '<script>alert("Enviado com Sucesso")</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://192.168.15.25" />';
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
?>