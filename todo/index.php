<html>

<head>

    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<div class="container-fluid">
    <div class="p-5 my-4 bg-light rounded-3">
        <?php

// setup la db
require_once('includes/dbconf.php');

// variables de la db
$data = "SELECT id, task, date, status FROM todo";
$todoData = mysqli_query($conn, $data);

// verifications et requetes
if (mysqli_num_rows($todoData) > 0) {
    echo "
    
    <div class=\"container\">
     <div class=\"row col-md-6 col-md-offset-2 custyle\">
      <table class=\"table table-striped custab\">
       <thead>
        <tr>
         <th>ID</th>
         <th>TASK</th>
         <th>DUE FOR</th>
         <th>STATUS</th>
        </tr>
       </thead>";
while ($row = mysqli_fetch_array($todoData)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['task'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
}

?>
    

    <!-- ajout tasks -->

    <br>

    <div class="row">
        <div class="col">
        <form class="form-inline" action="addtask.php" method="post">
            <div class="form-group">
                <label for="task">Task</label>
                <input type="text" class="form-control" name="task" id="task" placeholder="task to add">
            </div>
            <div class="form-group">
                <label for="date">DUE FOR</label>
                <input type="date" class="form-control" name="date" id="date" placeholder="date">
            </div>
            <button type="submit" class="btn btn-danger">ADD TASK</button>

        </form>

    </div>
</div>


</div>
</div>