<?php 
        
    // Only process the form if $_POST is not empty
    if ( ! empty($_POST)) {

        //connect to MySQL
    $mysqli = new mysqli( 'localhost', 'sql2354768', 'rZ2*hT3!', 'sql2354768' );

        //Check our connection.
    if ( mysqli -> connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error);
    }

        //Insert form data
    $sql = "INSERT INTO subscribers(email) VALUES ( '{$mysqli->real_escape_string($_POST['email'])}')";
    $insert = $mysqli->query($sql);
    
        //Print response from MySQL
    if ( $insert ) {
        echo "Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }

        //close connection
    $mysqli->close();

}
?>