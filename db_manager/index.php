<?php


if (hasGetKey('api-name')) {
    switch ($_GET['api-name']) {
        case 'create-db':
            echo "<h1>DB MANAGER</h1>";
            createDatabase('project_managment2');
            break;

    }

}

function hasGetKey($key) {
    return (isset($_GET[$key]) && is_string($_GET[$key]));
}

function createDatabase($db_name) {
    $servername = "web.local";
    $username = "root";
    $password = "option123";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create database
    $sql = "CREATE DATABASE $db_name";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
}