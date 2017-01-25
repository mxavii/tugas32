<?php

require __DIR__ . '/vendor/autoload.php';

use App\Play;

$game = new Play();

echo "\n            >>PILIH MODE PERMAINAN<< \n";
echo "PLAYER1 vs PLAYER2 = 1  || PLAYER1 vs COMPUTER = 2 \n";
$mode = fopen("php://stdin", "r");
$mode = fgets($mode);
$game->mode = trim($mode);

system('clear');

do {
	echo $game->setMode();
	echo "\n";
	echo "PLAYER1               PLAYER2\n";
	$game->getPilih($game->player);
	echo "   -    VS    -   ";
	$game->getPilih($game->player2);
	$game->cekHasil();

	echo "\n\nENTER untuk lanjut atau ketik sembarang lalu enter untuk SELESAI";
	$lanjut = fopen("php://stdin", "r");
	$lanjut = fgets($lanjut);
	system('clear');
} while (trim($lanjut) == '');

system('clear');

$game->skor();
