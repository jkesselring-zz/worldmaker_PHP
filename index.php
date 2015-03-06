<?php

require_once 'Generate.php';
require_once 'Fetcher.php';

//Here we specify the name of the file in our json folder.
//json/ will be prepended and
//.js will be appended to the name.
$fetcher = new Fetcher('armor');
$json = $fetcher->fetch();

//Basic error checking.
if($fetcher->error() != null || strlen($fetcher->error()) > 0)
	exit($fetcher->error());

//display generated text.
echo Generate::armor($json->armor);