<?php 

include ('unit.php'); 
include ('Elf.php');
include ('Soldat.php');

$peter = new Unit (100);

echo $peter->info();
echo"<br>";
echo $peter->attack();

$elf1= new Elf();

$elf1->elf();
echo"<br>";
echo $elf1->info();
echo"<br>";

$soldat1= new Soldat();

$soldat1->soldat();
echo"<br>";
echo $soldat1->info();
echo"<br>";

echo $soldat1->walk('top');
echo $soldat1->position();