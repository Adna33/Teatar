<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>

<HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8"></META>
    <meta name="viewport" content="width=device-width" />
    <TITLE>Teatar.ba</TITLE>
    <link rel="stylesheet" type="text/css" href="stil.css">
</HEAD>

<BODY>
	<?php include ("predstavaSkripta.php")?>
    <?php include ("kritikaSkripta.php")?>
    <?php include ("terminSkripta.php")?>
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
            <h1> Unos prestava </h1>
            <div id="FormaPredstave">
                <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="predstavaforma" >
                    <div id="txt">
                        <label>Naziv Predstave: </label>
                        <br>
                        <input type="text" name="imePr" id="imePr" onblur="prazanUnos(this)">
                        <br>
                        <label>Dan: </label>
                        <br>
                        <input type="text" name="danPr" id="danPr" onblur="prazanUnos(this)">
                        <br>
                        <label>Opis: </label>
                        <br>
                        <input type="text" name="opisPr" id="opisPr" onblur="prazanUnos(this)">
                        <br>                       
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="myButton" name="submitPredstava" id="submitPredstava">

                        <span class="add">Unesi</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="red">
            <h1> Unos termina prikazivanja predstava</h1>
            <div id="FormaPredstave">
                <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="terminforma" >
                    <div id="txt">
                        <label>Termin prikazivanja </label>
                        <br>
                        <input type="text" name="termin" id="termin" onblur="prazanUnos(this)"  placeholder="YYYY-MM-DD HH:MM">
                        <br>
                         <label>Predstava: </label>
                        <br>
                        <input type="text" name="terminPredstava" id="terminPredstava" onblur="prazanUnos(this)">
                        <br>                       
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="myButton" name="submitTermin" id="submitTermin">

                        <span class="add">Unesi</span>
                    </button>
                </form>
            </div>
        </div>
        <div class="red">
            <h1> Unos kritika predstava </h1>
            <div id="FormaPredstave">
                <form method="POST" enctype="multipart/form-data"  accept-charset="utf-8" name="kritikaforma" >
                    <div id="txt">
                        <label>Predstava</label>
                        <br>
                        <input type="text" name="kritikaPredstava" id="kritikaPredstava" onblur="prazanUnos(this)">
                        <br>
                        <label>Opis: </label>
                        <br>
                        <input type="text" name="opisKritika" id="opisKritika" onblur="prazanUnos(this)">
                        <br>
                                               
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="myButton" name="submitKritika" id="submitKritika">

                        <span class="add">Unesi</span>
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