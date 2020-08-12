<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE','carinsdb');
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
    if(!$connection){
        die("Connection Not Established");
    }
    else{
        $query = "SHOW DATABASES LIKE '" . DB_DATABASE . "'";
        $result = mysqli_query($connection, $query);  
        if($result){
            if(mysqli_num_rows($result)===0){
                $query = "CREATE DATABASE " . DB_DATABASE;
                $result = mysqli_query($connection, $query);
                if(!$result)
                    die("Error Creating Database");
                mysqli_close($connection);
                $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
                if(!$connection)
                    die("Database connection Failed....".mysqli_connect_error());
                create_tables();
            }
        } else {
            die("Query failed.");
        }
    }
    function create($table,$attr){
        global $connection;
        $q1 = "CREATE TABLE IF NOT EXISTS ";
        $query = $q1 . $table. "(" . $attr . ")";
        if(!mysqli_query($connection, $query))
            die("Error creating table ".$table ."\n Query ".$query);
        else
            echo "Added Succesfully";
    }
    function create_tables(){
        create("Insurances", "id int PRIMARY KEY AUTO_INCREMENT, cname varchar(20), mname varchar(20), years int, premium float, dofbuy int, custname varchar(30) NOT NULL, phone varchar(10), email varchar(50)");
    }
    function insert($val){
        global $connection;
        $query = "INSERT INTO Insurances (cname, mname, years, premium , dofbuy, custname, phone, email) VALUES" . "(" . $val .")";
        if(!mysqli_query($connection, $query))
            die("Error inserting data into ".$query);
    }
    $connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);         
    if(!$connection)
        die("Database connection Failed....".mysqli_connect_error());
?>