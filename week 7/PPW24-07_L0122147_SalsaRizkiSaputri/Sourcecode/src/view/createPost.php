<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Inventory | Create Post</title>

    <link rel="stylesheet" href="../../css/style.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="../../css/trix.css">
    <script type="text/javascript" src="../../js/trix.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>

</head>
<body style="color: #43847b" class="fw-bold" >
    <?php include '../partials/navbar.php' ?>

    <div class="row">
        <div class="col-md-6 mx-auto mt-3">
            <h3 class="mb-3">Create an Item</h3>
            <form action="../functions/createPost.php" method="post" enctype="multipart/form-data">

                <div class="d-flex align-items-center mb-3">
                    <label for="item_name" class="form-label me-5 col-md-1">Product Name</label>
                    <input type="text" name="item_name" id="item_name" class="form-control" required>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label for="item_type" class="form-label me-5 col-md-1">Type</label>
                    <input type="text" name="item_type" id="item_type" class="form-control" required>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <label for="item_qty" class="form-label me-5 col-md-1">Quantity</label>
                    <input type="number" name="item_qty" id="item_qty" class="form-control" required>
                    </div>
                <div class="d-flex align-items-center mb-3">
                    <label for="item_desc" class="form-label me-5 col-md-1">Description</label>
                    <input type="text" name="item_desc" id="item_desc" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="item_condition" class="form-label">Condition</label>
                    <select id="item_condition" class="form-select" name="item_condition">
                        <option value="sangat layak">sangat layak</option>
                        <option value="layak">layak</option>
                        <option value="tidak layak">tidak layak</option>
                    </select>
                </div>
                <div>
                    <label for="image" class="form-label">Image</label>
                    <input type="file" id="image" name="image" class="form-control <?php if(!empty($_SESSION['is_error'])) echo "is-invalid" ?> " required>
                    <?php if(!empty($_SESSION['is_error'])) : ?>
                        <div class="invalid-feedback"><?= $_SESSION['message'] ?></div>
                    <?php endif; ?>
                    <div>File type : .jpg, .jpeg, .png</div>
                    <div>Max : 5 Mb</div>
                </div>
                <button type="submit" class="btn fw-bold mb-3" style="color: #cdfadb;Background-color: #43847b">Submit</button>
            </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>