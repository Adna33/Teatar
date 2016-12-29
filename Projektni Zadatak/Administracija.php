<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
    <meta name="viewport" content="width=device-width" />
    <TITLE>Teatar.ba</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
</HEAD>

<BODY>
  <?php session_start(); ?>
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
                        <li><a href="Repertoar.php">Repertoari </a></li>
                        <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                        <li><a href="Kontakt.php">Kontakt </a></li>
                    </ul>
                </div>

            </div>
            <div class="container form-signin">


            </div>

            <div id="sadrzaj">
                <div class="red">
                    <h1>Unos Podataka u XML <br/></h1>
                    <br/>
                    <br/>
                    <center>
                        
                            <form action="Unos.php">
                                <button type="submit" class="myButton" name="unosAdmin" id="unosAdmin">
                                    <span class="add">Unos u XML-ove</span>
                                </button>
                            </form>
                            <form action="UnosPredstave.php">
                                <button type="submit" class="myButton" name="unosPredstave" id="unosPredstave">
                                    <span class="add">Unos predstava za pretragu</span>
                                </button>
                            </form>
                        
                    </center>
                </div>

                <div class="red">
                    <h1>Izmjena Podataka iz XML-a<br/></h1>
                    <br/>
                    <br/>
                    <center>
                        <form action="izmjena.php">
                            <button class="myButton" name="izmjenaAdmin" id="izmjenaAdmin">
                                <span class="add">Izmjena stavki</span>
                            </button>
                        </form>
                    </center>
                </div>
                <div class="red">
                    <h1>Brisanje Podataka iz XML-a<br/></h1>
                    <br/>
                    <br/>
                    <center>

                        <form action="brisanje.php">
                            <button class="myButton" name="brisanjeAdmin" id="brisanjeAdmin">
                                <span class="add">Izbrisi stavke</span>
                            </button>
                        </form>
                    </center>

                    <br/>
                    <br/>
                </div>
                <div id="close">
                    <a href="logout.php" tite="Logout" id="administrator"> Završi sesiju.</a>
                    <br>
                    <a href="getAnketa.php" tite="CSV" id="administrator"> Skini CSV</a>
                </div>
                

                <div id="footer">
                    <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
                </div>

            </div>

</BODY>

</HTML>