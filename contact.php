<?

include_once "./mysql.php";

  $query = "SELECT * FROM `test`";
  $result = mysqli_query($mysql, $query);


    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "Имя: " . $row['name'] . ", Номер: " . $row['number'] . "<br>";
      }
    } else {
      echo "Ошибка: " . mysqli_error($mysql);
    }
  ?>