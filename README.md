# PHP EXPERT

## Uitleg

In deze module ga je aan de slag met complexere arrays: `multidimensionale arrays` en met de combinatie van MySQL en PHP met behulp van PDO

> Een multidimensionale array bestaat uit een array met daarin een of meerdere arrays met data.
> Door gebruik te maken van PDO kunnen we queries maken naar en van een database om zo gegevens op te halen en/of te wijzigen. 

## Leerdoelen

> 1. [ ] Ik kan een multidimensionale array lezen, schrijven en loopen met diverse type loops
> 1. [ ] Ik kan database gegevens __ophalen__ (Select of SELECT WHERE) met PDO

## Bronnen

> [W3 Schools - PHP Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
>[PHP Delusions - (The only proper) PDO tutorial](https://phpdelusions.net/pdo)  


mysql wampserver/phpexpert/superheroes/		http://localhost/phpmyadmin/tbl_sql.php?db=phpexpert&table=superheroes
 Weergave van records 0 - 24 (16097 totaal, Query duurde 0,0017 seconden.)

SELECT * FROM `superheroes`


ID	Title	Alignment	Gender	Height	Weight	Identity	MaritalStatus	Eyes	Hair	PlaceOfBirth	PlaceOfDeath	Citizenship	Occupation	
1025	Emil Blonsky	Bad	Male	6'8"	980 lbs	Secret	Separated	Green	None	[[Zagreb]], [[Croatia]] (formerly [[Yugoslavia]])		Croatian	Professional Criminal; former secret agent, Fugiti...	
1026	Absalom	Neutral	Male			Secret	Single	Blue	Blond			American	Murderer, Former Thief	
1027	Carl Creel	Bad	Male	6'4"	270 lbs.	Public	Married	Blue	Bald	[[New York City]], [[New York State|New York]]		American	Professional criminal; former professional boxer	
1029	Adam Warlock	Neutral	Male	6'2"	240lbs	No Dual	Single	White	Gold	The [[Beehive]], [[Shard Island]], [[Atlantic Ocea...			Savior of Worlds	
1030	Adam Neramani	Good	Male	6'2"	210 lbs	Secret	Single	Blue	Blond	Ch'ylaritha, [[Shi'ar Empire]]		Shi'ar Empire	Wanderer	
1032	Eric Cameron	Bad	Male	5'6"	133 lbs	Secret	Single	Blue	Brown			American	Chief of [[Cameron Electronics]]	
1033	Adri Nital	Bad	Male	5'1"	95 lbs	No Dual		Red	Black	[[Jajpur]], [[India]]	[[Jajpur]], [[India]]	Indian		
1034	Adversary	Bad	Male	12'0"		Secret		Blue						
1035	Aeroika		Male						Gold				Freedom fighter, former slave	
1036	Agatha Harkness	Good	Female	5'11"	130 lbs	No Dual	Married	Blue	White		[[Whisper Hill]], [[New York State|New York]]	American	[[:Category:Magicians|Witch]], formerly the Leader...	
1037	Agent Axis	Bad	Male			Secret			White			German	Agent of the Axis Powers	
1038	Cynthia Glass	Neutral	Female			Secret	Single	Blue	Brown			American	Army Lieutenant, Nazi double agent, Spy	
1039	Christoph Nord	Good	Male	6'3"	230 lbs.	Secret	Widowed	Blue	Black	Unrevealed location in former [[East Germany]]		German	Mercenary; former government operative, freedom fi...	
1040	Aginar	Bad	Male	6'0"	255 lbs	Secret	Married	Grey	Black	City of Polaria, Siberia		Eternals	Military Leader of Earth's Eternals	
1041	Agon		Male			No Dual	Married		Black			Attilan	Geneticist (Scientist)	
1043	Alejandro Montoya	Good	Male	6'0"	190 lbs	Secret	Single	Brown	Black	[[Madrid]], [[Spain]]		Spanish	Wealthy swashbuckler	
1047	Gabriel Lan	Neutral	Male	6'2"	240 lbs	Secret		Black	Black	[[Xandar]], [[Tranta System]], [[Andromeda Galaxy]...	Interstellar space between Segar and Jan SEC syste...	Xandarian	Former starship captain, Herald of [[Galactus (Ear...	
1048	Air-Walker (Automaton)	Bad	Male	6'2"	650 lbs	No Dual		Black	None			Xandarian	Herald of Galactus	
1050	Ajak		Male	6'1"	220 lbs	Secret	Single	Grey	Black	City of [[Polaria]], northern Ural Mountains, [[Ru...		Eternals	Archaeologist	
1052	Thomas Jones	Good	Male	5'11"	140 lbs	Secret	Single	Brown	Brown	[[London]]{{r|Official Handbook of the Marvel Univ...		British	Student	
1054	Allatou	Bad	Female				Married	Red	Green				servent of Satan	
1056	Alpha (Mutant)	Neutral	Male	9'0"	240 lbs	No Dual	Single	Yellow	Bald	Underground abandoned Deviant city, [[New Mexico]]			Explorer	
1057	Marlene Alraune	Good	Female	5'8"	130 lbs.	No Dual	Divorced	Blue	Blonde			American	Museum employee: former corporate executive, socia...	
1058	Amaa		Female									Eternals		
1060	Ambur Amaquelin		Female			No Dual	Married	Blue	Red	[[Attilan]]		Attilan		
