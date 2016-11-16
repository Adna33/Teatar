# Teatar

##Adna Karkelja, 17162

### Projektni zadatak iz predmeta Web Tehnologije

Web stranica za sarajevski teatar, prikaz aktuelnih projekcija i najava predstava .

##Spirala 2


### I  - Šta je urađeno?

- Validacije sve tri forme. Nevalidan unos onemogućava submit i ispisuje odgovarajuću poruku pored submit buttona. 
U okviru validacije provjeravalo se da li se telefon, ime i prezime te mail podudara sa regexom, da li je neko polje ostalo neispunjeno,
te da li je checkbox označen i da li je u anketi odabrana neka od opcija u obliku označavanja radiobutton-a.
- Dropdown menu prilagođen i mobilnim uređajima. Spušta se klikom na link "Pozorišta" u meniju.
- Galerija, kojoj se pristupa klikom na link "pozorišta" i odabirom stranice "galerija" iz dropdown menija. 
Slika u punoj veličini se otvara na klik i zatvara na escape tipku.
- Iskorišten je Ajax na stranici index.html, kako se stranice ne bi osvježavale prilikom klika na linkove iz menija. 
Na toj stranici je izdvojeno zaglavlje koje uključuje meni, kao i footer stranice.
- Sve skripte su izdvojene u externi file funkcionalnosti.js u kojem se nalaze funkcije za validaciju i ucitavanje stranica za Ajaxom

### II  - Šta nije urađeno?

### III - Bug-ovi koje ste primijetili ali niste stigli ispraviti, a znate rješenje (opis rješenja)
### IV  - Bug-ovi koje ste primijetili ali ne znate rješenje
### V  - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

- Folder Projektni Zadatak - Folder u kojem se nalaze sve stranice i resursi
  - Folder Slike- svi resursi slika koje sam koristila na stranici
  - kontakt - html stranica sa kontakt podacima i formama za preplatu na vijesti i ostavljanje utisaka
  - o nama - ujedino i početna html stranica sa opisom stranice i njenog sadržaja
  - pozorista -  html grid stranica sa podacima o svim sarajevskim pozorištima
  - repertoar - html stranica koja prikazuje najnovije predstave koje igraju u sarajevu
  - vijesti - html stranica sa novostima i kritikama sa sarajevske pozorišne scene
  - stil - eksterni css file  
  - funkcionalnosti - externi JavaScript file u kojem se nalaze sve funkcije (validacije i ucitavanja stranica)
- Folder Skice
  - Skice za webpage su fajlovi: kontakt, onama, pozorista, repertoari i vijesti
  - Skice za mobilne uređaje za svaku od podstranica:  kontaktMobile, onamaMobile, pozoristaMobile, repertoariMobile i vijestiMobile
- README- Opisni fajl za spiralu 1
- README - Spirala 2- Opisni fajl za spiralu 2
  

