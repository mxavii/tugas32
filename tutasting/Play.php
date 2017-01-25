<?php

namespace App;

class Play
{
    public $player;
    public $player2;
    private $p1 = 0;
    private $p2 = 0;

    private function mode2P()
    {
        echo "BATU = 1   KERTAS = 2   GUNTING = 3 \n";
        echo "Silakan masukkan pilihan : \n";
        echo "PLAYER1 :";
        $player = fopen("php://stdin", "r");
        $player= fgets($player);
        $this->player = trim($player);
        echo "PLAYER2 :";
        $player2 = fopen("php://stdin", "r");
        $player2= fgets($player2);
        $this->player2 = trim($player2);
    }

    private function modeCpu()
    {
        echo "BATU = 1   KERTAS = 2   GUNTING = 3 \n";
        echo "Silakan masukkan pilihan : \n";
        echo "PLAYER1 :";
        $player = fopen("php://stdin", "r");
        $player= fgets($player);
        $this->player = trim($player);
    }

    public function setMode()
    {
        $kom = rand(1, 3);
        if ($this->mode == 1) {
            $this->player2 = $this->player2;
            echo $this->mode2P();
        }
        elseif  ($this->mode == 2) {
            $this->player2 = $kom;
            echo $this->modeCpu();
        }
        else {
          exit();
        }
    }

    public function cekHasil()
    {
        if ($this->player < 1 || $this->player > 3 || $this->player2 < 1 || $this->player2 > 3) {
            echo "\nAnda harus memilih 1, 2 atau 3";
        }
        else {
            if (($this->player == 1 && $this->player2 == 2) || ($this->player == 2 && $this->player2 == 3) || ($this->player == 3 && $this->player2 == 1)){
                echo "\nKALAH                   MENANG\n";
                $this->p2++;
            }
            elseif ($this->player == $this->player2) {
                echo "\n         <= DRAW =>";
            }
            else {
                echo "\nMENANG                  KALAH \n";
                $this->p1++;
            }
        }
    }

    public function skor()
    {
        echo "\n           Skor akhir \n\n";
        echo "      PLAYER1 $this->p1 - $this->p2 PLAYER2 \n\n\n";
    }

    public function getPilih($pilihan)
    {
        if ($pilihan == 1) {
            echo "BATU";
        }
        elseif ($pilihan == 2) {
            echo "KERTAS";
        }
        else {
            echo "GUNTING";
        }
    }
}
