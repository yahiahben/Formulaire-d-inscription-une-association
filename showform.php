<?php
require 'connection/connection-mysql.php';
require 'connection/connection_es.php';
require 'function/function-sf.php';
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style-sf.css" />
  <link rel="stylesheet" href="assets/css/style-tasks.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>totallysports!</title>
  <link rel="icone" type="image" href="\assets\images\logoBDS.png">
</head>

<body>

  <div class="wrapper">
    <p style="text-align: center">
      <strong>Salutations et bienvenue !</strong>
    </p>
    <p style="text-align: center">
      C'est avec grand plaisir que nous vous souhaitons la bienvenue en tant que nouveau membre de notre <strong>association</strong>.
      </br>
      Nous croyons fermement que vos aptitudes sportives et vos dépendances nous aideront à réaliser ce que nous visons!
    </p>
  </div>
  <div id="body1">
    <div class="w3-container w3-white w3-card">
      <div class="header">
        <a class='one' href="https://www.esigelec.fr/" target="_blank">
          <img src="assets/images/esigelec-preview.png" alt="esigelec-link" style="width:200px ">
        </a>
      </div>
    </div>

    <?php if (isset($_SESSION['_flashdata'])) : ?>
      <?php foreach ($_SESSION['_flashdata'] as $key => $val) : ?>
        <div class="mx-2 my-2 d-flex alert alert-success">
          <div class="col-11 p-2 d-flex align-items-center justify-content-left">
            <?= $_SESSION['_flashdata']['success'] ?? 'test' ?>
          </div>
          <div class="col-1 d-flex align-items-cente justify-content-center closebtn" onclick="this.parentElement.style='display: none !important;';">
            <span class="glyphicon glyphicon-remove" style="font-size:36px; line-height: 30px; height: 20px">&times;</span>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>



    <div class=" frm">
      <div class="frm1">
        <h1 id="titre" ; style="font: size 600px; text-align:center;">BDS ESIGELEC : Totally Sports!</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <br><br>
          Last Name:
          <span class="error">*</span>
          <input type="text" name="lastname" placeholder="Your last name.." required oninvalid="this.setCustomValidity('Last name is required')" onvalid="this.setCustomValidity('')" />
          <br>
          First Name:
          <span class="error">*</span>
          <input type="text" name="firstname" placeholder="Your first name.." required oninvalid="this.setCustomValidity('First name is required')" onvalid="this.setCustomValidity('')" />
          <br>
          Date of birth:
          <span class="error">*</span>
          <input type="date" name="birthday" required oninvalid="this.setCustomValidity('birthday is required')" onvalid="this.setCustomValidity('')" />
          <br>
          Gender:
          <span class="error">*</span>
          <div id="frm3">
            <input type="radio" name="gender" value="female" required>Female &nbsp;
            <input type="radio" name="gender" value="male" required>Male &nbsp;
            <input type="radio" name="gender" value="other" required>Other
          </div>
          Phone number:
          <span class="error">*</span>
          <input type="text" name="phonenumber" placeholder="+33612345678" required oninvalid="this.setCustomValidity('Phone number is required')" onvalid="this.setCustomValidity('')" />
          <br>
          E-mail:
          <span class="error">*</span>
          <input type="email" name="email" id="email" class="case" placeholder="name@groupe-esigelec.org" required />
          <br>
          Grade level:
          <span class="error">*</span>
          <select name="gradelevel" id="grade" required oninvalid="this.setCustomValidity('Grade level is required')" onvalid="this.setCustomValidity('')" >
            <option value="" disabled selected hidden>Your grade level..</option>
            <option value="CPII1">CPII1</option>
            <option value="CPII2">CPII2</option>
            <option value="1A">A1</option>
            <option value="2A">A2</option>
            <option value="3A">A3</option>
            <option value="MASTER">Master</option>
          </select>
          <br>
          Website:
          <input type="text" name="website" placeholder="Facebook Or Instagram" />
          <br>
          Sports :
          <span class="error">*</span>
          <div>
            <div id="newtask">
              <input type="text" placeholder="The sports you wish to practice.." />
              <button type="button" id="push"><i class="fas fa-plus" style="font-size:24px;"></i></button>
            </div>

            <div id="tasks"></div>
            <script src="assets/javascript/script.js"></script>
          </div>
          <br>

          <p><span class="error">* required field</span></p>
          <br>

          <input type="submit" name="submit" id="btn" value="Submit" />
        </form>
      </div>
    </div>

    <div class="footer-basic">
      <footer>
        <div class="icons">
          <a href="https://www.instagram.com/bds_totally_sports/" class="icon ion-social-instagram">
            <i class="ri-instagram-line"></i>
          </a>
          <!-- <a href="#" class="icon ion-social-snapchat">
            <i class="ri-snapchat-line"></i>
          </a> -->
          <a href="https://www.linkedin.com/company/89502392/" class="icon ion-social-linkedin">
            <i class="ri-linkedin-line"></i>
          </a>
          <a href="https://www.facebook.com/groups/totallysports/" class="icon ion-social-facebook">
            <i class="ri-facebook-line"></i>
          </a>
        </div>
        <!-- <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul> -->
        <br>
        <div class="bg-light py-1">
          <div class="container text-center">
            <a>
              <img src="assets\images\logoBDS.png" alt="BDS-LOGO" style="width:100px ">
            </a>
            <p class="text-muted mb-0 py-2">Totally sports! © 2022</p>
          </div>
          <div id="current_date" ; style="text-align:center;">
            <script>
              document.getElementById("current_date").innerHTML = Date();
            </script>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>