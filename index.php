<html>

<head>

    <title> YTDir - Youtube Directory </title>

    <!-- mon css -->

    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- fa -->
    <script src="https://kit.fontawesome.com/c81198f907.js" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-dragon"></i>
                YTDir
            </a>
        </div>
    </nav>

</head>
<a href=""></a>

<body class="bg-dark">
<br>
<br>
    <div class="container col-md-5 bg-light bg-gradient mt-3 shadow-lg p-3  bg-light rounded">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center font-monospace">About the project</h3>
            </div>
            <div class="card-body">
                <h5 class="card-title">A journey into PHP</h5>
                <p class="card-text">This is my first project made with php. A simple youtube video url database, But I plan to add more features as I learn PHP</p>
                <a href="https://github.com/penaxr/php-learning" class="btn btn-primary"><i class="fa-brands fa-github"></i> My Github</a>
            </div>
        </div>
    </div>

    <div class="container col-md-5 bg-light bg-gradient mt-3 shadow-lg p-3  bg-light rounded">
        <div class="col-auto col-md-offset-1 ">
            <div class="alert alert-info" role="alert">
                <strong> <i class="fa-solid fa-dragon"></i> YTDir - Youtube video directory</strong>
            </div>
            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row">

                        <script>
                            var alertList = document.querySelectorAll('.alert');
                            alertList.forEach(function(alert) {
                                new bootstrap.Alert(alert)
                            })
                        </script>
                    </div>
                    <form class="form" action="addurl.php" method="post">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="title" class="col-form-label">Title: </label>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="" style="width: 173px;" required>

                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text" id="youtubeurl">https://www.youtube.com/watch?v=</span>
                                    <input type="text" class="form-control" placeholder="" name="url" aria-describedby="youtubeurl" required>
                                    <button class="btn btn-success" name="AddUrl" type="submit"> <i class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-auto py-1">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <?php

                            // setup la db
                            require_once('includes/dbconf.php');

                            // variables de la db
                            $ytdb = "SELECT id, url, name, fav FROM ytdir";
                            $urldata = mysqli_query($conn, $ytdb);

                            // verifications et requetes
                            if (mysqli_num_rows($urldata) > 0) {
                                echo
                                "
                            <thead>
                            <tr>
                            <th>VIDEO TITLE</th>
                            <th>WATCH URL</th>
                            <th>ACTIONS</th>
                            </tr>
                            </thead>";


                                while ($row = mysqli_fetch_array($urldata)) {
                                    echo '<form class="form" method="post">';
                                    echo "<tr>";
                                    echo "<td style='width: 200px'>" . $row['name'] . "</td>";
                                    echo "<td style='width: 135px'>" . $row['url'] . "</td>";
                                    echo '<td style="width: 165px;"><button class="btn btn-info" formaction="https://www.youtube.com/watch?v=' . $row['url'] . '" name="favbtn"><i class="fa-solid fa-eye"> Watch</i></button><button class="btn btn-danger ms-2" type="submit" name="delbtn" value="' . $row['id'] . '" /><i class="fa-solid fa-ban"> Delete</i></button></td>';
                                    echo "</tr>";
                                    echo '</form>';
                                }

                                echo "</table>";

                                if (isset($_POST['delbtn']) and is_numeric($_POST['delbtn'])) {
                                    $delete = $_POST['delbtn'];
                                    $ytdel =  "DELETE FROM `ytdir` where `id` = '$delete'";
                                    mysqli_query($conn, $ytdel);
                                }

                                mysqli_close($conn);
                            }

                            ?>

                            <!--        <nav aria-label="Page navigation pt-4">
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
                            </nav> -->

                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>