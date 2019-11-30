ZAVRŠNI RAD - QUIZ

Web aplikacija - Kviz znanja.

Ova jednostavna igra napravljena je da testira vaše znanje.

Pravila igre

Quiz se sastoji od testova iz više oblasti. Instrukcije:

Qiuz započinjete biranjem jedne od ponudjenih oblasti iz kulture,nauke, sporta.Svaka oblast ima 6 pitanja sa ponudjena četiri odgovora,
od čega je jedan tačan.Od momenta započetog testa počinje da teče vreme predviđeno za rešavanje tog testa.Kada se odgovori na sva pitanja i završi test,dobijaju se rzultati testa.Tačni, netačni odgovori, kao i tačna rešenja za testove.Korisnik ima uvid u prethodno radjene testove sa ostvarenim rezultatima.

Kako sam napravila Online-Quiz:

U realizaciji rada koristila sam tehnologije:  HTML ,CSS & Bootstrap , JavaScript  , PHP , Database (MySQL ) , Githab , Implementacija CRUD operacija .

 Interfejs za dve korisničke role (uloge):

 - Korisnik - Igrač (ime, prezime, Email, korisničko ime, lozinka, potvrda lozinke) 
 - Administrator -  korisničko ime, lozinka

Funkcionalnosti:  namenjene samo Administratoru, samo  Korisniku.

Korisnik :
- može da se registruje,
- loguje
- bira temu quiz-a
- započinje test i počinje da teče vreme ,koje je odredio administrator za svaku temu.Vreme staje i kada korisnik završi test
- korisnik može da vidi vreme koje odbrojava
- kada se završi test korisnik vidi rezultat broj tačnih i netačnih odgovora
- ima uvid u tačna rešenja
- može videti rezultate prethodnih testiranja
- može da se izloguje

Administrator:
- može da se loguje
- dodaje nove testove
- podešava vreme trajanja testa
- može da dodaje pitanja sa ponuđenim odgovorima
- da vidi sve rezultate korisnika
- briše, menja, dodaje: teme,pitanja,odgovore
- može da se izloguje

Tabele baze podataka:

- Registracija ->  Korisnik - Igrač (ime, prezime, Email, korisničko ime, lozinka, potvrda lozinke)
- Admin-login ( korisničko ime, lozinka)
- Kategorije kviza (kategorija, vreme trajanja)
- Pitanja (pitanje, četiri ponuđena odgovora, tačan odgovor)
- Rezultati (ukupno pitanja, broj tačnih odgovora, broj netačnih odgovora, vreme)

Web stranice:  login, logout, kategorije, quiz pitanja, rezultati.

U formama za unos uradila sam validacije na klijentskoj ili serverskoj strani .
Aplikacija  radi u dva pregledača (Chrome & Firefox) 
Popunjena baza podataka koja omogućava pregled svih funkcionalnosti aplikacije.
Uniformni izgled ekrana aplikacije.
Na svim ekranima je omogućena opcija za povratak na početni ekran sa korisničkim opcijama 
Na svim ekranima je predviđen link koji vodi na početni ekran za prijavljivanje (opcija: Logout) 
 

Branka Sekulović 
Grupa 3 PHP

