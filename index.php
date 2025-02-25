<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php include("funcoes.php") ?>
<form class="form-control" method="POST">

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="text" class="form-control" id="primeiroNumero" placeholder="Primeiro Número">
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email address</label>
      <input type="text" class="form-control" id="segundoNumero" placeholder="Segundo Número">
    </div>

</form>

<form >
    <br><br>
    <button type="submit" class="btn btn-primary">Calcular
        <?php
            //Coletando os numeros dos campos
            $num1 = $_POST["primeiroNumero"];
            $num2 = $_POST["segundoNumero"];
        ?>

    </button>
    <br><br>
</form>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Resultado</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" readonly>

      <?php 
      if (isset($_POST["primeiroNumero"])) {
          echo somar($num1,$num2).
          echo subtrair($num1,$num2).
          echo dividir($num1,$num2).
          echo multiplicar($num1,$num2); 
        }else{
            echo "Preencha os campos!";
        }
       ?>


      </textarea>
    </div>
    <button class="btn btn-primary"><a style="color: #000; text-decoration: none;" href="menu.php"> Voltar</a></button>
</body>
</html>