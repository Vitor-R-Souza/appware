<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquinas</title>
    <link rel="stylesheet" href="estilos/machines.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
        require_once('requires/connect.php');
        require_once('requires/func.php');

        $busc = $BD->query("SELECT * FROM `dados` WHERE `email` = '$_SESSION[email]'");
        
        
    ?>
    <main>
    <table class="content-table">
        <thead>
          <tr>
            <th>Nome Máquina</th>
            <th>Sist. Operacional</th>
            <th>Processador</th>
            <th>Memória RAM</th>
            <th>Armazenamento</th>
            <th>Placa de Vídeo</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($reg = $busc->fetch_object()){
              echo "<tr>
                      <td>$reg->nome_computador</td>
                      <td>$reg->sistema_operacional</td>
                      <td>$reg->processador</td>
                      <td>$reg->memoria_ram GB</td>
                      <td>$reg->espaco_armazenamento GB</td>
                      <td>$reg->placa_video</td>
                      
                  </tr>";
            }
          ?>
          </tr>
        </tbody>
      </table>
      <div class="btn-analise">
          <a href="DetectorAPPWARE.exe" download><button>Baixar Detector</button></a>
      </div>
    </main>
</body>
</html>