<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        ul li .dropdown {
            display: none;
        }

        ul li:hover .dropdown {
            display: block;
            padding: 10px;
            position: absolute;
            background-color: whitesmoke;
        }

        ul li:hover .dropdown li {
            left: 25%;
            margin-bottom: 5px;
            display: block;
        }

        nav ul ul li {
            float: none;
            display: list-item;
            width: 80px;
        }

        a:hover .dropdown {
            background-color: #333;
        }

        .nav {
            position: relative;
            background-color: whitesmoke;
        }

        .navbar {
            width: 100%;
            position: fixed;
            display: flex;
            background-color: whitesmoke;
        }

        .row .card:hover {
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
            transform: scale(1.02);
        }

        .row .card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-fixed-top navbar-default ">
        <div class="container">
            <a class="navbar-brand  font-weight-bold" href="#page-top">Higher Frequencies</a>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="index.php">Home </a></li>
                <li><a href="cart.php">Cart </a></li>
                <li><a>Category </a>
                    <ul class="dropdown">
                        <li><a class="dropdown-item" href="lightcolors.php">Light Colors Shirt</a></li>
                        <li><a class="dropdown-item" href="darkcolors.php">Dark Colors Shirt</a></li>
                    </ul>
                </li>
                    <li><a href="history.php">History </a></li>
                    <li><a href="logout.php">Logout </a></li>
                    <li><a href="signup.php">Sign Up </a></li>
                    <li><a href="login.php">Login </a></li>
                <form action="search.php" method="get" class="navbar-form navbar-right ">
                    <input type="text" class="form-control" name="keyword">
                    <button class="btn btn-primary">Search <i class="glyphicon glyphicon-search"></i></button>
                </form>
            </ul>
        </div>
        </div>
    </nav>

    <section class="konten">
        <div class="container">
            <br><br><br>
            <center>
            <h1> Dark Colors</h1>
            </center>
            <br><br>
            <div class="row">
                <div class="card col-md-3">
                    <div class="thumbnail">
                        <img src="darkcolors.jpg" alt="">
                        <div class="caption">
                            <h3>Dark Colors Shirt</h3>
                            <h5>Rp.90.000,-</h5>
                            <a href="" class="btn btn-primary">Buy <i class="glyphicon glyphicon-tags"></i></a>
                            <a href="" class="btn btn-default">Detail <i class="glyphicon glyphicon-eye-open"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-3">
                    <div class="thumbnail">
                        <img src="darkcolors.jpg" alt="">
                        <div class="caption">
                            <h3>Dark Colors Shirt</h3>
                            <h5>Rp.90.000,-</h5>
                            <a href="" class="btn btn-primary">Buy <i class="glyphicon glyphicon-tags"></i></a>
                            <a href="" class="btn btn-default">Detail <i class="glyphicon glyphicon-eye-open"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-3">
                    <div class="thumbnail">
                        <img src="darkcolors.jpg" alt="">
                        <div class="caption">
                            <h3>Dark Colors Shirt</h3>
                            <h5>Rp.90.000,-</h5>
                            <a href="" class="btn btn-primary">Buy <i class="glyphicon glyphicon-tags"></i></a>
                            <a href="" class="btn btn-default">Detail <i class="glyphicon glyphicon-eye-open"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card col-md-3">
                    <div class="thumbnail">
                        <img src="darkcolors.jpg" alt="">
                        <div class="caption">
                            <h3>Dark Colors Shirt</h3>
                            <h5>Rp.90.000,-</h5>
                            <a href="" class="btn btn-primary">Buy <i class="glyphicon glyphicon-tags"></i></a>
                            <a href="" class="btn btn-default">Detail <i class="glyphicon glyphicon-eye-open"></i></a>
                        </div>
                    </div>
                </div>



            </div>

        </div>

</body>

</html>