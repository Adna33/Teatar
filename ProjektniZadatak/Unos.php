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
    <?php include ("anketaSkripta.php")?>

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
                    <li><a href="Kontakt.php">Kontakt </a></li>
                </ul>
            </div>
            
        </div>
        
        <div class="red">

            <h1> Unos Preplate </h1>
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

            <h1> <br> Unos utisaka </h1>
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
            
            <h1>Unos glasova</h1>
            <p>Koliko često posjećujete pozorište?</p>
                        <div id="formaAnketa">
                            <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="anketaForma" onsubmit="return validacijaAnkete()">
                                <input type="radio" name="anketa" value="Cesto posjecujem pozoriste"> Više puta mjesečno
                                <br>
                                <input type="radio" name="anketa" value="Ponekad posjecujem pozoriste"> Nekoliko puta godišnje
                                <br>
                                <input type="radio" name="anketa" value="Nikada ne posjecujem pozoriste"> Vrlo rijetko ili nikada
                                <br>
                                <br>
                                <button type="submit" class="myButton" name="anketaSubmit" name="anketaSubmit">
                                    <span class="add">Potvrdi</span>
                                </button>
                                <label id="greskaAnketa"></label>

                            </form>
                        </div>


        </div>

    


            
        



        <div id="footer">
            <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
        </div>

    </div>

</BODY>

</HTML>