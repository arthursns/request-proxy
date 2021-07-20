<?php
require_once '../model/connect.php';
require_once '../protect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </head>
    <body>
    <?php include 'sidebarTop.php';?>
    <table class="table table-striped">
    <thead>
        <tr class="first">
        <th scope="col"></th>
        <th scope="col" style="text-align:center">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">IP</th>
        <th scope="col">URL</th>
        <th scope="col">
        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="status" checked>
        </div>
        </th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $consulta = $pdo->query("SELECT * FROM liberacao;");
    while ($dado = $consulta->fetch(PDO::FETCH_ASSOC)) {?>
        <tr <?php
        if($dado['statusSolicitacao'] == 1){
        echo 'class="status1 d-none"';}
        else{ echo 'class="status0"';}
        ?>>
        <th scope="row" id="dvConteudo"></th>
        <td style="text-align: center"><?php echo $dado['idSolicitacao']?></td>
        <td><?php echo $dado['nomeSolicitacao']?></td>
        <td><?php echo $dado['emailSolicitacao']?></td>
        <td><?php echo $dado['ipSolicitacao']?></td>
        <td><?php echo $dado['urlSolicitacao']?></td>
        <td>
        <div class="form-check form-switch" style="text-align: right">
        <input status="<?php echo $dado['statusSolicitacao']?>" idSolicitacao="<?php echo $dado['idSolicitacao']?>" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
        <?php
        if($dado['statusSolicitacao'] == 1){
        echo "checked";}
        ?> onclick="clicado(this.getAttribute('idSolicitacao'), this.getAttribute('status'))">
        </div>
        </td>
        <th scope="row"></th>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php include 'sidebarBottom.php';?>
    </body>
</html>
