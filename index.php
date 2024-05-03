<? include_once "./mysql.php"; 



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title></title>
</head>
<body>
  <div class="wrapper">

    <form action="form.php" method="POST" name="feedback">

      <p> Ваше имя: <br>
        <input type="text" name="name"></p>

      <p> Ваш номер телефона: <br>
        <input type="text" name="number"></p> <br>

      <input type="submit" name="send" value="Добавить">
    </form>

    <br>

    <div class="">

      <a href="./contact.php">Просмотр контактов</a>
      
    </div>
  </div>
</body>
</html>