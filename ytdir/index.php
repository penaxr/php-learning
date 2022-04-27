<html>

<head>

    <title> YTDir - Youtube Directory </title>

    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="container">
        <div class="p-5 my-4 bg-light rounded-3">
            <h1>YTDir - Favorite video directory</h1>
            <?php

            // setup la db
            require_once('includes/dbconf.php');

            // variables de la db
            $ytdb = "SELECT id, url FROM ytdir";
            $urldata = mysqli_query($conn, $ytdb);

            // verifications et requetes
            if (mysqli_num_rows($urldata) > 0) {
                echo "

    <div class=\"container-fluid\">
     <div class=\"row col\">
      <table class=\"table table-striped\">
       <thead>
        <tr>
         <th>ID</th>
         <th>URL</th>
         <th>REMOVE</th>
        </tr>
       </thead>";
                while ($row = mysqli_fetch_array($urldata)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['url'] . "</td>";
                    echo "<td>" . "<button class='btn btn-danger'> remove </button>" .  "</td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_close($conn);
            }

            ?>


            <!-- ajout tasks -->

            <br>


                <form class="form" action="addurl.php" method="post">
                    <div class="row col">

                        <div class="col">
                            <div class="form-group">
                                <input type="text" class="form-control" name="url" id="url" placeholder="Video url">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" name="AddUrl" class="btn btn-success">ADD URL</button>
                        </div>
                    </div>

                </form>




        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>