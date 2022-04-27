<html>

<head>

  <title>Learning PHP</title>
  <!-- Latest compiled and minified CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->



</head>

<?php

$learn = "Learning PHP";
$tasks = array("Learn PHP", "Practice PHP", "Create YTDir - A youtube directory", "Practice even more");

/*
echo $learn;
echo "Things to do " . $tasks[0] . $tasks[1] . $tasks[2] . $tasks[3];
*/

?>

<body>

  <div class="container">
    <br>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="ytdir/index.php">YTDir</a></li>
      <li class="breadcrumb-item"><a href="https://github.com/penaxr/php-learning">Github</a></li>
      <li class="breadcrumb-item active"></li>
    </ol>
  </div>



  <div class="container">
    <br>
    <div class="alert alert-warning" role="alert">
      <strong><?php echo $learn ?></strong>
    </div>
    <?php

    echo "<ul>";
    foreach ($tasks as $task) {
      echo "<li>" . $task . "</li>";
    }
    echo "</ul>";

    ?>


  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>