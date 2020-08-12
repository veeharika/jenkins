<?php include"includes/header.php" ?>

    <h1 class='text-center'> Delete Policy </h1>
    <form class='text-center' action="delete.php" method="post">
        <div class="form-group">
            <label for="id">Insurance ID</label>
            <input id="id" type="tel" name="id" placeholder="Insurance ID">
        </div>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
    </form>

    <?php
        if(isset($_POST['delete'])){
            $id = trim($_POST['id']);
            require_once "php/config.php";
            $query = "DELETE FROM Insurances WHERE id = '{$id}'";
            global $connection;
            if((mysqli_query($connection, $query)))
                echo "Deleted Successfully";
            else
                echo "Can not delete.";
        }
    ?>

<?php include"includes/footer.php" ?>
