<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;

class CardGame32Test extends TestCase
{
    public function testCompare(){

    }

    public function testToString2cards()
        /**
         * Va permettre de vérifier le nombre de carte par exemple pour le premier on vérifie si il y a 2 cartes le deuxième si il y a 1 carte et le 3ème si il y a 32 cartes
         */
    {
        $jeudecarte = new CardGames32([new Card('As','pique'), new Card'rois','coeur')]);

    }
}
