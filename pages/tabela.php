<?php 
session_start();
for($i = 1; $i <= 25; $i++)
{
        if(isset($_POST['killSquad' . $i . 'Jogo3']))
        {
           $_SESSION['killSquad' . $i . 'Jogo3'] = $_POST['killSquad' . $i . 'Jogo3'];
        }
        if(isset($_POST['colocacaoSquad' . $i . 'Jogo3']))
        {
           $_SESSION['colocacaoSquad' . $i . 'Jogo3'] = $_POST['colocacaoSquad' . $i . 'Jogo3'];
        }
}

$primeirolugar = $_SESSION["primeiro"]; //pega o valor que o usuário deixou para o 1 lugar ...
$segundolugar = $_SESSION["segundo"]; //pega o valor que o usuário deixou para o 2 lugar ...
$terceirolugar = $_SESSION["terceiro"];
$quartolugar = $_SESSION["quarto"];
$quintolugar = $_SESSION["quinto"];
$sextolugar = $_SESSION["sexto"];
$setimolugar = $_SESSION["setimo"];
$oitavolugar = $_SESSION["oitavo"];
$nonolugar = $_SESSION["nono"];
$decimolugar = $_SESSION["decimo"];
$decimoprimeirolugar = $_SESSION["decimoprimeiro"];
$decimosegundolugar = $_SESSION["decimosegundo"];
$decimoterceirolugar = $_SESSION["decimoterceiro"];
$decimoquartolugar =  $_SESSION["decimoquarto"];
$decimoquintolugar =  $_SESSION["decimoquinto"];
$kill = $_SESSION['kill'];

$valor1 = 0;
$valor2 = 0;
$valor3 = 0;
$valor4 = 0;
$valor5 = 0;
$valor6 = 0;
$valor7 = 0;
$valor8 = 0;
$valor9 = 0;
$valor10 = 0;
$valor11 = 0;
$valor12 = 0;
$valor13 = 0;
$valor14 = 0;
$valor15 = 0;
$valor16 = 0;
$valor17 = 0;
$valor18 = 0;
$valor19 = 0;
$valor20 = 0;
$valor21 = 0;
$valor22 = 0;
$valor23 = 0;
$valor24 = 0;
$valor25 = 0;

for($i = 1; $i <= 3; $i++)
{
//PRIMEIRO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 1)
  $valor1 += $primeirolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 1)
  $valor2 += $primeirolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 1)
  $valor3 += $primeirolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 1)
  $valor4 += $primeirolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 1)
  $valor5 += $primeirolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 1)
  $valor6 += $primeirolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 1)
  $valor7 += $primeirolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 1)
  $valor8 += $primeirolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 1)
  $valor9 += $primeirolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 1)
  $valor10 += $primeirolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 1)
  $valor11 += $primeirolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 1)
  $valor12 += $primeirolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 1)
  $valor13 += $primeirolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 1)
  $valor14 += $primeirolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 1)
  $valor15 += $primeirolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 1)
  $valor16 += $primeirolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 1)
  $valor17 += $primeirolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 1)
  $valor18 += $primeirolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 1)
  $valor19 += $primeirolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 1)
  $valor20 += $primeirolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 1)
  $valor21 += $primeirolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 1)
  $valor22 += $primeirolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 1)
  $valor23 += $primeirolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 1)
  $valor24 += $primeirolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 1)
  $valor25 += $primeirolugar;
//PRIMEIRO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 2)
  $valor1 += $segundolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 2)
  $valor2 += $segundolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 2)
  $valor3 += $segundolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 2)
  $valor4 += $segundolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 2)
  $valor5 += $segundolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 2)
  $valor6 += $segundolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 2)
  $valor7 += $segundolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 2)
  $valor8 += $segundolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 2)
  $valor9 += $segundolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 2)
  $valor10 += $segundolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 2)
  $valor11 += $segundolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 2)
  $valor12 += $segundolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 2)
  $valor13 += $segundolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 2)
  $valor14 += $segundolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 2)
  $valor15 += $segundolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 2)
  $valor16 += $segundolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 2)
  $valor17 += $segundolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 2)
  $valor18 += $segundolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 2)
  $valor19 += $segundolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 2)
  $valor20 += $segundolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 2)
  $valor21 += $segundolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 2)
  $valor22 += $segundolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 2)
  $valor23 += $segundolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 2)
  $valor24 += $segundolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 2)
  $valor25 += $segundolugar;
//SEGUNDO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 3)
  $valor1 += $terceirolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 3)
  $valor2 += $terceirolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 3)
  $valor3 += $terceirolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 3)
  $valor4 += $terceirolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 3)
  $valor5 += $terceirolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 3)
  $valor6 += $terceirolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 3)
  $valor7 += $terceirolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 3)
  $valor8 += $terceirolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 3)
  $valor9 += $terceirolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 3)
  $valor10 += $terceirolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 3)
  $valor11 += $terceirolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 3)
  $valor12 += $terceirolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 3)
  $valor13 += $terceirolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 3)
  $valor14 += $terceirolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 3)
  $valor15 += $terceirolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 3)
  $valor16 += $terceirolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 3)
  $valor17 += $terceirolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 3)
  $valor18 += $terceirolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 3)
  $valor19 += $terceirolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 3)
  $valor20 += $terceirolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 3)
  $valor21 += $terceirolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 3)
  $valor22 += $terceirolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 3)
  $valor23 += $terceirolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 3)
  $valor24 += $terceirolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 3)
  $valor25 += $terceirolugar;
//TERCEIRO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 4)
  $valor1 += $quartolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 4)
  $valor2 += $quartolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 4)
  $valor3 += $quartolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 4)
  $valor4 += $quartolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 4)
  $valor5 += $quartolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 4)
  $valor6 += $quartolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 4)
  $valor7 += $quartolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 4)
  $valor8 += $quartolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 4)
  $valor9 += $quartolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 4)
  $valor10 += $quartolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 4)
  $valor11 += $quartolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 4)
  $valor12 += $quartolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 4)
  $valor13 += $quartolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 4)
  $valor14 += $quartolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 4)
  $valor15 += $quartolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 4)
  $valor16 += $quartolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 4)
  $valor17 += $quartolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 4)
  $valor18 += $quartolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 4)
  $valor19 += $quartolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 4)
  $valor20 += $quartolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 4)
  $valor21 += $quartolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 4)
  $valor22 += $quartolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 4)
  $valor23 += $quartolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 4)
  $valor24 += $quartolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 4)
  $valor25 += $quartolugar;
//QUARTO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 5)
  $valor1 += $quintolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 5)
  $valor2 += $quintolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 5)
  $valor3 += $quintolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 5)
  $valor4 += $quintolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 5)
  $valor5 += $quintolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 5)
  $valor6 += $quintolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 5)
  $valor7 += $quintolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 5)
  $valor8 += $quintolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 5)
  $valor9 += $quintolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 5)
  $valor10 += $quintolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 5)
  $valor11 += $quintolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 5)
  $valor12 += $quintolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 5)
  $valor13 += $quintolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 5)
  $valor14 += $quintolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 5)
  $valor15 += $quintolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 5)
  $valor16 += $quintolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 5)
  $valor17 += $quintolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 5)
  $valor18 += $quintolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 5)
  $valor19 += $quintolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 5)
  $valor20 += $quintolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 5)
  $valor21 += $quintolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 5)
  $valor22 += $quintolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 5)
  $valor23 += $quintolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 5)
  $valor24 += $quintolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 5)
  $valor25 += $quintolugar;
//QUINTO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 6)
  $valor1 += $sextolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 6)
  $valor2 += $sextolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 6)
  $valor3 += $sextolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 6)
  $valor4 += $sextolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 6)
  $valor5 += $sextolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 6)
  $valor6 += $sextolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 6)
  $valor7 += $sextolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 6)
  $valor8 += $sextolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 6)
  $valor9 += $sextolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 6)
  $valor10 += $sextolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 6)
  $valor11 += $sextolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 6)
  $valor12 += $sextolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 6)
  $valor13 += $sextolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 6)
  $valor14 += $sextolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 6)
  $valor15 += $sextolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 6)
  $valor16 += $sextolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 6)
  $valor17 += $sextolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 6)
  $valor18 += $sextolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 6)
  $valor19 += $sextolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 6)
  $valor20 += $sextolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 6)
  $valor21 += $sextolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 6)
  $valor22 += $sextolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 6)
  $valor23 += $sextolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 6)
  $valor24 += $sextolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 6)
  $valor25 += $sextolugar;
//SEXTO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 7)
  $valor1 += $setimolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 7)
  $valor2 += $setimolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 7)
  $valor3 += $setimolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 7)
  $valor4 += $setimolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 7)
  $valor5 += $setimolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 7)
  $valor6 += $setimolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 7)
  $valor7 += $setimolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 7)
  $valor8 += $setimolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 7)
  $valor9 += $setimolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 7)
  $valor10 += $setimolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 7)
  $valor11 += $setimolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 7)
  $valor12 += $setimolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 7)
  $valor13 += $setimolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 7)
  $valor14 += $setimolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 7)
  $valor15 += $setimolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 7)
  $valor16 += $setimolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 7)
  $valor17 += $setimolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 7)
  $valor18 += $setimolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 7)
  $valor19 += $setimolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 7)
  $valor20 += $setimolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 7)
  $valor21 += $setimolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 7)
  $valor22 += $setimolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 7)
  $valor23 += $setimolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 7)
  $valor24 += $setimolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 7)
  $valor25 += $setimolugar;
//SETIMO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 8)
  $valor1 += $oitavolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 8)
  $valor2 += $oitavolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 8)
  $valor3 += $oitavolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 8)
  $valor4 += $oitavolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 8)
  $valor5 += $oitavolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 8)
  $valor6 += $oitavolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 8)
  $valor7 += $oitavolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 8)
  $valor8 += $oitavolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 8)
  $valor9 += $oitavolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 8)
  $valor10 += $oitavolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 8)
  $valor11 += $oitavolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 8)
  $valor12 += $oitavolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 8)
  $valor13 += $oitavolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 8)
  $valor14 += $oitavolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 8)
  $valor15 += $oitavolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 8)
  $valor16 += $oitavolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 8)
  $valor17 += $oitavolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 8)
  $valor18 += $oitavolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 8)
  $valor19 += $oitavolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 8)
  $valor20 += $oitavolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 8)
  $valor21 += $oitavolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 8)
  $valor22 += $oitavolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 8)
  $valor23 += $oitavolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 8)
  $valor24 += $oitavolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 8)
  $valor25 += $oitavolugar;
//OITAVO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 9)
  $valor1 += $nonolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 9)
  $valor2 += $nonolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 9)
  $valor3 += $nonolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 9)
  $valor4 += $nonolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 9)
  $valor5 += $nonolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 9)
  $valor6 += $nonolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 9)
  $valor7 += $nonolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 9)
  $valor8 += $nonolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 9)
  $valor9 += $nonolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 9)
  $valor10 += $nonolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 9)
  $valor11 += $nonolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 9)
  $valor12 += $nonolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 9)
  $valor13 += $nonolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 9)
  $valor14 += $nonolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 9)
  $valor15 += $nonolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 9)
  $valor16 += $nonolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 9)
  $valor17 += $nonolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 9)
  $valor18 += $nonolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 9)
  $valor19 += $nonolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 9)
  $valor20 += $nonolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 9)
  $valor21 += $nonolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 9)
  $valor22 += $nonolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 9)
  $valor23 += $nonolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 9)
  $valor24 += $nonolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 9)
  $valor25 += $nonolugar;
//NONO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 10)
  $valor1 += $decimolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 10)
  $valor2 += $decimolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 10)
  $valor3 += $decimolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 10)
  $valor4 += $decimolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 10)
  $valor5 += $decimolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 10)
  $valor6 += $decimolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 10)
  $valor7 += $decimolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 10)
  $valor8 += $decimolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 10)
  $valor9 += $decimolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 10)
  $valor10 += $decimolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 10)
  $valor11 += $decimolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 10)
  $valor12 += $decimolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 10)
  $valor13 += $decimolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 10)
  $valor14 += $decimolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 10)
  $valor15 += $decimolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 10)
  $valor16 += $decimolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 10)
  $valor17 += $decimolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 10)
  $valor18 += $decimolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 10)
  $valor19 += $decimolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 10)
  $valor20 += $decimolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 10)
  $valor21 += $decimolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 10)
  $valor22 += $decimolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 10)
  $valor23 += $decimolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 10)
  $valor24 += $decimolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 10)
  $valor25 += $decimolugar;
//DECIMO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 11)
  $valor1 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 11)
  $valor2 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 11)
  $valor3 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 11)
  $valor4 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 11)
  $valor5 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 11)
  $valor6 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 11)
  $valor7 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 11)
  $valor8 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 11)
  $valor9 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 11)
  $valor10 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 11)
  $valor11 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 11)
  $valor12 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 11)
  $valor13 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 11)
  $valor14 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 11)
  $valor15 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 11)
  $valor16 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 11)
  $valor17 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 11)
  $valor18 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 11)
  $valor19 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 11)
  $valor20 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 11)
  $valor21 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 11)
  $valor22 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 11)
  $valor23 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 11)
  $valor24 += $decimoprimeirolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 11)
  $valor25 += $decimoprimeirolugar;
//DECIMOPRIMEIRO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 12)
  $valor1 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 12)
  $valor2 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 12)
  $valor3 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 12)
  $valor4 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 12)
  $valor5 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 12)
  $valor6 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 12)
  $valor7 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 12)
  $valor8 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 12)
  $valor9 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 12)
  $valor10 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 12)
  $valor11 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 12)
  $valor12 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 12)
  $valor13 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 12)
  $valor14 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 12)
  $valor15 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 12)
  $valor16 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 12)
  $valor17 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 12)
  $valor18 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 12)
  $valor19 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 12)
  $valor20 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 12)
  $valor21 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 12)
  $valor22 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 12)
  $valor23 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 12)
  $valor24 += $decimosegundolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 12)
  $valor25 += $decimosegundolugar;
//DECIMOSEGUNDO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 13)
  $valor1 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 13)
  $valor2 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 13)
  $valor3 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 13)
  $valor4 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 13)
  $valor5 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 13)
  $valor6 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 13)
  $valor7 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 13)
  $valor8 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 13)
  $valor9 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 13)
  $valor10 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 13)
  $valor11 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 13)
  $valor12 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 13)
  $valor13 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 13)
  $valor14 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 13)
  $valor15 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 13)
  $valor16 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 13)
  $valor17 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 13)
  $valor18 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 13)
  $valor19 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 13)
  $valor20 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 13)
  $valor21 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 13)
  $valor22 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 13)
  $valor23 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 13)
  $valor24 += $decimoterceirolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 13)
  $valor25 += $decimoterceirolugar;
//DECIMOTERCEIRO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 14)
  $valor1 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad2Jogo'. $i] == 14)
  $valor2 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad3Jogo'. $i] == 14)
  $valor3 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad4Jogo'. $i] == 14)
  $valor4 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad5Jogo'. $i] == 14)
  $valor5 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad6Jogo'. $i] == 14)
  $valor6 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad7Jogo'. $i] == 14)
  $valor7 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad8Jogo'. $i] == 14)
  $valor8 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad9Jogo'. $i] == 14)
  $valor9 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad10Jogo'. $i] == 14)
  $valor10 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad11Jogo'. $i] == 14)
  $valor11 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad12Jogo'. $i] == 14)
  $valor12 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad13Jogo'. $i] == 14)
  $valor13 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad14Jogo'. $i] == 14)
  $valor14 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad15Jogo'. $i] == 14)
  $valor15 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad16Jogo'. $i] == 14)
  $valor16 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad17Jogo'. $i] == 14)
  $valor17 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad18Jogo'. $i] == 14)
  $valor18 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad19Jogo'. $i] == 14)
  $valor19 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad20Jogo'. $i] == 14)
  $valor20 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad21Jogo'. $i] == 14)
  $valor21 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad22Jogo'. $i] == 14)
  $valor22 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad23Jogo'. $i] == 14)
  $valor23 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad24Jogo'. $i] == 14)
  $valor24 += $decimoquartolugar;
 if($_SESSION['colocacaoSquad25Jogo'. $i] == 14)
  $valor25 += $decimoquartolugar;
//DECIMOQUARTO LUGAR
if($_SESSION['colocacaoSquad1Jogo'. $i] == 15)
  $valor1 += $decimoquintolugar;
if($_SESSION['colocacaoSquad2Jogo'. $i] == 15)
  $valor2 += $decimoquintolugar;
if($_SESSION['colocacaoSquad3Jogo'. $i] == 15)
  $valor3 += $decimoquintolugar;
if($_SESSION['colocacaoSquad4Jogo'. $i] == 15)
  $valor4 += $decimoquintolugar;
if($_SESSION['colocacaoSquad5Jogo'. $i] == 15)
  $valor5 += $decimoquintolugar;
if($_SESSION['colocacaoSquad6Jogo'. $i] == 15)
  $valor6 += $decimoquintolugar;
if($_SESSION['colocacaoSquad7Jogo'. $i] == 15)
  $valor7 += $decimoquintolugar;
if($_SESSION['colocacaoSquad8Jogo'. $i] == 15)
  $valor8 += $decimoquintolugar;
if($_SESSION['colocacaoSquad9Jogo'. $i] == 15)
  $valor9 += $decimoquintolugar;
if($_SESSION['colocacaoSquad10Jogo'. $i] == 15)
  $valor10 += $decimoquintolugar;
if($_SESSION['colocacaoSquad11Jogo'. $i] == 15)
  $valor11 += $decimoquintolugar;
if($_SESSION['colocacaoSquad12Jogo'. $i] == 15)
  $valor12 += $decimoquintolugar;
if($_SESSION['colocacaoSquad13Jogo'. $i] == 15)
  $valor13 += $decimoquintolugar;
if($_SESSION['colocacaoSquad14Jogo'. $i] == 15)
  $valor14 += $decimoquintolugar;
if($_SESSION['colocacaoSquad15Jogo'. $i] == 15)
  $valor15 += $decimoquintolugar;
if($_SESSION['colocacaoSquad16Jogo'. $i] == 15)
  $valor16 += $decimoquintolugar;
if($_SESSION['colocacaoSquad17Jogo'. $i] == 15)
  $valor17 += $decimoquintolugar;
if($_SESSION['colocacaoSquad18Jogo'. $i] == 15)
  $valor18 += $decimoquintolugar;
if($_SESSION['colocacaoSquad19Jogo'. $i] == 15)
  $valor19 += $decimoquintolugar;
if($_SESSION['colocacaoSquad20Jogo'. $i] == 15)
  $valor20 += $decimoquintolugar;
if($_SESSION['colocacaoSquad21Jogo'. $i] == 15)
  $valor21 += $decimoquintolugar;
if($_SESSION['colocacaoSquad22Jogo'. $i] == 15)
  $valor22 += $decimoquintolugar;
if($_SESSION['colocacaoSquad23Jogo'. $i] == 15)
  $valor23 += $decimoquintolugar;
if($_SESSION['colocacaoSquad24Jogo'. $i] == 15)
  $valor24 += $decimoquintolugar;
if($_SESSION['colocacaoSquad25Jogo'. $i] == 15)
  $valor25 += $decimoquintolugar;
//DECIMOQUINTO LUGAR
}

for($i = 1; $i <= 3; $i++)
{
$valor1 += ($_SESSION['killSquad1Jogo'. $i] * $kill);
$valor2 += ($_SESSION['killSquad2Jogo'. $i] * $kill);
$valor3 += ($_SESSION['killSquad3Jogo'. $i] * $kill);
$valor4 += ($_SESSION['killSquad4Jogo'. $i] * $kill);
$valor5 += ($_SESSION['killSquad5Jogo'. $i] * $kill);
$valor6 += ($_SESSION['killSquad6Jogo'. $i] * $kill);
$valor7 += ($_SESSION['killSquad7Jogo'. $i] * $kill);
$valor8 += ($_SESSION['killSquad8Jogo'. $i] * $kill);
$valor9 += ($_SESSION['killSquad9Jogo'. $i] * $kill);
$valor10 += ($_SESSION['killSquad10Jogo'. $i] * $kill);
$valor11 += ($_SESSION['killSquad11Jogo'. $i] * $kill);
$valor12 += ($_SESSION['killSquad12Jogo'. $i] * $kill);
$valor13 += ($_SESSION['killSquad13Jogo'. $i] * $kill);
$valor14 += ($_SESSION['killSquad14Jogo'. $i] * $kill);
$valor15 += ($_SESSION['killSquad15Jogo'. $i] * $kill);
$valor16 += ($_SESSION['killSquad16Jogo'. $i] * $kill);
$valor17 += ($_SESSION['killSquad17Jogo'. $i] * $kill);
$valor18 += ($_SESSION['killSquad18Jogo'. $i] * $kill);
$valor19 += ($_SESSION['killSquad19Jogo'. $i] * $kill);
$valor20 += ($_SESSION['killSquad20Jogo'. $i] * $kill);
$valor21 += ($_SESSION['killSquad21Jogo'. $i] * $kill);
$valor22 += ($_SESSION['killSquad22Jogo'. $i] * $kill);
$valor23 += ($_SESSION['killSquad23Jogo'. $i] * $kill);
$valor24 += ($_SESSION['killSquad24Jogo'. $i] * $kill);
$valor25 += ($_SESSION['killSquad25Jogo'. $i] * $kill);
}

$_SESSION['totalsquad1'] = $valor1;
$_SESSION['totalsquad2'] = $valor2;
$_SESSION['totalsquad3'] = $valor3;
$_SESSION['totalsquad4'] = $valor4;
$_SESSION['totalsquad5'] = $valor5;
$_SESSION['totalsquad6'] = $valor6;
$_SESSION['totalsquad7'] = $valor7;
$_SESSION['totalsquad8'] = $valor8;
$_SESSION['totalsquad9'] = $valor9;
$_SESSION['totalsquad10'] = $valor10;
$_SESSION['totalsquad11'] = $valor11;
$_SESSION['totalsquad12'] = $valor12;
$_SESSION['totalsquad13'] = $valor13;
$_SESSION['totalsquad14'] = $valor14;
$_SESSION['totalsquad15'] = $valor15;
$_SESSION['totalsquad16'] = $valor16;
$_SESSION['totalsquad17'] = $valor17;
$_SESSION['totalsquad18'] = $valor18;
$_SESSION['totalsquad19'] = $valor19;
$_SESSION['totalsquad20'] = $valor20;
$_SESSION['totalsquad21'] = $valor21;
$_SESSION['totalsquad22'] = $valor22;
$_SESSION['totalsquad23'] = $valor23;
$_SESSION['totalsquad24'] = $valor24;
$_SESSION['totalsquad25'] = $valor25;

if($valor1 == 0)
  $valor1 = "";
if($valor2 == 0)
  $valor2 = "";
if($valor3 == 0)
  $valor3 = "";
if($valor4 == 0)
  $valor4 = "";
if($valor5 == 0)
  $valor5 = "";
if($valor6 == 0)
  $valor6 = "";
if($valor7 == 0)
  $valor7 = "";
if($valor8 == 0)
  $valor8 = "";
if($valor9 == 0)
  $valor9 = "";
if($valor10 == 0)
  $valor10 = "";
if($valor11 == 0)
  $valor11 = "";
if($valor12 == 0)
  $valor12 = "";
if($valor13 == 0)
  $valor13 = "";
if($valor14 == 0)
  $valor14 = "";
if($valor15 == 0)
  $valor15 = "";
if($valor16 == 0)
  $valor16 = "";
if($valor17 == 0)
  $valor17 = "";
if($valor18 == 0)
  $valor18 = "";
if($valor19 == 0)
  $valor19 = "";
if($valor20 == 0)
  $valor20 = "";
if($valor21 == 0)
  $valor21 = "";
if($valor22 == 0)
  $valor22 = "";
if($valor23 == 0)
  $valor23 = "";
if($valor24 == 0)
  $valor24 = "";
if($valor25 == 0)
  $valor25 = "";


$pontos = array(1 => $valor1, 2 => $valor2, 3 => $valor3, 4 => $valor4, 5 =>$valor5, 6 =>$valor6, 7 => $valor7, 8 =>$valor8,
9 => $valor9, 10 =>$valor10, 11 =>$valor11, 12 =>$valor12, 13 =>$valor13, 14 =>$valor14, 15 =>$valor15, 16 =>$valor16, 17 =>$valor17, 
18 =>$valor18, 19 => $valor19, 20 => $valor20, 21 => $valor21, 22 =>$valor22, 23 =>$valor23, 24 => $valor24, 25 =>$valor25);

$nomes = array( 1 => $_SESSION['squad1'], 2 => $_SESSION['squad2'], 3 => $_SESSION['squad3'], 4 => $_SESSION['squad4'], 
5 => $_SESSION['squad5'],6 => $_SESSION['squad6'], 7 =>  $_SESSION['squad7'], 8 => $_SESSION['squad8'], 9=> $_SESSION['squad9'],
10 => $_SESSION['squad10'], 11 => $_SESSION['squad11'], 12 => $_SESSION['squad12'], 13 => $_SESSION['squad13'], 
14 => $_SESSION['squad14'], 15 => $_SESSION['squad15'], 16 => $_SESSION['squad16'], 17 =>$_SESSION['squad17'],
18 => $_SESSION['squad18'], 19 => $_SESSION['squad19'], 20 => $_SESSION['squad20'], 21 =>$_SESSION['squad21'],
22 =>$_SESSION['squad22'],23 =>$_SESSION['squad23'], 24 => $_SESSION['squad24'], 25 =>$_SESSION['squad25']);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Table Sorter-->
    <script src="../scripts/tablesorter.js"></script>

    <link rel="stylesheet" href="../styles/tabela.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="https://pbs.twimg.com/media/Dv_DEzsWoAIanlg.jpg">
    <title>Scrim - Tabela</title>
</head>

<body>
    <div class="container center-align">
        <h3>É Juiz, foi cansativo, mas valeu a pena.</h3>
        <span>Como prometido aqui vai sua tabela :)</span>
        <br><br>
    <div class="formulario">
    <table id="myTable" class="highlight">
        <thead>
          <tr>
              <th data-field="Squad">Squad</th>
              <th data-field="Ponto" id="direita">Total de Pontos</th>          
          </tr>
        </thead>
        <tbody>
          <?php 
          for($i = 1; $i <= 25; $i++)
          {
            if($nomes[$i] == "")
            {
              echo"
              <tr>
              <td>&nbsp;<b>Vazio</b> </td>
              <td> 0 </td>
              </tr>
              ";
            }
            else if($pontos[$i] == "")
            {
              echo"
              <tr>
              <td>&nbsp;<b>". $nomes[$i] ."</b></td>
              <td> 0 </td>
              </tr>
              ";
            }
            else{
              echo"
              <tr>
              <td>&nbsp;<b>". $nomes[$i] ."</b></td>
              <td> ". $pontos[$i] ." </td>
              </tr>
              ";
            }
          }
          ?>
        </tbody>
      </table>
      <!--buttons-->
      <div class="row">
          <div class='input-field col m4'> 
            <a class="waves-effect waves-light btn" href="../pages/adicionar-jogo2.php"><i class="material-icons left">arrow_back</i><b>voltar</b></a>
          </div>
          <div class='input-field col m7'> 
            <a class="waves-effect waves-light btn" href="../index.php"><i class="material-icons left">loop</i><b>Voltar ao início</b></a>
          </div>
        </div>    
     </div>
    </div>
      <script src="../scripts/tabela.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>