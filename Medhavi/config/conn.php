<?php 
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = 'password';
    $dbname = 'Medhavi';

    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    // if($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // } else {
    //     echo "Connected successfully";
    // }

    // $sql = "CREATE TABLE BCSIT(
    //         id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    //         semester INT NOT NULL,
    //         course VARCHAR(255) NOT NULL
    //         );";

    // if($conn->query($sql) == true) {
    //     echo "Table `BCSIT` created successfullly";
    // } else {
    //     echo "Error creating table: " . $conn->error . "\n";
    // }

    $sql = "INSERT INTO BCSIT (semester, course) VALUES (4, 'Java');";

    if($conn->query($sql) == true) {
        echo "Values inserted Succesfully" . "\n";
    } else {
        echo "Error Inserting Values " . $conn->error . "\n"; 
    }
?>