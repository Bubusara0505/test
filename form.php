<?php
  include_once "./mysql.php";

    if (isset($_POST)) {
      print("Ваше имя" . " " . $_POST['name']);
      print("<br> Ваш номер" . " " . $_POST['number']);
    }

    $name = $_POST['name'];
    $number = $_POST['number'];
    
    $test_query = "INSERT INTO `test` (`name`, `number`) VALUES ('$name', '$number')";

    $res = mysqli_query($mysql, $test_query);
    
    ?>
