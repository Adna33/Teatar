##Spirala 3

### I  - Šta je urađeno?
- Serijalizacija svih podataka u XML. Serijalizovani su podaci iz formi anketa (ONama.php), utisci i preplata (Kontakt.php stranica).
- Validirana su polja u koja se unose podaci i preko PHP-a.
- Administrator se može log in-ovati klikom na crvenu tool ikonu na stranici Onama.php, koja ga vodi na login stranicu, ili direktno u Administracijski panel, ukoliko je još uvijek ulogovan
   Adminovi podaci se provjeravaju tako što se upoređuju sa podacima povučenim iz xml fajla adminData.xml
- Administratoru je omogućeno dodavanje, brisanje i izmjena podataka koje se unose u xml
- Admin može unositi i vijesti koje će se koristiti za pretragu u trećem zadatku
-  Na stranici Administracija.php admin može skinuti CSV fajl sa rezultatima glasova sa ankete na početnoj stranici. Također se može i odlogovati (završiti sesiju).
- Na stranici Kontakt.php ima button Prikaži Izvještaj koji generiše pdf fajl koji prikazuje listu komentara/utisaka korisnika (korištena je fpdf biblioteka)
- Na stranici Repertoar.php na vrhu se nalazi link koji vodi na stranicu sa pretragom ovosedmičnog repertoara u sarajevskim pozorištima (Pretraga.php)
- Dok korisnik upisuje vrijednost pretrage, ispod mu se prikazuje do 10 najsličnijih stavki, po poljima naziva predstave i dana prikazivanja. Pri tome se stranica ne reloaduje
- Kada korisnik pritisne na dugme 'Pretraži' prikazuju mu se svi rezultati koji zadovoljavaju uslov
- Urađen deployment na open shift 
 - Početna stranica: http://teatar-wt-teatar.44fs.preview.openshiftapps.com/ProjektniZadatak/Onama.php
  
### II  - Šta nije urađeno?
### III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)
### IV  - Bug-ovi koje ste primijetili ali ne znate rješenje
### V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

- Folder Slike- svi resursi slika koje sam koristila na stranici
- Folder Projektni Zadatak - Folder u kojem se nalaze sve stranice i resursi
- Admin.php - Login stranica za administratora
- adminData.xml- XML fajl u kojem se nalaze login podaci za administratora
- administracija.php- stranica na kojoj admin brise, mjenja i dodaje podatke, moze zavrsiti sesiju ili skinuti csv file
- anketaSkripta.php-upisivanje rezultata ankete sa stranice Onama.php u XML file
- brisanje.php- stranica na kojoj administrator može brisati do sada unesene podatke
- brisanjeSkripta.php - php skripta koja briše element pod upisanim rednim brojem iz XML fajla
- funkcionalnosti - externi JavaScript file u kojem se nalaze sve funkcije (validacije i ucitavanja stranica)
- Galerija.php- Stranica na kojoj se nalaze slike pozorišta
- getAnketa.php- skripta koja upisuje rezultate ankete iz xml u csv file
- izmjena.php-- stranica na kojoj administrator može izmjenitii do sada unesene podatke
- izmjenaSkripta.php -php skripta koja mjenja element pod upisanim rednim brojem iz XML fajla
- Izvještaj- php skripta za kreiranje pdf file-a sa pregledom komentara
- komentar.xml-  xml file u kojem se nalaze komentari korisnika
- kontakt - html stranica sa kontakt podacima i formama za preplatu na vijesti i ostavljanje utisaka
- kontaktSkripta.php - upisivanje utisaka u XML file
- login.php - skripta koja provjerava admin ime i pass iz XML file-a i započinje sesiju
- logout.php -skripta za završavanje admin sesije
- predlozi.php - php file za izbacivanje do 10 prijedloga za pretragu prilikom kucanja
- predstavaSkripta.php -skripta za upisivanje preplata u XML file predstave.xml
- predstave.xml - lista predstava koje se koriste u Pretraga.php
- preplataSkripta.php - skripta za upisivanje preplata u XML file preplate.xml
- preplate.xml- xml file u koji su upisane prijavljene preplate preko forme na stranici Kontakt
- Pretraga - php stranica za pretragu predstava
- pretragaFunkcionalnosti.js- JavaScript file koji definiše funkcionalnosti pretrage predstava
- rezultatiAnkete.xml- XML file sa glasovima iz ankete na stranici Onama.php
- search.css - CSS file koji definiše izgled stranice sa pretragom
- Unos.php- admin unosi nove podatke u XML file-ove
- UnosPredstave.php- admin unosti ovosedmicne pretrage koje se koriste za search tab
- o nama - ujedino i početna html stranica sa opisom stranice i njenog sadržaja
- pozorista -  html grid stranica sa podacima o svim sarajevskim pozorištima
- repertoar - html stranica koja prikazuje najnovije predstave koje igraju u sarajevu
- vijesti - html stranica sa novostima i kritikama sa sarajevske pozorišne scene
- stil - eksterni css file  
- Folder Skice
 - Skice za webpage su fajlovi: kontakt, onama, pozorista, repertoari i vijesti
 - Skice za mobilne uređaje za svaku od podstranica:  kontaktMobile, onamaMobile, pozoristaMobile, repertoariMobile i vijestiMobile
- README- Opisni fajl za spiralu 1
- README - Spirala 2- Opisni fajl za spiralu 2
- README- Spirala 3- Opisni fajl za spiralu 3
  
