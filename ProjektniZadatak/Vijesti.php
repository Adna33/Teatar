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
                            <a href="javascript:void(0)" class="dropbtn" id="poz" onclick="myFunction()">Pozorista</a>
                            <div class="dropdown-content" id="myDropdown">
                                <a href="Pozorista.php">Nasa Scena</a>
                                <a href="Galerija.php">Galerija</a>
                            </div>
                        </li>
                        <li><a href="Repertoar.php">Repertoari </a></li>
                        <li><a href="Vijesti.php" id="trenutna">Vijesti i Kritike </a></li>
                        <li><a href="Kontakt.php">Kontakt </a></li>
                    </ul>
                </div>

            </div>
            <div class="container form-signin">


            </div>

            <div id="sadrzaj">
                <div class="red">
                    <div class="kolona dva">
                        <div id="vijest">
                            <div class=slikapredstave><img class="slike" src="Slike/vijest1.jpg"></div>
                            <h1> Konkurs za novog direktora SARTR-a</h1>
                            <p>Otvoren je javni konkurs za izbor i imenovanje direktora javne ustanove "Sarajevski Eatni Teatar - SARTR". Konkurs ostaje otvoren 15 dana od dana posljednjeg objavljivanja. </p>
                            <a href="#" class="myButton">> Opširnije</a>
                        </div>
                        <div id="vijest">
                            <div class=slikapredstave><img class="slike" src="Slike/vijest2.jpg"> </div>
                            <h1>Najava sjajnih komedija u Narodnom pozorištu </h1>
                            <p>"Jedan čovjek dva šefa" i "Umišljeni bolesnik" fantastične su predstave koje u novembru stižu u Narodno pozorište Sarajevo.</p>
                            <a href="#" class="myButton">> Opširnije</a>

                        </div>
                    </div>
                    <div class="kolona dva">
                        <div id="kritika">
                            <div class=slikapredstave><img class="slike" src="Slike/sjajni_momci.jpg"></div>
                            <h1> Sjajni momci </h1>
                            <p>Napisala: Fatima Bilčević
                                <br>"Ono što je prije svega primijetno u predstavi jeste ta nekakva, uvjetno rečeno, lokalna komika temeljena na prostoru i vremenu savremenog Sarajeva..." </p><a href="#" class="myButton">> Opširnije</a>

                        </div>
                        <div id="kritika">
                            <div class=slikapredstave><img class="slike" src="Slike/prosjackaopera.jpg"> </div>
                            <h1> Prosjačka opera</h1>
                            <p>Napisao: Elvis Ljajić
                                <br>"Ova predstava spada u red onih koje se nazivaju društveno angažiranim, jer implicitno i eksplicitno upućuje na probleme društva u kojem živimo."</p><a href="#" class="myButton">> Opširnije</a>
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