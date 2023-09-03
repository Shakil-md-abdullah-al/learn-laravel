<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--CSS File-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">Product</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Product Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Item-1</a></li>
                        <li><a href="" class="dropdown-item">Item-2</a></li>
                        <li><a href="" class="dropdown-item">Item-3</a></li>
                        <li><a href="" class="dropdown-item">Item-4</a></li>
                        <li><a href="" class="dropdown-item">Item-5</a></li>
                    </ul>
                </li>
                <li><a href="" class="nav-link">Blog</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <!--Ending of Navmenu-->

    <section class="py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">All Student</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                <?php foreach ($students as $student){ ?>
                                <tr>
                                    <td><?php echo $student['Name']?></td>
                                    <td><?php echo $student['Email']?></td>
                                    <td><?php echo $student['Phone']?></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--JS File-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>