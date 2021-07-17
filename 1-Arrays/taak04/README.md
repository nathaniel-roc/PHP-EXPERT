# PHP-EXPERT-Arrays-Taak04

## Medewerkers

## Uitleg

Multidimensionale arrays kun je op verschillende manieren maken. Je kunt arrays neerzetten op keys met cijfers. Bijvoorbeeld zo:

```php
                //     0                  1
$multi_array_1 = [ [ 456,98,4,124,56,0 ], [ 'a','b','c','d' ] ];
//waarbij de eerste array met cijfers in $multi_array_1 op plek 0 staat en de tweede array met letters op plek 1 (let op de komma's)

$multi_array_1[0] // dit is de array met cijfers [456,98,4,124,56,0]
echo $multi_array_1[0][4] // het getal 56 komt op het scherm

$multi_array_1[1] // dit is de array met letters ['a','b','c','d']
echo $multi_array_1[1][3] // de letter d komt op het scherm

```

Of je maakt een multidimensionale array met strings als _keys_:

```php
$multi_array_2 =  [
                'cijfers'  => [ 5,4,3,2,1 ]
                'letters' => [ 'a','b','c','d' ]
                ];
//hier staat de array met cijfers op de plek 'cijfers' en de tweede array met letters staat op de plek 'letters'

$multi_array_2['cijfers'] // dit is de array met cijfers
echo $multi_array_2['cijfers'][4] // het getal 1 komt op het scherm

$multi_array_2['letters'] // dit is de array met letters
echo $multi_array_2['letters'][2] // de letter c komt op het scherm
```

Wil je een waarde op het scherm tonen dan moet je dus _goed_ lezen en de array _begrijpen_ om waardes te kunnen tonen:

## Leerdoelen

> 1. [ ] Ik toon waardes op het scherm uit een multidimensionale array

## Opdracht

> 1. Neem de code uit het voorbeeld over in index.php
> 2. Toon van elk product ALLE gegevens met een echo op het scherm.

## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-EXPERT/blob/master/niveau1/taak04/images/resultaat.png)

## Bronnen

> [W3 Schools - PHP Arrays](https://www.w3schools.com/php/php_arrays_associative.asp)  
> [Geek For Geeks - Associative Arrays in PHP](https://www.geeksforgeeks.org/associative-arrays-in-php/)  
> [PHP Manual - Arrays](https://www.php.net/manual/en/language.types.array.php)
