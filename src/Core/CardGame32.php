<?php

namespace App\Core;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{
    const ORDER_COLORS = ['trefle' =>4, 'coeur' =>3, 'pique' =>2, 'carreau' =>1];
    const ORDER_CARDS = ['as' =>8, 'roi' =>7, 'dame' =>6, 'valet' =>5, '10' =>4, '9' =>3, '8' =>2, '7' =>1];
  /**
   * @var $cards array a array of Cards
   */
  private $cards;

  /**
   * Guess constructor.
   * @param array $cards
   */
  public function __construct(array $cards)
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle()
  {
    // TODO (voir les fonctions sur les tableaux)
  }

  // TODO ajouter une méthode reOrder qui remet le paquet en ordre

  /** définir une relation d'ordre entre instance de Card.
   * à valeur égale (name) c'est l'ordre de la couleur qui prime
   * coeur > carreau > pique > trèfle
   * Attention : si AS de Coeur est plus fort que AS de Trèfle,
   * 2 de Coeur sera cependant plus faible que 3 de Trèfle
   *
   *  Remarque : cette méthode n'est pas de portée d'instance (static)
   *
   * @see https://www.php.net/manual/fr/function.usort.php
   *
   * @param $c1 Card
   * @param $c2 Card
   * @return int
   * <ul>
   *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
   *  <li> -1 si $c1 est considéré inférieur à $c2</li>
   * <li> +1 si $c1 est considéré supérieur à $c2</li>
   * </ul>
   *
   */
  public static function compare(Card $c1, Card $c2) : int
  {
    // TODO code naïf, et de plus il faudra prendre en compte la couleur !

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());
    $c1Color = Strtolower($c1->getcolor());
    $c2Color = Strtolower($c2->getcolor());

    if ($c1Name === $c2Name) {
        if ($c1Color === $c2Color) {
            return 0;
        }
        return (self::ORDER_COLORS[$c1Color]>self::ORDER_COLORS[$c2Color]) ? +1 : -1;}
    return (self::ORDER_CARDS[$c1Name]>self::ORDER_CARDS[$c2Color]) ? +1 : -1;}

 // TODO manque PHPDoc
  public static function factoryCardGame32() : CardGame32 {
     // TODO création d'un jeu de 32 cartes
    $cardGame = new CardGame32([new Card('As', 'trefle'), new Card('Rois', 'trefle'), new Card('Reine', 'trefle'), new Card('Valets', 'trefle'), new Card('10', 'trefle'), new Card('9', 'trefle'), new Card('8', 'trefle')) (new Card('As', 'pique'), new Card('Rois', 'pique'), new Card('Reine', 'pique'), new Card('Valets', 'pique'), new Card('10', 'pique'), new Card('9', 'pique'), new Card('8', 'pique')])(new Card('As', 'carreau'), new Card('Rois', 'carreau'), new Card('Reine', 'carreau'), new Card('Valets', 'carreau'), new Card('10', 'carreau'), new Card('9', 'carreau'), new Card('8', 'carreau'))(new Card('As', 'coeur'), new Card('Rois', 'coeur'), new Card('Reine', 'coeur'), new Card('Valets', 'coeur'), new Card('10', 'coeur'), new Card('9', 'coeur'), new Card('8', 'coeur'));
    return $cardGame;
  }

  // TODO manque PHPDoc
  public function getCard($index) : Card {
    // TODO naïf
    return  $this->cards[$index];
  }

}

