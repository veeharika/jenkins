<?php include"includes/header.php" ?>

    <h1 class='text-center'> Delete Policy </h1>
    <form class='text-center' action="update.php" method="post">
        <div class="form-group">
            <label for="id">Insurance ID</label>
            <input id="id" type="tel" name="id" placeholder="Insurance ID">
        </div>
        <div class="form-group">
            <label for="years">No of Years</label>
            <input type="number" name="years">
        </div>
        <div class="form-group">
            <label for="price">Premium</label>
            <input type="number" id="price" name="price" required>
        </div>
        <button type="submit" class="btn btn-warning" name="update">Update</button>
    </form>

    <?php
        if(isset($_POST['update'])){
            $id = trim($_POST['id']);
            $years = trim($_POST['years']);
            $amt = trim($_POST['price']);

            require_once "php/config.php";
            $query = "UPDATE Insurances SET years='{$years}', premium='{$amt}'  WHERE id = '{$id}'";
            global $connection;
            if((mysqli_query($connection, $query)))
                echo "Updated Successfully";
            else
                echo "Can not update.";
        }
    ?>

<?php include"includes/footer.php" ?>