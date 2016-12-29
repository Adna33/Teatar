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
                        <li><a href="Vijesti.php">Vijesti i Kritike </a></li>
                        <li><a href="Kontakt.php">Kontakt </a></li>
                    </ul>
                </div>

            </div>
            <div class="container form-signin">


            </div>

            <div id="sadrzaj">
                <div class="red">
                    <h1>Administratorski login<br/></h1>
                    <br/>
                    <br/>
                    <form name="admin" action="login.php" method="post" role="form">
                        <div id="txt" class="kolona jedan">
                            <label>Username: </label>
                            <input type="text" name="username" class="smallTextBox">
                        </div>
                        <div id="txt" class="kolona jedan">
                            <label>Password: </label>
                            <input type="password" name="password" class="smallTextBox">
                        </div>
                        <button type="submit" class="myButton" name="login" id="logIn">
                            <span class="add">Log in</span>
                        </button>
                        <label name="greskalogin"></label>
                    </form>
                  
                    
                    <br/>
                    <br/>
                </div>
            </div>



            <div id="footer">
                <p>Projekat za predmet Web Tehnologije, Adna Karkelja</p>
            </div>

        </div>

</BODY>

</HTML>