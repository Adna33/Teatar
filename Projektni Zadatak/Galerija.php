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
        <script src="funkcionalnosti.js"></script>
        <div id="wrapper">
            <div id="zaglavlje">
                <div id="teatarlogo"><img class="logo" img src="Slike/Logo.png" alt="Logo Tearta"></div>
                <div id="navigation">
                    <ul>
                        <li><a href="Onama.php">O nama </a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()" id="trenutna">Pozorista</a>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="Pozorista.php">Nasa Scena</a>
                                <a href="Galerija.php" id="trenutna">Galerija</a>
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
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb1.jpg" style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija1.jpg');" />
                    </div>
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb2.jpg" style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija2.jpg');" />
                    </div>
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb5.jpg." style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija5.jpg');" />
                    </div>
                </div>
                <div class="red">
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb3.jpg" style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija3.jpg');" />
                    </div>
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb4.jpg" style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija4.jpg');" />
                    </div>
                    <div class="kolona jedan">
                        <img class="thumb" src="Slike/thumb6.jpg" style="cursor:pointer" onclick="showImage(this.src, 'Slike/galerija6.jpg');" />
                    </div>
                    <div id="largeImgPanel" onclick="this.style.display='none'">
                        <img id="largeImg" style="height:100%; margin:0; padding:0;" />
                    </div>
                </div>


            </div>



            <div id="footer">
                <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
            </div>

        </div>

</BODY>

</HTML>