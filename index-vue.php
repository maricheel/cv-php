<!doctype html>
<?php
include_once('include/database.php');
?>
<?php 

  $id=intval($_GET['id']);
  $sql=mysqli_query($conn , "SELECT * FROM `info` WHERE `id` = '$id'");
  $info=mysqli_fetch_assoc($sql);
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Resume/CV Design</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" >
</head>
<body>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="<?php echo $info['img']; ?>"  alt="profile_pic">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold"><?php echo $info['name']; ?></p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fa fa-map-signs fa-2x"></i>
             </div>
             <div class="data">
               <?php echo $info['adresse']; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-mobile  fa-2x"></i>
             </div>
             <div class="data">
              <?php echo $info['tele']; ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa  fa-envelope fa-2x" aria-hidden="true"></i>
             </div>
             <div class="data">
               <p style="font-size: 12px"><?php echo $info['email']; ?></p>
             </div>
           </li>
          
         </ul>
       </div>
       <div class="resume_item resume_skills" style="height: 250px">
         
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p><?php echo $info['fac']; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
              <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>           
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p><?php echo $info['twit']; ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i> 
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p><?php echo $info['link']; ?></p>
             </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">Fonctionalite</p>
         </div>
        <p><?php echo $info['dsc']; ?></p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Experience</p>
         </div>
        <ul>
           
            <li>
              <div class="date"><?php echo $info['ae']; ?></div>
              <div class="info">
                     <p class="semi-bold"><?php echo $info['ne']; ?></p> 
                  <p><?php echo $info['exp']; ?></p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Formation</p>
         </div>
      <ul>
            <li>
                <div class="date"><?php echo $info['af']; ?></div> 
                <div class="info">
                     <p class="semi-bold"><?php echo $info['nf']; ?></p> 
                  <p><?php echo $info['form']; ?></p>
                </div>
            </li>
         
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Competance</p>
         </div>
      <ul>
            <li>
               
                <div class="info">
              
                  <p><?php echo $info['form']; ?></p>
                </div>
            </li>
         
        </ul>
    </div>
    <div class="resume_item resume_hobby" >
      <div class="title">
           <p class="bold">Centre d'intere</p>
         </div>
       <ul>
         <li><i class="fa fa-book"></i></li>
         <li><i class="fa fa-gamepad"></i></li>
         <li><i class="fa fa-music"></i></li>
         <li><i class="fa fa-pagelines"></i></li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
