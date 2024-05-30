<?php 
    include 'db_functions.php';

    if(delete()){
        echo "
            <script>
                alert('Item has been deleted!');
                window.location.href = '../view/dashboard.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Delete failed!');
                window.location.href = '../view/dashboard.php';
            </script>
        ";
    }

    function delete()
    {
        global $mysqli;
        $id = $_GET['id'];
        $result = $mysqli->query("DELETE FROM inventory_item WHERE id_item = $id");
        if($result){
            return 1;
        } else {
            return 0;
        }
    }
?>