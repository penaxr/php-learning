<html>

<head>

    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="container">
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
     <div class=\"row col custyle\">
      <table class=\"table table-striped custab\">
       <thead>
        <tr>
         <th>ID</th>
         <th>TASK</th>
         <th>DUE FOR</th>
         <th>STATUS</th>
         <th></th>
         <th></th>

        </tr>
       </thead>";
                while ($row = mysqli_fetch_array($todoData)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['task'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . "<button class='btn btn-success'> update </button>" .  "</td>";
                    echo "<td>" . "<button class='btn btn-danger'> remove </button>" .  "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_close($conn);
            }

            ?>


            <!-- ajout tasks -->

            <br>


            <div class="container">
                <form class="form" action="addtask.php" method="post">
                    <div class="row">

                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" name="task" id="task" placeholder="task to add">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" id="date" placeholder="date">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" name="AddTask" class="btn btn-success">ADD TASK</button>
                        </div>
                    </div>

                </form>

            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>