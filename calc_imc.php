<?php
    /*
    Programa: Atividade 7 
    Autor: Wesley Rebeque Gropo
    RGM: 123.896
    Polo: São Paulo/Lapa
    Data: 14/03/2023
    */
?>
<!DOCTYOE html>
<html lang="pt-br">
    <head>
        <title>Atividade 7</title>
    </head>
    <body>
 
<form action="calc_imc.php" method="post">
  Peso (em Kg): <input type="text" name="peso" /><br><br>
  Altura (em m): <input type="text" name="altura" /><br><br>
  <input type="submit" value="Calcular IMC" name="calcular" />
  <input type="reset" value="Limpar" name="limpar" />
</form>

<?php 
if (isset($_POST['calcular'])) {
  $peso = $_POST['peso'];
  $altura = $_POST['altura'];
  $imc = $peso / ($altura * $altura);

  echo "<p>O peso informado foi de: $peso Kg</p>";
  echo "<p>A altura informada foi de: $altura m</p>";
  echo "<p>IMC: $imc</p>";
}
?>
    
        
    </body>
</html>