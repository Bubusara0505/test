<?php

  $servername = "localhost";
  $username = "root";
  $passwors = "";
  $DBname = "test";

  $mysql = mysqli_connect($servername, $username, $passwors, $DBname);

  if (mysqli_connect_errno()) {
    die("Ошибка подключения к базе " . mysqli_connect_errno() . " Описание ошибки" . mysqli_connect_error());
  }