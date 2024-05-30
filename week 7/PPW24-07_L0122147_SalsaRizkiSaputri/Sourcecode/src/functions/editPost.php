<?php 
    session_start();
    include 'db_functions.php';

    $item_name = htmlspecialchars($_POST['item_name']);
    $item_qty = htmlspecialchars($_POST['item_qty']);
    $item_condition= htmlspecialchars($_POST['item_condition']);
    $item_type = htmlspecialchars($_POST['item_type']);
    $item_desc = htmlspecialchars($_POST['item_desc']);
    date_default_timezone_set("Asia/Jakarta");
    $time = date("Y-m-d H:i:s");
    $oldImage = $_POST['oldImage'];
    $id = $_POST['id'];

    if($_FILES['image']['error'] === 4){
        $image = $oldImage;
    } else {
        $image = upload();
    }

    if(update()){
        echo "
            <script>
                alert('Post has been updated!');
                window.location.href = '../view/dashboard.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Update failed!');
                window.location.href = '../view/dashboard.php';
            </script>
        ";
    }

    function upload()
    {
        $acceptedFileTypes = ['jpg', 'jpeg', 'png'];
        $imageName = $_FILES['image']['name'];
        $imageType = explode('.', $imageName);
        $imageType = end($imageType);
        $imageSize = $_FILES['image']['size'];
        $imageTemp = $_FILES['image']['tmp_name'];


        if(!in_array($imageType, $acceptedFileTypes)){
            $_SESSION['is_error'] = true;
            $_SESSION['message'] = "File type is not accepted.";
            header("Location: ../view/createPost.php");
        }

        if($imageSize > 5000000){
            $_SESSION['is_error'] = true;
            $_SESSION['message'] = "File is too big.";
            header("Location: ../view/createPost.php");
        }

        $newImageName = uniqid();
        $newImageName .= '.';
        $newImageName .= $imageType;

        move_uploaded_file($imageTemp, "../../img/$newImageName");
        return $newImageName;
    }

    function validateData($data)
    {   
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }

    function update()
    {
        global $mysqli, $item_name, $item_qty, $time, $item_type, $item_desc, $item_condition, $image, $id;
        $query = "UPDATE inventory_item SET item_name = '$item_name', item_qty = '$item_qty', time = '$time', item_type = '$item_type', item_desc = '$item_desc', item_condition = '$item_condition', image_path = '$image' WHERE id_item = '$id'";
        $result = $mysqli->query($query);
        if ($result){
            return 1;
        } else {
            return 0;
        }
    }
?>