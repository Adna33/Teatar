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
        <?php include ("anketaSkripta.php")?>
            <script src="funkcionalnosti.js"></script>
            <div id="mainwrapper">
                <div id="zaglavlje">
                    <div id="teatarlogo"><img class="logo" img src="Slike/Logo.png" alt="Logo Tearta"></div>
                    <div id="navigation">
                        <ul>

                            <li><a id="trenutna" href="Onama.php">O nama </a></li>
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

                <div id="sadrzaj">

                    <div class="red dva">
                        <div id="onama">

                            <h1>Dobrodošli na Teatar.ba<br /></h1>

                            <p> Stranica koja podržava sarajevsku pozorišnu scenu. Ovdje možete pronaći najnovije informacije, kritike i predstave pozorišta u vašoj blizini, na jednom mjestu! Pored redovnog repertoara, pružamo i priliku da dođete u dodir sanovim sadržajima kao što su promocije, izložbe, koncerti, javna čitanja dramskih tekstova, upoznavanje sa pozorišnom periodikom, večeri posvećene pozorišnim umetnicima, ankete popularnosti predstava, glumaca, reditelja... Cilj je da stvoriti bolju i prijatniju atmosferu u našem gradu, ljudima u Sarajevu približiti pozorište, dramsku umetnost uopšte, na jedan drugačiji, zanimljiviji način.
                            </p>

                            <?php
    if (isset($_SESSION['username'])){
        echo "<a href='Administracija.php'><p><img class='adminSetting' img src='Slike/settings.png' alt='settings icon'> &nbsp;<u> ADMINISTRACIJSKI PANEL</u> </p> </a>";
            
} else {
     echo "<a href='Admin.php'><p><img class='adminSetting' img src='Slike/settings.png' alt='settings icon'> &nbsp;<u> ADMINISTRACIJSKI PANEL</u> </p> </a>";
}
?>
                                

                        </div>



                    </div>
                    <div id="onamaBottom">
                        <div class="red">
                            <div class="kolona dva">
                                <h1>O sarajevskoj pozorišnoj sceni:</h1>
                                <p>Na scene sarajevskih pozorišta redovno se postavljaju nove i zanimljive umjetničke produkcije, u čijim realizacijama učestvuju renomirani regionalni i međunarodni umjetnici, ali i studenti Akademije scenskih umjetnosti u Sarajevu. Narodno pozorište Sarajevo, najstarija je i centralna pozorišna kuća u Bosni i Hercegovini, osnovana 1919. godine, na čijem redovnom repertoaru se nalaze teatarske predstave, opere, baleti i koncerti Sarajevske filharmonije. U Pozorištu mladih, osnovanom 1977. godine, su u dječijim lutkarskim predstavama uživale generacije Sarajlija. Danas repertoar ove teatarske kuće čine brojne predstave za djecu, ali i za odrasle.Kamerni teatar 55 sa radom je počeo 1955. godine, a karakterizira ga repertoar avangardnog i eksperimentalnog teatra.Najmlađa teatarska kuća u Sarajevu, Sarajevski ratni teatar SARTR, osnovana je 1992. godine tokom opsade Sarajeva i danas okuplja mlade teatarske radnike koji svakog mjeseca produciraju nove pozorišne predstave.
                                    <br>
                                </p>
                            </div>
                            <script src="funkcionalnosti.js"></script>
                            <div class="kolona dva">
                                <h1>Anketa</h1>
                                <h1>Koliko često posjećujete pozorište?</h1>
                                <div id="formaAnketa">
                                    <form method="POST" enctype="multipart/form-data" accept-charset="utf-8" name="anketaForma" onsubmit="return validacijaAnkete()">
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

                        </div>

                    </div>


                </div>



                <div id="footer">
                    <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
                </div>

            </div>

</BODY>

</HTML>