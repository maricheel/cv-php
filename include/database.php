
<?php
       $conn = mysqli_connect('localhost:3306', 'root' , '', 'cv');  
       mysqli_set_charset($conn , "utf8");
        if(!$conn) {
       
            echo  mysqli_connect_error("erreur de connection") . mysqli_connect_errno();
        }
        function close_db()
        {
          global $conn;
          mysqli_close($conn);
        }
?>