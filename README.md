Projet2

J'ai tous d'abord vérifier les prérequis de mon système pour que php cli et composer soit opérationnel.
Puis a la racine du projet j'ai lancé les commandes composer install, composer update et php .\bin\phpunit --version.

Apres j'ai commencer le lancement des tests unitaires, à la racine du projet j'ai lancé  la commande :./bin/phpunit ce qui m'a affiché 8 tests(100 % sans bug), dont 4 en échec ( FAILURE)

Ensuite challenge 2, j'ai télécharger phpstorm pour mettre mon dossier guesswhat. Puis dans la fenetre du terminal j'ai lancé la commande ./bin/phpunit ce qui affiché le message There were 4 failures
Pour regler ce soucis j'ai du crée une constante dans cardgame32.php pour definir l'ordre entre les colors et les cards du plus grand au plus petit et avec sa j'ai aussi rajouté une ligne code pour définir que si le colors trefle est superieur a coeur ca fait +1 et inversement meme chose pour les cards.
Puis apres voir noté ce code compléter les TODO dans cardtest.php public function

testCompareSameNameNoSameColor()
{
// TODO
$card1 = new Card('As', 'Coeur');
$card2 = new Card('As', 'pique');
$this->assertEquals(+1, CardGame32::compare($card1,$card2));
}

Meme name mais pas meme colors. Et coeur est superieur à pique donc +1 et compléter la meme chose pour les autres TODOS ce qui va regler les 4 faillures

Puis pour le challenge 3

Ajouter une nouvelle classe de test Cardgame32 en allant dans le fichier Src>core>cardgame pour crée un test

Mes soucis ont été le fait de mettre trop longtemps a comprendre.