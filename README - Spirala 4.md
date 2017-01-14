##Spirala 3

### I  - Šta je urađeno?
- MySQL bazu sa min tri povezane tabele (Predstava, Kritika i Termin), kao i tabele za Komentar, Utisak i Anketu
- Dodane forme za unos u tabele, koje nisu prije postojale
- PHP skripta koja sve podatke iz XML prebacuje u bazu podataka - nalazi se na administratorskom panelu (Administacija.xml)
- Učitavanje, upisivanje, mjenjanje i brisanje svih podataka u bazu
- Implementirana je get metoda u fajlu rest.php koja vraća podatke u JSON formatu
- Screenshootovi testiranja web servisa u folderu Postman
- Deploy na Openshift, link početne stranice je : http://teatar-teatar.44fs.preview.openshiftapps.com/ProjektniZadatak/Onama.php
- Pristup bazi  http://teatar-teatar.44fs.preview.openshiftapps.com/ProjektniZadatak/phpmyadmin username:admin, password:1234


### II  - Šta nije urađeno?
### III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)
### IV  - Bug-ovi koje ste primijetili ali ne znate rješenje
### V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

- Folder Slike- svi resursi slika koje sam koristila na stranici
- Folder Projektni Zadatak - Folder u kojem se nalaze sve stranice i resursi
- Folder Postman- screenshotovi implementacije servisa
- terminSkripta.php - upisivanje termina u bazu
- kritikaSkripta.php- upisivanje kritike u bazu
- xmlBazaSkripta- upisivanje iz xmla u bazu podataka
- spirala4.sql- dump baze
- Admin.php - Login stranica za administratora
- adminData.xml- XML fajl u kojem se nalaze login podaci za administratora
- administracija.php- stranica na kojoj admin brise, mjenja i dodaje podatke, moze zavrsiti sesiju ili skinuti csv file
- anketaSkripta.php-upisivanje rezultata ankete sa stranice Onama.php 
- brisanje.php- stranica na kojoj administrator može brisati do sada unesene podatke
- brisanjeSkripta.php - php skripta koja briše element pod upisanim rednim brojem
- funkcionalnosti - externi JavaScript file u kojem se nalaze sve funkcije (validacije i ucitavanja stranica)
- Galerija.php- Stranica na kojoj se nalaze slike pozorišta
- getAnketa.php- skripta koja upisuje rezultate ankete iz baze u csv file
- izmjena.php-- stranica na kojoj administrator može izmjenitii do sada unesene podatke
- izmjenaSkripta.php -php skripta koja mjenja element pod upisanim rednim brojem
- Izvještaj- php skripta za kreiranje pdf file-a sa pregledom komentara
- komentar.xml-  xml file u kojem se nalaze komentari korisnika
- kontakt - html stranica sa kontakt podacima i formama za preplatu na vijesti i ostavljanje utisaka
- kontaktSkripta.php - upisivanje utisaka u bazu
- login.php - skripta koja provjerava admin ime i pass započinje sesiju
- logout.php -skripta za završavanje admin sesije
- predlozi.php - php file za izbacivanje do 10 prijedloga za pretragu prilikom kucanja
- predstavaSkripta.php -skripta za upisivanje preplata 
- predstave.xml - lista predstava koje se koriste u Pretraga.php
- preplataSkripta.php - skripta za upisivanje preplata
- preplate.xml- xml file u koji su upisane prijavljene preplate preko forme na stranici Kontakt
- Pretraga - php stranica za pretragu predstava
- pretragaFunkcionalnosti.js- JavaScript file koji definiše funkcionalnosti pretrage predstava
- rezultatiAnkete.xml- XML file sa glasovima iz ankete na stranici Onama.php
- search.css - CSS file koji definiše izgled stranice sa pretragom
- Unos.php- admin unosi nove podatke
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
  
