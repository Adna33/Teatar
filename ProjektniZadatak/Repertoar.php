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
                        <li><a href="Repertoar.php" id="trenutna">Repertoari </a></li>
                        <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                        <li><a href="Kontakt.php">Kontakt </a></li>
                    </ul>
                </div>

            </div>

            <div class="red">
                 
                <div class="kolona tri">
                    <h1> Najpopularnije predstave sa repertoara <br></h1>
                    <a href="Pretraga.php"><p><img class="adminSetting" img src="Slike/search.png" alt="search icon"> &nbsp;<u>  Pretraži ovosedmični repertoar</u>  </p> </a>
                    <div id="predstava">
                        <div class=slikapredstave><img class="slike" src="Slike/uzvorniku.jpg"></div>
                        <h1> U ZVORNIKU JA SAM OSTAVIO SVOJE SRCE </h1>
                        <p>Kametni Teatar 55
                            <br> Reditelj Sulejman Kupusović u svojoj rediteljskoj eksplikaciji naglasio je kako je ovo tekst koji je ponovo postao veoma aktuelan i živ, te da je napisan upravo za scenu Kamernog teatra 55. Dodao je da će cijela predstava biti depolitizirana, zasnovana na gustim ljudskim odnosima, na poetici sidranovske rečenice i njenih značenja, bez prevelikog uplitanja i zapetljavanja u samu historiju</p>

                    </div>
                    <div id="predstava">
                        <div class=slikapredstave><img class="slike" src="Slike/tunel.jpg"> </div>
                        <h1> VREMENSKI TUNEL </h1>
                        <p>Pozorište Mladih
                            <br> Predstava "Vremenski tunel" govori o tri studenta (dva mladića i djevojka) koji ulaze u “Bosansku piramidu sunca”, tražeći dokaze koji će potvrditi ili pobiti teoriju o Bosni kao kolijevci civilizacije.</p>

                    </div>
                </div>
                <div class="kolona jedan">
                    <h1> Naš izbor </h1>
                    <div id="izborslika">
                        <img class="thumbnail" src="Slike/na%C5%A1izbor.jpg">
                    </div>
                    <br>
                    <p>Mihail Bulgakov je napisao osam verzija romana Majstor i Margarita, ali prva necenzurisana verzija objavljenja je dvadeset sedam godina nakon njegove smrti u Frankfurtu 1967., a u SSSR-u tek 1973. godine. Bio je to uspjeh za pisca čija su djela čekala na crnoj listi staljinističkog režima, i koji je u posljednjim sekundama svog života izgovorio rečenicu: „Neka znaju…Neka znaju!“ Sarajevski ratni teatar SARTR svoju umjetničku 25. sezonu započinje sa predstavom koja je inspirisana ovim djelom i koja je rađena sa željom da saznajemo i prepoznajemo tragove Bulgakovog vremena u današnjem svijetu: Svijet je poludio. Laž je zamijenila istinu.</p>
                </div>
            </div>
            <div id="footer">
                <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
            </div>

        </div>

</BODY>

</HTML>