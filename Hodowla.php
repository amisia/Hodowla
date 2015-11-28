<?php

	include_once('Zwierz.php');
        include_once('Drapieznik.php');
        include_once('Zabojca.php');
	//$zwierz = new Zwierz();
	//echo $zwierz->otoZwierz();

	//$mojZwierz = new Zwierz ("pies", "samiec", "trikolorowy", "hau hau");
	//$innyZwierz = new Zwierz ("kot", "samica", "rudy", "miau miau");
	$z = new Zwierz ("konik", "samiec", "czarny", "ihaha");
	
	

	//echo $mojZwierz->otoZwierz();
	//echo $innyZwierz->otoZwierz();
	
	echo $z->helloZwierz();
        
        $drapieznik = new Drapieznik("kotek", "samica", "biały", "miau miau", new Zabojca("20", "4"));
       
        echo "\nPrędkość maksymalna wynosi: ".$drapieznik->getPredkoscMaksymalna()."\n";
        echo "\nPrzyśpieszenie wynosi: ".$drapieznik->getPrzyspieszenie()."\n";
        
        
          

		 	