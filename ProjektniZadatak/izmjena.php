<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
    <meta name="viewport" content="width=device-width" />
    <TITLE>Teatar.ba</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
</HEAD>
<style>table,
    th,
    td {
        border: 1px solid white;
    }
   input {
    width: 100%;
    padding: 10px;
    margin: 3px;
       background-color: lightgrey;
       
}table .last, td:last-child { 
    padding: 5px 10px 5px 10px; 
}
table {border-collapse:collapse; table-layout:fixed; }
table td {border:solid 1px #fab; width:50px; word-wrap:break-word;}
</style>

<BODY>
<?php include ("izmjenaSkripta.php")?>

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
            <div class="kolona dva">
            <h1> Komentari </h1>
                <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiUtisak">
            <?php
                $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
                        $rezultat = $dbh->query("SELECT id, ime, komentar FROM utisak");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
            
                print "<table>";
                print "<tr>
                <th style='width: 10%'><p>Br.</p></th> 
                <th style='width: 40%'><p>Korisnik</p></th>
                <th style='width: 50%'><p>Komentar</p></th> 
                </tr>";
    $i=0;
            foreach ($rezultat as $u) {
                $i=$i+1;
                print "<td style='width: 10%'> <input type='text' name='idUtiska".$i."'  value='".$u['id']."'></td>";       
                print "<td style='width: 40%'> <input type='text' name='imeUtiska".$i."'  value='".$u['ime'].  "'></td>";       
                 print "<td style='width: 50%'> <input type='text' name='komentarUtiska".$i."' value='".$u['komentar']. "'></td>";
              print "</tr>";
                        }
        print "</table><br>";
        ?>
                
                    <div id="txt">
                        <label>Izmjeni utisak broj: </label>
                        <input type="number" name="brUtiskaUp" id="brUtiskaUp" onblur="prazanUnos(this)">
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="myButton" name="submitUtiskaUp" id="submitUtiskaUp">
                        <span class="add">Izmjeni</span>
                    </button>
                </form>
        </div>
        <div class="kolona dva">
            <h1> Glasovi </h1>
            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiUtisak">
            <?php
                $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
                $rezultat = $dbh->query("SELECT id, glas FROM anketa");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
                print "<table>";
                print "<tr>
                <th style='width: 15%'><p>Br.</p></th> 
                <th><p>Glas</p></th>
                </tr>";
        $i=0;
        foreach ($rezultat as $u) {
            $i=$i+1;
            print "<td style='width: 15%'><p><b>  $i </b></p></td>";             
            
            print "<td> <input type='text' name='nazivGlasa".$i."'  value='". $u['glas'] . "'></td>";
           
            print "</tr>";
        } print "</table><br>"
        ?>
                
                    <div id="txt">
                        <label>Izmjeni glas broj: </label>
                        <input type="number" name="brGlasaUp" id="brGlasaUp" onblur="prazanUnos(this)">
                        <br>
                    </div>
                    <br>
                    <button type="submit" class="myButton" name="submitGlasaUp" id="submitGlasaDel">
                        <span class="add">Izmjeni</span>
                    </button>

                </form>

        </div>

    </div>
    <div class="red">
        <h1> Preplate </h1>
        <?php
            $dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
            $rezultat = $dbh->query("SELECT id, ime, prezime, telefon, mail FROM preplata");
                        if (!$rezultat) {
                            $greska = $dbh->errorInfo();
                            print "SQL greška: " . $greska[2];
                            exit();
                        }
            print "<table>";
                print "<tr>
                <th style='width: 10%'><p>Br.</p></th> 
                <th style='width: 20%'><p>Ime</p></th>
                <th style='width: 20%'><p>Prezime</p></th> 
                <th style='width: 20%'><p>Telefon</p></th>
                <th style='width: 30%'><p>E-mail</p></th>
                </tr>";
                
                $i=0;
            foreach ($rezultat as $u) {
            $i=$i+1;
                print "<tr>";
              print "<td style='width: 10%'><p><b>  $i </b></p></td>";  
                print "<td style='width: 20%'> <input type='text' name='ime".$i."'  value='". $u['ime'] . "'></td>";
                print "<td style='width: 20%'> <input type='text' name='prezime".$i."'  value='". $u['prezime'] . "'></td>";
                print "<td style='width: 20%'> <input type='text' name='tel".$i."'  value='". $u['telefon'] . "'></td>";
                print "<td style='width: 30%'> <input type='text' name='mail".$i."'  value='". $u['mail'] . "'></td>";           
                print "</tr>";
            }
                print "</table><br>"
        ?>
            <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="izbrisiPreplatu">
                <div id="txt">
                    <label>Izmjeni preplatu broj: </label>
                    <input type="number" name="brPreplateUp" id="brPreplateUp" onblur="prazanUnos(this)">
                    <br>
                </div>
                <br>
                <button type="submit" class="myButton" name="submitPreplateUp" id="submitPreplateUp">
                    <span class="add">Izmjeni</span>
                </button>

            </form>

    </div>










    <div id="footer">
        <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
    </div>

    </div>

</BODY>

</HTML>