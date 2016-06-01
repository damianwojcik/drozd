<?php
    //checks if localhost
    if( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "drozd";
    } else{
        $servername = "localhost";
        $username = "18342515_drozd";
        $password = "H62xfWatoMbbzKJR9";
        $dbname = "18342515_drozd";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }


    //if data is POST
    if(isset($_POST['email']) && !empty($_POST['email'])){

    $email = $_POST['email'];

    //php email validation
    if (empty($email)) {
      $emailErr = "<p class=\"confirmation\">Proszę wpisać adres email.</p>";
      echo $emailErr;
    } else {
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "<p class=\"confirmation\">Proszę wpisać właściwy adres email.</p>";
        echo $emailErr;
      }
    }

    //adds record to data base - table name: newsletter, row: email
    $sql = "INSERT INTO wppd_newsletter (email)
    VALUES ('$email')";

        //cannot delete?
        if ($conn->query($sql) === TRUE) {
           echo "";
        }

    }

    //finish database connection
    $conn->close();

?>
