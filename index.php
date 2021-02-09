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


//ANTRA UZDUOTIS


$pirmas = rand(0, 4);
$antras = rand(0, 4);

echo $pirmas > 0 && $antras > 0 ? ($pirmas > $antras ? number_format($pirmas / $antras, 2) : number_format($antras / $pirmas, 2)) : 'is nulio nedalinsiu';

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

//SESTA UZDUOTIS

$randomezas = rand(1, 6);
echo "<h$randomezas>$randomezas</h$randomezas>";
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



$zvakes = rand(5, 3000);
if ($zvakes < 1000){
    echo "perkamos $zvakes zvakes uz $zvakes EUR kaina";
} else if ($zvakes < 2000){
    echo "perkamos $zvakes zvakes uz " . ($zvakes * 0.97) . ' EUR kaina';
} else {
   echo "perkamos $zvakes zvakes uz " . ($zvakes * 0.96) . ' EUR kaina';
}

echo '<br>';

//DEVINTA UZDUOTIS

// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

$j = 0;
$suma = 0;

$pirmasVidurkis = ($a + $b + $c) / 3;

echo 'pirmas vidurkis: ';
echo number_format($pirmasVidurkis, 0); 
echo '<br>';
if ($a < 90 && $a > 10 ){
    $suma += $a;
    $j++;
}
if ($b < 90 && $b > 10 ){
    $suma += $b;
    $j++;
}
if ($c < 90 && $c > 10 ){
    $suma += $c;
    $j++;
}

echo 'antras vidurkis: ';
if($j > 0){
echo number_format($suma / $j, 0);
} else {
    echo 'dalyba is nulio negalima';
}
echo '<br>';

//DESIMTA UZDUOTIS:
// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.


$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);

$valandosKopija = $valandos;
$minutesKopija = $minutes;
$sekundesKopija = $sekundes;

if($valandos < 10){
    $valandosKopija = "0$valandos";
}
if($minutes < 10){
    $minutesKopija = "0$minutes";
}
if($sekundes < 10){
    $sekundesKopija = "0$sekundes";
}

echo "laikas: $valandosKopija:$minutesKopija:$sekundesKopija.";
echo '<br>';
$random = rand(0, 300);

    if ($sekundes + $random < 59) {
        $sekundes = $sekundes + $random;
    } else {
        $sekundesNaujos = ($sekundes + $random) % 60;
        $minutes += (($random + $sekundes - $sekundesNaujos) / 60);
        if($minutes > 59){
            $minutes -= 60;
            $valandos++;
            if($valandos > 23){
                $valandos = 0;
            }
    }
}

if($valandos < 10){
    $valandos = "0$valandos";
}
if($minutes < 10){
    $minutes = "0$minutes";
}
if($sekundesNaujos < 10){
    $sekundesNaujos = "0$sekundesNaujos";
}
echo '<br>';
echo "naujas laikas pridejus $random sekundes: $valandos:$minutes:$sekundesNaujos.";


?>

