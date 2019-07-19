<?php 
$tableArmes = ['pistolet', 'fouet', 'poing'];
$armes = $tableArmes[rand(0,2)];
echo "L'ennemi utilise " . $armes . "<br>";
echo $opponentWeapon;
$indyArmes=0;


if ($armes =="poing")
{
  $indyArmes="pistolet";
echo "Indy sort son". " " . $indyArmes;
}
elseif ($armes == "pistolet")
{
  $indyArmes="fouet";
echo  'Indy utilise son ' ." " . $indyArmes;

   
}
elseif($armes == "fouet")
{
  $indyArmes="poing";
  echo  'Indy utilise son ' ." " . $indyArmes;
}



