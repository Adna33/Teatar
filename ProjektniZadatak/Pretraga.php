<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
    <meta name="viewport" content="width=device-width" />
    <TITLE>Teatar.ba</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
    <link rel="stylesheet" type="text/css" href="search.css">
   
</HEAD>

<BODY>
    <script src="pretragaFunkcionalnosti.js"></script>
    <script src="funkcionalnosti.js"></script>
    <div id="wrapper">
        <div id="zaglavlje">
            <div id="teatarlogo"><img class="logo" img src="Slike/Logo.png" alt="Logo Tearta"></div>
            <div id="navigation">
                <ul>
                    <li><a href="Onama.php">O nama </a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn" id="poz" onclick="myFunction()">Pozorista</a>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="Pozorista.php">Nasa Scena</a>
                            <a href="Galerija.php">Galerija</a>
                        </div>
                    </li>
                    <li><a href="Repertoar.php" id="trenutna">Repertoari </a></li>
                    <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                    <li><a href="Kontakt.php">Kontakt </a></li>
                </ul>
            </div>

        </div>
        
        <div class="red">

            <div class="red">

                <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" class="form-wrapper cf">
                    <input name="unosPretrage" id="unosPretrage" type="text" onkeyup="predloziPretragu(this.value)" placeholder="Pretraga..." required>
                    <button name="submitPretraga" id="submitPretraga" type="submit">Pretraži</button>
                    
                   <div class="red" id="predlozi"></div>

                </form>
                 
            </div>


            <?php 
    
     if (isset($_REQUEST['unosPretrage'])){
           //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
        $rezultat = $dbh->query("SELECT ime, dan, opis FROM predstava");
        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
         
         
        
foreach ($rezultat as $u) { 
    
    if (stristr($u['ime'],$_REQUEST['unosPretrage']) || stristr($u['dan'],$_REQUEST['unosPretrage']) )
    {
        
        print "<p><b>".$u['ime']. PHP_EOL."</b></p>";
        print "<p>".$u['dan']. PHP_EOL."</p>";
        print "<p>".$u['opis']. PHP_EOL."</p><br>";
    }
   
     
}
    }                
                ?>
        </div>
        <div id="footer">
            <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
        </div>

    </div>

</BODY>

</HTML>