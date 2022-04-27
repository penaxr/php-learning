<html>

<head>

    <title> YTDir - Youtube Directory </title>

    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- fa -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>



</head>

<body>

    <br>
    <br>
    <div class="container">

        <div class="col-md-10 col-md-offset-1">
            <div class="alert alert-info" role="alert">
                <strong>YTDir - Youtube video directory</strong>
            </div>
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Panel Heading</h3>
                        </div>
                        <br>

                    </div>
                    <br>
                    <form class="form" action="addurl.php" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="title">
                                </div>
                            </div>
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
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <?php

                        // setup la db
                        require_once('includes/dbconf.php');

                        // variables de la db
                        $ytdb = "SELECT id, url, name FROM ytdir";
                        $urldata = mysqli_query($conn, $ytdb);

                        // verifications et requetes
                        if (mysqli_num_rows($urldata) > 0) {
                            echo "


       <thead>
        <tr>
         <th>TITLE</th>
         <th>URL</th>
         <th>REMOVE</th>
        </tr>
       </thead>";
                            while ($row = mysqli_fetch_array($urldata)) {
                                echo "<tr>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['url'] . "</td>";
                                echo "<td>" . "<button class='btn btn-danger '> remove </button>" .  "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";

                            mysqli_close($conn);
                        }

                        ?>


                        <!-- ajout tasks -->

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center|end">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>





                </div>

            </div>

        </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>