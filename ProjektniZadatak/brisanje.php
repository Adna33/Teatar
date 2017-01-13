<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
    <meta name="viewport" content="width=device-width" />
    <TITLE>Teatar.ba</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
</HEAD>

<BODY>
    <?php include ("kontaktSkripta.php")?>
        <?php include ("brisanjeSkripta.php")?>
            <script src="funkcionalnosti.js"></script>
            <div id="wrapper">
                <div id="zaglavlje">
                    <div id="teatarlogo"><img class="logo" img src="Slike/Logo.png" alt="Logo Tearta"></div>
                    <div id="navigation">
                        <ul>
                            <li><a href="Onama.php">O nama </a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Pozorista</a>
                                <div class="dropdown-content" id="myDropdown">
                                    <a href="Pozorista.php">Nasa Scena</a>
                                    <a href="Galerija.php">Galerija</a>
                                </div>
                            </li>
                            <li><a href="Repertoar.php">Repertoari </a></li>
                            <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                            <li><a href="Kontakt.php">Kontakt </a></li>
                        </ul>
                    </div>
                </div>
                <div class="red">
                    <div class="kolona jedan">
                        <h1> Komentari </h1>
                         <?php
                           //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
                        $rezultat = $dbh->query("SELECT id, ime, komentar FROM utisak");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
                        foreach ($rezultat as $u) {
                        print "<p><b>".$u['id']."</b></p>";
                        print "<p><b>".$u['ime']. PHP_EOL."</b></p>";
                        print "<p><b>".$u['komentar']. PHP_EOL."</b></p>";
                        }
                        ?>
                        
                            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiUtisak">
                                <div id="txt">
                                    <label>Izbrisi utisak broj: </label>
                                    <input type="number" name="brUtiskaDel" id="brUtiskaDel" min="1" onblur="prazanUnos(this)">
                                    <br>
                                </div>
                                <br>
                                <button type="submit" class="myButton" name="submitUtiskaDel" id="submitUtiskaDel">
                                    <span class="add">Izbrisi</span>
                                </button>
                            </form>

                    </div>
                    <div class="kolona jedan">
                        <h1> Preplate </h1>
                        <?php
                           //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
                        $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
                        $rezultat = $dbh->query("SELECT id, ime, prezime, telefon, mail FROM preplata");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
                        foreach ($rezultat as $u) {
                        print "<p><b>".$u['id']."</b></p>";
                        print "<p><b>".$u['ime']. PHP_EOL."</b></p>";
                        print "<p><b>".$u['prezime']. PHP_EOL."</b></p>";
                        print "<p><b>".$u['telefon']. PHP_EOL."</b></p>";
                        print "<p><b>".$u['mail']. PHP_EOL."</b></p>";
                        }
                        ?>
        
                            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiPreplatu">
                                <div id="txt">
                                    <label>Izbrisi preplatu broj: </label>
                                    <input type="number" name="brPreplateDel" id="brPreplateDel" onblur="prazanUnos(this)">
                                    <br>
                                </div>
                                <br>
                                <button type="submit" class="myButton" name="submitPreplateDel" id="submitPreplateDel">
                                    <span class="add">Izbrisi</span>
                                </button>

                            </form>

                    </div>
                    <div class="kolona jedan">
                        <h1> Glasovi </h1>
                        <?php
                           //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
                        $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
                        $rezultat = $dbh->query("SELECT id, glas FROM anketa");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
                        foreach ($rezultat as $u) {
                        print "<p><b>".$u['id']."</b></p>";
                        print "<p><b>".$u['glas']. PHP_EOL."</b></p>";
                        }
                        ?>
                            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiUtisak">
                                <div id="txt">
                                    <label>Izbrisi glas broj: </label>
                                    <input type="number" name="brGlasaDel" id="brGlasaDel" onblur="prazanUnos(this)">
                                    <br>
                                </div>
                                <br>
                                <button type="submit" class="myButton" name="submitGlasaDel" id="submitGlasaDel">
                                    <span class="add">Izbrisi</span>
                                </button>

                            </form>

                    </div>

                </div>








                <div id="footer">
                    <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
                </div>

            </div>

</BODY>

</HTML>