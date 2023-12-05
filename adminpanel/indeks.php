<?php
    require "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
</head>

<style>
    .kotak {
        border: solid;
    }
    .summary-kategori {
        background-color : #FF66B2

    }
    </style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                <i class="bi bi-house"></i> Home
</li>
</ol>
</nav>
    <h2>Halo, <?php echo $_SESSION['username']; ?></h2> 

            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4 summary-kategori p-5">
                        <div class="row">
                            <div class="col-6">
                                <i class="fas fa-align-justify fa-5x text-black-50"></i>
    <!-- Add your content here if needed -->heni
</div>

                        </div>
                    </div>
                </div>
            </div>
    
           
</div>


<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="fontawesome/js/all.min.js"></script>
</body>
 </html>