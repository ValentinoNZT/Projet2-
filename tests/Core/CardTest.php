<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardTest extends TestCase
{

  public function testName()
  {
    $card = new Card('As', 'trefle');
    $this->assertEquals('As', $card->getName());
    $card = new Card('2', 'trefle');
    $this->assertEquals('2', $card->getName());

  }

  public function testColor()
  {
    $card = new Card('As', 'trefle');
    $this->assertEquals('trefle', $card->getColor());
    $card = new Card('As', 'pique');
    $this->assertEquals('pique', $card->getColor());
  }

  public function testCompareSameCard()
  {
    $card1 = new Card('As', 'Coeur');
    $card2 = new Card('As', 'Coeur');
    $this->assertEquals(0, CardGame32::compare($card1,$card2));
  }

  public function testCompareSameNameNoSameColor()
  {
    // TODO
      $card1 = new Card('As', 'Coeur');
      $card2 = new Card('As', 'pique');
      $this->assertEquals(+1, CardGame32::compare($card1,$card2));
  }

  public function testCompareNoSameCardNoSameColor()
  {
    // TODO
      $card1 = new Card('7', 'trefle');
      $card2 = new Card('As', 'pique');
      $this->assertNotEquals($card1->getName(),$card2->getName());
      $this->assertNotEquals($card1->getName(),$card2->getName());
  }

  public function testCompareNoSameCardSameColor()
  {
    // TODO
      $card1 = new Card('8', 'trefle');
      $card2 = new Card('7', 'trefle');
      $this->assertNotEquals($card1->getName(),$card2->getName());
      $this->assertNotEquals($card1->getName(),$card2->getName());
  }


  public function testToString()
  {
    //TODO vérifie que la représentation textuelle d'une carte est correcte
    $card = new Card('As', 'trefle');
    $this->assertEquals('As trefle', $card->__toString());
  }

}
