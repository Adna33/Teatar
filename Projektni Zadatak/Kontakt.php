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
    <?php include ("preplataSkripta.php")?>
    <script src="funkcionalnosti.js"></script>
    <div id="wrapper">
        <div id="zaglavlje">
            <div id="teatarlogo"><img class="logo" img src="Slike/Logo.png" alt="Logo Tearta"></div>
            <div id="navigation">
                <ul>
                    <li><a  href="Onama.php"  >O nama </a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Pozorista</a>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="Pozorista.php">Nasa Scena</a>
                            <a href="Galerija.php">Galerija</a>
                        </div>
                    </li>
                    <li><a href="Repertoar.php">Repertoari </a></li>
                    <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                    <li><a href="Kontakt.php" id="trenutna">Kontakt </a></li>
                </ul>
            </div>
            
        </div>
        <div class = "container form-signin">
         
         
      </div>
        
        <div id="sadrzaj">
            <div class="red">
    <div class="kolona jedan">
        <h1>Kontaktirajte nas na: </h1>
        <img class="photo" img src="Slike/kontakt.jpg">
        <p>Odgovorna osoba </p>
        <p>061/555-555</p>
        <p>email@gmail.com</p>
        <br>
        <h1> Društvene mreže: </h1>
        <div id="drustvenemreze">
            <img class="social" img src="Slike/instagram.png" alt="instagram page">
            <img class="social" img src="Slike/facebook.png" alt="facebook page">
            <img class="social" img src="Slike/twitter.png" alt="twitter page">
        </div>
        <br>
        <br>
        <form action="Izvjestaj.php" name="izvjestaj">
            <button type="submit" class="myButton" name="izvjestaj" id="submitIzvjestaj">
                <span class="report">Prikaži Izvještaj</span>
            </button>
        </form>

    </div>
    <div class="kolona tri">
        <div class="red">

            <h1> Pridružite se klubu ljubitelja pozorišta! </h1>
            <p>Preplatite se na sedmicne newsletter primjerke koji će stizati na vašu adresu!</p>
            <div id="FormaPreplate">
                <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="preplataforma" onsubmit="return validacijaKontakta()">
                    <div id="txt">
                        <label>Ime: </label>
                        <br>
                        <input type="text" name="ime" id="ime" onblur="prazanUnos(this)">
                        <br>
                        <label>Prezime: </label>
                        <br>
                        <input type="text" name="prezime" id="prezime" onblur="prazanUnos(this)">
                        <br>
                        <label>Broj telefona: </label>
                        <br>
                        <input type="tel" name="telefon" id="tel" onblur="prazanUnos(this)" placeholder="xxx-xxx-xxx">
                        <br>
                        <label>E-mail: </label>
                        <br>
                        <input type="email" name="mail" id="mail" onblur="prazanUnos(this)">
                        <br>
                        <br>
                    </div>
                    <input type="checkbox" name="preplatacheck" value="Preplata" style="float:left" />
                    <label>Želim primati mjesečne novosti na moju mail adresu!</label>
                    <br>
                    <br>
                    <br>
                    <button type="submit" class="myButton" name="submitPreplata" id="submitPreplata">

                        <span class="add">Posalji</span>
                    </button>
                    <label id="greskaPreplata"></label>

                </form>

            </div>

            <h1> Knjiga utisaka </h1>
            <p>Ovdje možete ostaviti sve pohvale, kritike i prijedloge!</p>
            <div id="FormaUtisaka">
                <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="utisci" onsubmit="return validacijaUtiska()">
                    <div id="txt">
                        <label>Ime i prezime (opcionalno): </label>
                        <br>
                        <input type="text" name="firstname">
                        <br>
                        <label>Poruka: </label>
                        <br>
                        <textarea rows="5" cols="35" id="kom" name="komentar"></textarea>
                        <br>
                        <br>
                    </div>
                    <button type="submit" class="myButton" name="submitUtisak" id="submitUtisak">
                        <span class="add">Posalji</span>
                    </button>
                    <label id="greskaUtisak"></label>
                  

                </form>

            </div>


        </div>

    </div>
</div>

            
        </div>



        <div id="footer">
            <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
        </div>

    </div>

</BODY>

</HTML>