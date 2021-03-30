<?php
      include_once('database.php');
          if(isset($_POST['submit'])){   
            $name=strip_tags($_POST['name']);  
            $email=strip_tags($_POST['email']); 
            $adresse=$_POST['adresse'];
            $tele=$_POST['tele'];
            $link=$_POST['link'];
            $form=$_POST['form'];
            $comp=$_POST['comp'];
            $exp=$_POST['exp'];
            $dsc=$_POST['dsc'];
            $fac=$_POST['fac'];
            $twit=$_POST['twit'];
            $ne=$_POST['ne'];
            $nf=$_POST['nf'];
            $ae=$_POST['ae'];
            $af=$_POST['af'];
            $date=date("Y-m-d");                                        
                  if(isset($_FILES['img'])){
                      $image=$_FILES['img'];  
                      $image_name=$image['name'];
                      $image_tmp=$image['tmp_name'];
                      $image_size=$image['size']; 
                      $image_error=$image['error']; 
                      $image_exe=explode('.',$image_name);
                      $image_exe=strtolower(end($image_exe));
                      $allowd=array('png','gif','jpg','jpeg');    
                      if(in_array($image_exe , $allowd)) {
                        if($image_error === 0){
                          if($image_size <= 3000000){    
                            $new_name=uniqid('img',false).'.'.$image_exe; 
                            $image_dir='../img/avatar/'. $new_name; 
                            $image_db='img/avatar/'.$new_name;

                            if(move_uploaded_file($image_tmp , $image_dir)){
 $insert = " INSERT INTO `info` (`name`, `email`  , `adresse` , `tele` , `fac`, `link` , `twit` , `form` , `comp`, `exp`, `img`, `dsc`,`dat`,`ne`,`nf`,`ae`,`af`) 
            VALUES ('$name', '$email','$adresse', '$tele','$fac','$link', '$twit','$form', '$comp', '$exp', '$image_db', '$dsc' ,'$date','$ne','$nf','$ae','$af')";  
                              $insert_sql=mysqli_query($conn , $insert) ;  
                              if(isset($insert_sql)){
                                echo ' <div class="alert alert-danger fa-1x" role="alert" > Conversion...</div>'; 
                                echo '<meta http-equiv="refresh" content="0.3; \'index.php\' "/>'; 

                      }
                }
              } 
          }

      }
    }
  }
      
         ?>