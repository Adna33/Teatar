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
                                <a href="Pozorista.php" id="trenutna">Nasa Scena</a>
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
                <div class="tabela" style="width: 100%;">
                    <div class="tijelotabele">
                        <div class="redpozoriste">
                            <div class="celijapozoriste">
                                <h1>Narodno Pozoriste Sarajevo</h1>
                                <br>
                                <img class="thumbnail" src="Slike/narodnopozoriste.jpg">
                                <br>
                                <p>Narodno pozorište Sarajevo osnovano je 17. 11. 1919. godine. Danas predstavlja centralnu teatarsku kuću države BiH i ono je svojim umjetničkim rezultatima, radom generacija umjetnika, a posebno načinom organizacije, veoma važan element teatarskog i uopće duhovnog života u BiH. U toku svog preko 90 godina dugog djelovanja Narodno pozorište Sarajevo odigralo je ogroman broj dramskih, baletnih i opernih predstava po cijeloj Bosni i Hercegovini, ali i u inozemstvu.</p>

                            </div>
                            <div class="celijapozoriste">
                                <h1> Pozoriste Mladih Sarajevo</h1>
                                <br>
                                <img class="thumbnail" src="Slike/pozoristemladih.jpg">
                                <br>
                                <p>1950. godine u Sarajevu su osnovana dva teatra za djecu: Pionirsko pozorište i Pozorište lutaka. Godine 1977. ostvaruje se sasvim prirodna simbioza: udružuju se ova dva pozorišta i nastaje Pozorište mladih sa dvije samostalne scene, Lutkarskom i Dramskom. Od tog trenutka u Pozorištu nastaje repertoarski zaokret i stvarni uspon umjetničkih vrijednosti. Na obje scene stvaraju eminentni reditelji, vrhunski likovni i muzički umjetnici iz ex Jugoslavije i Evrope. </p>
                            </div>
                        </div>
                        <div class="redpozoriste">
                            <div class="celijapozoriste">
                                <h1>Kamerni Teatar 55</h1>
                                <br>
                                <img class="thumbnail" src="Slike/kamerniteatar.jpg">
                                <br>
                                <p>Kamerni teatar 55 osnovao je 1955. godine u Sarajevu veliki pozorišni reditelj, producent i teoretičar, Jurislav Korenić, u traganju za novim teatarskim izrazom, te iz potrebe za drugačijim teatarskim profilom od onoga koji je preovladavao u većini pozorišta tadašnje Jugoslavije. Tokom godina, ovaj teatar je stekao veliki ugled koji je prevazišao granice Bosne i Hercegovine kao teatar visokih umjetničkih standarda sa izuzetnim glumačkim ansamblom. </p>
                            </div>
                            <div class="celijapozoriste">
                                <h1>Sarajevski Ratni Teatar</h1>
                                <br>
                                <img class="thumbnail" src="Slike/sartr.jpg">
                                <br>
                                <p>Sarajevski ratni teatar SARTR utemeljen je 17. maja 1992. godine, a okupio je glumce i ine saradnike iz tri profesionalna sarajevska teatra koja su, zbog agresije na Bosnu i Hercegovinu, morala obustaviti svoj rad. U augustu 1992. SARTR je konstituiran kao vojna jedinica pri Regionalnom štabu Oružanih snaga BiH Sarajevo, a 12. januara 1993. godine Odlukom Ratnog Predsjedništva Skupštine grada Sarajeva kao javna ustanova iz oblasti kulture od posebnog interesa za odbranu grada.</p>
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