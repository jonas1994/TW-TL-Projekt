UPDATE Ort(Ort,PLZ)
VALUES
(Ahnatal,34292),
(Kassel,34117),
(Kiel,24103),
(Düsseldorf,40210),
(Bielefeld,33602),
(Speele,34255);

UPDATE User(Name,Vorname,Geburtsjahr,Straße,Ort_ID)
VALUES
(Rehwald,Timo,1995,Am Siebenborn,1),
(Compagnone,Jonas,1994,Unterer Siedlungsweg,6),
(Müller,,1992,Müllerstraße,2),
(Meyer,Paul,1990,Meyerstraße,3)
(Meier,Sina,1989,Meierstraße,4),
(Mueller,Claudia,1993,Muellerstraße,6);

Update Kontotyp(Kontotyp)
VALUES
(Girokonto),
(Sparkonto),
(Kreditkarte);

Update Bank(Bank,BLZ)
VALUES
(Raiffeisenbank,13061078),
(Spardabank,12096597),
(Postbank,20010020);

UPDATE Karte(Kontonummer,Betrag,User_ID,Kartentyp_ID,Bank_ID)
VALUES
(0000 0000 01,1250,1,1,1),
(0000 0000 02,250,2,1,3),
(0000 0000 03,1500,2,3,3),
(0000 0000 04,1790,3,2,2),
(0000 0000 05,100,4,1,2),	
(0000 0000 06,700,5,2,3),
(0000 0000 07,1330,6,3,2);

UPDATE Kontinuierlich(kontinuierlich)
VALUES
(nein),
(monatlich),
(vierteljährlich),
(halbjährlich),
(jährlich);

Update Eintrag(Betrag,Datum,Informationen,Karte_ID,Kontinuierlich_ID)
VALUES
(-100,11.03.2005,"Strom",3,1),
(50,12.03.2005,"Rasenmähen",3,1),
(1500,04.04.2005,"Lohn",3,2);