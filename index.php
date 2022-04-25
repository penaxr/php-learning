<?php

$learn = "Learning PHP";
$tasks = array("Learn PHP", "Practice PHP", "Create TODO v2", "Practice even more");

/*
echo $learn;
echo "Things to do " . $tasks[0] . $tasks[1] . $tasks[2] . $tasks[3];
*/

?>

<html>
<h1><?php echo $learn ?></h1>

<?php
       
    echo "<ul>";
      foreach($tasks as $task){
          echo "<li>" . $task . "</li>";
      }
      echo "</ul>";

    ?>

<a href="todo/index.php">TODO PROJECT</a>

</html>