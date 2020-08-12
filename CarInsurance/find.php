<?php include"includes/header.php" ?>

    <h1 class='text-center'> Find Policies </h1>
    <form class='text-center' action="find.php" method="post">
        <div class="form-group">
            <label for="cphone">Customer Phone Number</label>
            <input id="cphone" type="tel" name="cphone" placeholder="Phone Number">
        </div>
        <button type="submit" class="btn btn-success" name="search">Search</button>
    </form>

    <?php
        if(isset($_POST['search'])){
            $phone = trim($_POST['cphone']);
            require_once "php/config.php";
            $query = "SELECT * FROM Insurances WHERE phone = '{$phone}'";
            global $connection;
            if(($res = mysqli_query($connection, $query))){
                if(mysqli_num_rows($res) > 0){
                    echo "<br>";
                    echo "<div class= container text-center>";
                    echo "<table class='table'>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Company Name</th>";
                                echo "<th>Model</th>";
                                echo "<th>Years</th>";
                                echo "<th>Premium</th>";
                                echo "<th>Bought Year</th>";
                                echo "<th>Customer Name</th>";
                                echo "<th>Phone Number</th>";
                                echo "<th>Email</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_assoc($res)){
                            echo "<tr>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['cname']}</td>";
                                echo "<td>{$row['mname']}</td>";
                                echo "<td>{$row['years']}</td>";
                                echo "<td>{$row['premium']}</td>";
                                echo "<td>{$row['dofbuy']}</td>";
                                echo "<td>{$row['custname']}</td>";
                                echo "<td>{$row['phone']}</td>";
                                echo "<td>{$row['email']}</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                    mysqli_free_result($res);
                } else 
                    echo "No Policies found";
            } else 
                die("Something went wrong.");
            mysqli_close($connection);
        }
    ?>

<?php include"includes/footer.php" ?>
