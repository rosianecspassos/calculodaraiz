<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Raízes quadrada e cúbica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="mt-5 mb-4">
    <div class="container w-50 mt-4 text-center">
        <h4>Cálcula da raiz</h4>
    <form action = "<?=$_SERVER['PHP_SELF']?>" method="get">
  <label>Informe um número</label><br>
  <input type="number" name="num" value="<?=$num?>"> <br> 
  <input type="submit" class="btn btn-primary mt-2 mb-4"> 
    </form>
<?php 
$num = $_GET['num'];
$rq=sqrt($num); 
$rc=$num ** (1/3); 
echo "A raiz quadrada de $num é $rq e a sua raiz cúbica é $rc"; 
?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
