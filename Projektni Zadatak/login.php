<?php
    ob_start();
   session_start();
            $msg = '';
            $xmldoc  = "adminData.xml";
            $admin = new SimpleXMLElement(file_get_contents($xmldoc));
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == $admin->username && $_POST['password'] == $admin->password) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'Unijeli ste ispravne podatke! Preusmjeravanje u toku...';
                   
                   header('Refresh: 2; URL = Administracija.php');
               }else {
                  echo 'Pogrešan username ili password! Preusmjeravanje u toku...';
                   
                   header('Refresh: 2; URL = Admin.php');
               }
            }
else {
                  echo 'Niste upisali username i password! Preusmjeravanje u toku...';
                   header('Refresh: 2; URL = Admin.php');
               }

         ?>