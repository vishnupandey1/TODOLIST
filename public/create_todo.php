
<?php
   	
    $myFile = "todos.json";
    $arr_data = [];

    $todo = $_POST['todo'];
    if ('' == $todo) {
        echo "<div class='alert alert-danger'>Unable to save this member.</div>";
        header("Location:listing.php");
        exit(); 
    }
    $jsondata = file_get_contents($myFile);
    $arr_data = json_decode($jsondata, true);
	   array_push($arr_data,$todo);
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	   file_put_contents($myFile, $jsondata);
	       
    header("Location:listing.php");
    exit();

?>
