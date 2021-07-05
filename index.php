
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Acesso Negado</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <script src="js/validator.min.js"></script>
  <body>
  <div class="container" style="margin-top:3%; margin-bottom:3%">
  <h2>
  Página bloqueada pelo nosso firewall, favor solicitar permissão no formulário abaixo:
  </h2>
  <form action="model/solicitacaoModel.php" method="post" data-toggle="validator">
  <div class="form-group">
    <label for="formGroupExampleInput">Nome do solicitante</label>
    <input type="text" class="form-control" id="formGroupExampleInput1" name="nome" required>
    <div class="help-block with-errors">Preencha esse campo!</div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">IP do solicitante</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" readonly value="<?php $hostname = gethostbyname($_SERVER['REMOTE_ADDR']);
echo $hostname; ?>" name="ip">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email do solicitante</label required>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email" required>
    <div class="help-block with-errors">Preencha esse campo!</div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Url do site bloqueado</label>
    <input type="text" class="form-control" id="formGroupExampleInput3" value="<?php 
    if(isset($_SERVER['HTTP_REFERER'])) {
      echo $_SERVER['HTTP_REFERER'];
       }
    ?>" name="link" required>
    <div class="help-block with-errors">Preencha esse campo!</div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
  <div class="container" style="margin-top:3%; margin-bottom:3%">
  <h3>Qual a importância de um Firewall?</h3>
  <p>Um Firewall aliado a um Antivírus consegue proteger a empresa de:</p>
    <ul class="list-group">
      <li class="list-group-item">Vírus e softwares mal intencionados que podem deixar os computadores lentos impactando na produtividade ou até mesmo roubar senhas de acesso a bancos e outros aplicativos.</li>
      <li class="list-group-item">Hackers que desejem invadir a rede fazendo ataques disfarçados sequestrando ou roubando dados ocasionando prejuízos ou a parada completa da operação da empresa.</li>
      <li class="list-group-item">Bloqueia o tráfego de saída para não deixar que determinados protocolos sejam utilizados para espalhar os vírus que já o podem ter atacado.</li>
      <li class="list-group-item">Firewall pode ser Configurada à sua medida de modo a ser seguro e ao mesmo tempo flexível ao tipo de segurança que pretende.</li>
    </ul>
  </div>
</body>
</html>

