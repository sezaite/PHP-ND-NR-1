<h1>Labas</h1>

<?php

//PIRMA UZDUOTIS

$vardas = 'Martyna';
$pavarde = 'Sezaite';
$gimimoMetai = 2015;

$dabarMetai = 2021;

//get metai??

echo "as esu  $vardas $pavarde, man siemet sukaks " . ($dabarMetai - $gimimoMetai) . ' metai';
echo '<br>';
echo 'as esu ' .  $vardas . ' ' . $pavarde . ', man siemet sukaks ' . ($dabarMetai - $gimimoMetai) . ' metai';
echo '<br>';
echo '<br>';

//ANTRA UZDUOTIS


$pirmas = rand(0, 4);
$antras = rand(0, 4);

echo $pirmas > 0 && $antras > 0 ? ($pirmas > $antras ? number_format($pirmas / $antras, 2) : number_format($antras / $pirmas, 2)) : 'is nulio nedalinsiu';

echo '<br>';
echo '<br>';

//TRECIA UZDUOTIS

$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);

    if ($pirmas === $antras || $pirmas === $trecias || $trecias === $antras) {
        echo 'nera vidurinio, nes kazkur susigeneravo vienodi skaiciai';
    } else {
        if ($pirmas > $antras){
            if ($pirmas < $trecias) {
                echo $pirmas;
        } elseif ($antras > $trecias){
                echo $antras;
        } else { 
            echo $trecias;
        }
            } else {
                if ($antras < $trecias){
                    echo $antras;
                } elseif ($pirmas > $trecias){
                    echo $pirmas;
                } else {
                     echo $trecias;
                }
            }
    } 
    echo '<br>';
    echo '<br>';

//KETVIRTA UZDUOTIS

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';
echo (($a + $b) > $c) && (($a + $c) > $b) && (($c + $b) > $a) ? 'galima' : 'negalima';

echo '<br>';
echo '<br>';

//PENKTA UZDUOTIS

$zero = 0;
$vienas = 0;
$du = 0;

$a = rand(0, 2);
if($a === 0){
    $zero++;
} else if ($a === 1){
    $vienas++;
} else {
    $du++;
}

$b = rand(0, 2);
if($b === 0){
    $zero++;
} else if ($b === 1){
    $vienas++;
} else {
    $du++;
}

$c = rand(0, 2);
if($c === 0){
    $zero++;
} else if ($c === 1){
    $vienas++;
} else {
    $du++;
}


$d = rand(0, 2);
if($d === 0){
    $zero++;
} else if ($d === 1){
    $vienas++;
} else {
    $du++;
}

echo $a.$b.$c.$d;
echo '<br>';
echo "turim nuliu: $zero, vienetu: $vienas, dvejetu: $du.";
echo '<br>';
echo '<br>';

//SESTA UZDUOTIS

$randomezas = rand(1, 6);
echo "<h$randomezas>$randomezas</h$randomezas>";
echo '<br>';
echo '<br>';

//SEPTINTA UZDUOTIS

$skaicius1 = rand(-10, 10);
if($skaicius1 < 0) {
echo "<h3 style='color: aqua'>$skaicius1</h3>";
} else if ($skaicius1 === 0){
    echo "<h3 style='color: coral'>$skaicius1</h3>";
} else {
    echo "<h3 style='color: teal'>$skaicius1</h3>";
}

$skaicius2 = rand(-10, 10);
if($skaicius2 < 0) {
echo "<h3 style='color: aqua'>$skaicius2</h3>";
} else if ($skaicius2 === 0) {
    echo "<h3 style='color: coral'>$skaicius2</h3>";
} else {
    echo "<h3 style='color: teal'>$skaicius2</h3>";
}

$skaicius3 = rand(-10, 10);
if($skaicius3 < 0) {
echo "<h3 style='color: aqua'>$skaicius3</h3>";
} else if ($skaicius3 === 0){
    echo "<h3 style='color: coral'>$skaicius3</h3>";
} else {
    echo "<h3 style='color: teal'>$skaicius3</h3>";
}

//ASTUNTA UZDUOTIS
// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

?>

