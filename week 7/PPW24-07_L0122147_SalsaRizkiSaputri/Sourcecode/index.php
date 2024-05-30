<?php 
    session_start();

    if(!empty($_SESSION['is_login']) && $_SESSION['is_login'] == true){
        $name = $_SESSION['name'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>School Inventory | Home</title>
    
</head>
<body style="Background-color: #cdfadb">
    <?php include 'src/partials/navbar.php'; ?>

    <div class="container-fluid p-0">
        <img src="img/school.jpg" alt="jumbotron" class="jumbotron">
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 50vh;" >
        <?php if (!empty($_SESSION['is_login']) && $_SESSION['is_login'] == true) : ?>
            <h2 class="mb-3">Halo, <span style="color: #43847b"><?= $name ?></span></h2>
            <a href="./src/view/dashboard.php" class="btn mb-5 fw-bold" style="color: #cdfadb; Background-color: #43847b">Dashboard</a>
            <a href="./src/view/createPost.php" class="btn fw-bold" style="color: #cdfadb;Background-color: #43847b">Add Inventory</a>
        <?php else : ?>
            <a href="./src/view/login.php" class="btn mb-5 fw-bold" style="color: #cdfadb; Background-color: #43847b">Login</a>
            <a href="./src/view/register.php" class="btn fw-bold" style="color: #cdfadb;Background-color: #43847b">Register</a>
        <?php endif;?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
