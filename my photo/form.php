
<?php
    if(isset($_POST['submit']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone_number=$_POST['phone_number'];
      $message=$_POST['message'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "88.212.247.60";
        $username = "dorophey";
        $password = "Hmf6A8s6d0";
        $dbname = "dorophey_myphoto";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO contact (name, email, phone_number, message) VALUES ('$name', '$email', '$phone_number', '$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>