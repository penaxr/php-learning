<html>

<head>

    <title>Budgetor</title>

    <!-- mon css -->

    <link href="assets/css/budgetor.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- fa -->
    <script src="https://kit.fontawesome.com/c81198f907.js" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg custombg">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="">My PHP Journey</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-primary">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">
                            <i class="fa-solid fa-address-card"></i>
                            <p> About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/budgetor.php">
                            <i class="fa-solid fa-calculator"></i>
                            <p> Budgetor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ytdir.php">
                            <i class="fa-brands fa-youtube"></i>
                            <p> ytdir</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</head>

<body class="bg-dark">
    <br>
    <br>
    <div class="container bg-dark">
        <div class="row">

            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-6 bg-light boxStyle">
                <h3 class="hstyle">Budget Calculator</h3>

                <form name="budgetorFrm" action="" method="POST" onSubmit="validate()">
                    <div class="col-auto">
                        <label for="revenu" class="rlabel">Revenu</label>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="revenu" id="revenu" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="revenu" class="rlabel">Additional Revenu</label>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="revenuMore" id="revenuMore" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="revenu" class="rlabel">Monthly Bills</label>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="bills" id="bills" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <label for="revenu" class="rlabel">Limit to use</label>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" name="limit" id="limit" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" id="submit" name="submit" class="btn btn-danger btn-sm">Calculate</button>
                    </div>
                    <br>
                    <h3>
                        <?php
                        if (isset($_POST["submit"])) {
                            $revenu = $_POST["revenu"];
                            $revenuMore = $_POST["revenuMore"];
                            $bills = $_POST["bills"];
                            $limit = $_POST["limit"];
                            $totalRev = $revenu + $revenuMore;
                            $usage = $totalRev - $bills;
                            $total = $usage - $limit;

                            echo "Money Left: $usage </br>";
                        }
                        ?>
                    </h3>
                </form>

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2"></div>
        </div>
        <br>

        </br>
    </div>

</body>


</html>