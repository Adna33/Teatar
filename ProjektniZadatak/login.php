<?php
    ob_start();
   session_start();
            $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
            $msg = '';
            
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                $rezultat = $dbh->query("SELECT username, password FROM privilegije");
                foreach ($rezultat as $u) {
				
               if ($_POST['username'] == $u['username'] && $_POST['password'] == $u['password']) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  
                  echo 'Unijeli ste ispravne podatke! Preusmjeravanje u toku...';
                   
                   header('Refresh: 2; URL = Administracija.php');
               }else {
                  echo 'Pogrešan username ili password! Preusmjeravanje u toku...';
                   
                   header('Refresh: 2; URL = Admin.php');
               }}
            }
else {
                  echo 'Niste upisali username i password! Preusmjeravanje u toku...';
                   header('Refresh: 2; URL = Admin.php');
               }

         ?>