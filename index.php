<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/views/includes/metatags.php"
    ?>
</head>
<body>
   
<?php
    require "./app/model/crud.class.php";
    $crud = new Crud();
    if (isset($_GET["vista"])) {
        switch ($_GET["vista"]) {
            case 'home':
                require "./app/views/home.php";
                break;
            case 'read':
                $contactos = $crud->read();
                require "./app/views/read.php";
                break;
            case 'create':
                require "./app/views/create.php";
                break; 
            case 'update':
                require "./app/views/update.php";
                break;       
            default:
                header("location:./read");
                break;
        }
    }else{
        header("location:./home");
    }
?>

    <?php 
        require "./app/views/includes/scipts.php"
    ?>
</body>
</html>