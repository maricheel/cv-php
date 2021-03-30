<!doctype html>
<?php
 include_once('include/database.php');
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>CV maker</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>CV MAKER</h2>
    <p class="lead">....</p>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Les CV</span>
      </h4>
    
          <?php 

                    $result = $conn -> query("SELECT * FROM `info`"); 
                        if(mysqli_num_rows($result) > 0) {
                            while ($info = $result -> fetch_assoc()) {
                               echo '
                                          <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                              <div>
                                           
                                                <h6 class="my-0">'.$info['name'].'</h6>
                                                <small>'.$info['dat'].'</small>
                                              </div>
                                                      <a href="index-vue.php?id='.$info['id'].'" class="btn btn-primary" type="submit">vue</a>
                                            </li>      
                                          </ul>';
                            }
                        }
           ?>
    </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Construction de CV</h4>
 <form class="needs-validation" action="include/register.php" method="post"  id="register" novalidate>
        <div class="row">
          <div class="col-md-7 mb-3">
            <label for="firstName">Nom complet</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="name" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="desc">Description </label>
          <textarea  class="form-control" id="desc" name="dsc" rows="4"></textarea> 
          <div class="invalid-feedback">
            Please enter a valid address for shipping updates.
          </div>
        </div>


        <div class="mb-3">
          <label for="Image">Image</label>
            <input type="file" class="form-control" id="Image" name="img">       
               <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>


        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="adress">Adresse</label>
          <input type="text" class="form-control" id="adress" name="adresse" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
         <div class="mb-3">
          <label for="tel">Telephone</label>
          <input type="text" class="form-control" id="tel" placeholder="0625359864" name="tele" required>
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
          <div class="mb-3">
          <label for="fac">Facebook</label>
          <input type="text" class="form-control" id="fac" placeholder="*********" name="fac" required>
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
          <div class="mb-3">
          <label for="link">Linked in</label>
          <input type="text" class="form-control" id="link" name="link" placeholder="*********" required>
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
          <div class="mb-3">
          <label for="twit">Twiter</label>
          <input type="text" class="form-control" id="twit" name="twit" placeholder="*********" required>
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
         <div class="col-md-7 mb-3">
            <label for="firstName">année d'expérience</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="ae" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div> 
          <div class="col-md-7 mb-3">
            <label for="firstName">Nom de la compagnie</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="ne" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="mb-3">
          <label for="exp">Experiences professionnelles</label>
          <textarea  class="form-control" id="exp" placeholder="Experiences professionnelles" name="exp" rows="4"></textarea>
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
         <div class="col-md-7 mb-3">
            <label for="firstName">année de formation</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="af" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
           <div class="col-md-7 mb-3">
            <label for="firstName">nom établissement</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="nf" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="mb-3">
          <label for="form">Formation</label>
          <textarea  class="form-control" id="form" placeholder="Formation" name="form" rows="4"></textarea> 
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>

          <div class="mb-3">
          <label for="comp">Competences</label>
          <textarea  class="form-control" id="comp" placeholder="Competences" name="comp" rows="4"></textarea> 
          <div class="invalid-feedback">
            Please enter your shipping .
          </div>
        </div>
       


        <hr class="mb-4">

           <div class="col-md-6 text-center" >
                    <div id="result" >
                    </div>
          </div>


        <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Valider les info</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"><h2>&copy; 2020</h2> <h1 style="">HICHAM ELBANAJI</h1></p>
   
  </footer>
</div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/script.js"></script>
      <script src="js/form.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/form-validation.js"></script>
      <script src="js/site_js.min.js"></script>
</body>

</html>
