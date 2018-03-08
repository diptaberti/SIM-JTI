<?php 
include_once('function/helper.php');
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="../UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="../IE=edge,chrome=1"> 
    <meta name="viewport" content="../width=device-width, initial-scale=1.0"> 
        <title>Login</title>
        <meta name="description" content="../Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="../css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="../Codrops" />
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $assets;?>css/style.css" />
    <script src="../js/modernizr.custom.63321.js"></script>
    <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        
     <div class="container">
    
      <!-- Codrops top bar
            <div class="codrops-top">
                
                <span class="right">
                    <a href="loginAdmin.php">
                        <strong>ADMIN</strong>
                    </a>
                </span>
            </div>/ Codrops top bar -->


            <header>
      
        <h1><strong>SIPTA</strong> JTI</h1>
        <h1>(Sistem Informasi Pengolahan Tugas Akhir Jurusan Teknologi Informasi)</h1>
        <h2>Online</h2>
      
      </header>
      
      <br>  
      <div align="center">
      <img src="<?php echo $gambar;?>/polije.png" height="130" width="130" />
      </div>

      <section class="main">
        <form class="form-1" name="form1" method="post" action="proses_login.php">
          <p class="field">
            <input type="text" name="ussname" placeholder="Username" required>
            <i class="icon-user icon-large"></i>
          </p>
            <p class="field">
              <input type="password" name="passwd" placeholder="Password">
              <i class="icon-lock icon-large"></i>
          </p>
		  
          <p class="submit">
            <button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
          </p>
        </form>
      </section>
      
        
    </body>
</html>