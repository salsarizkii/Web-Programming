<?php 
    session_start();
    include '../functions/db_functions.php';

    // $id = $_SESSION['user_id'];
    $datas = select("SELECT * FROM inventory_item"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Inventory | Dashboard</title>

    <link rel="stylesheet" href="../../css/style.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body style="color:  #43847b" >
    <?php include '../partials/navbar.php' ?>

    <div class="container">
        <h3 class="mt-3" class="fw-bold">Inventories</h3>
        <table class="table table-striped" styles="color:  #43847b">
            <thead class="fw-bold">
                <tr style="color:  #43847b">
                    <td>No</td>
                    <td>Product Name</td>
                    <td>Type</td>
                    <td>Quantity</td>
                    <td>Condition</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Time</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php $count = 1; foreach($datas as $row) : ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $row['item_name'] ?></td>
                        <td><?= $row['item_type'] ?></td>
                        <td><?= $row['item_qty'] ?></td>
                        <td><?= $row['item_condition'] ?></td>
                        <td><?= $row['item_desc'] ?></td>
                        <td><img src="../../img/<?= $row['image_path'] ?>" alt="<?= $$row['image_path'] ?>" height="100px"></td>
                        <td><?= $row['time'] ?></td>
                        <td>
                            <a href="../view/editPost.php?id=<?= $row['id_item'] ?>" class="badge bg-info"><i class="bi bi-pencil-square"></i></a>
                            <a href="../functions/deletePost.php?id=<?= $row['id_item'] ?>" class="badge bg-danger" onclick="confirm('Anda yakin ingin menghapus data ini?');"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php $count++; endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>