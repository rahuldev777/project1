<?php
//servername =>localhost
 //username =>root
 //password=>""
 //database name=>contact11
 $conn = mysqli_connect("localhost","root","","contact11");
 if($conn===false){
    die("ERROR:could not connect.".mysqli_connect_error());
 }
$name = $_REQUEST['name'];
$number= $_REQUEST['number'];
$email= $_REQUEST['email'];
$messages= $_REQUEST['messages'];
$sql = "INSERT INTO datass VALUES ('$name','$number','$email','$messages')";
if (mysqli_query($conn, $sql)){
   
      header("Location: " . $_SERVER["HTTP_REFERER"]);

    if (isset($_SERVER["HTTP_REFERER"])) {
       
  
         echo '<script>alert("Thank you for contacting us")</script>';
        
    }

  

}else{
    echo "ERROR:Hush! sorry $sql.".mysqli_error($conn);
}

mysqli_close($conn);




?>