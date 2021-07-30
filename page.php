<?php 

    require_once('connectvars.php');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Unable to connect to dB");


    if (isset($_POST['submit'])){
        $ques = mysqli_real_escape_string($dbc,trim($_POST['question']));
        $ans = mysqli_real_escape_string($dbc,trim($_POST['answer']));
        $error = false;

        if (!empty($ques) && !empty($ans)){

            $query = "INSERT INTO chatterbot (ques, ans) VALUES ('$ques', '$ans')";
            $result = mysqli_query($dbc, $query) or die('Error querying database.');  
        }
        mysqli_close($dbc);
    }

?>