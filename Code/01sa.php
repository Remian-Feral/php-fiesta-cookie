<?php
$Pokemons = array (
    array(1, 'Bulbasuar', 'Grass', 'Poison', 'Overgrow', 45, 49, 49),
    array(2, 'Ivysaur', 'Grass', 'Poison', 'Overgrow', 60, 62, 83),
    array(3, 'Venusaur', 'Grass', 'Poison', 'Overgrow', 80, 82, 43),
    array(4, 'Charmander', 'Fire', 'N/A', 'Blaze', 39, 52, 43),
    array(5, 'Charmeleon', 'Fire', 'N/A', 'Blaze', 58, 64, 58),
    array(6, 'Charizard', 'Fire', 'Flying', 'Blaze', 78, 84, 78),
    array(7, 'Squirtle', 'Water', 'N/A', 'Torrent', 44, 48, 65),
    array(8, 'Wartortle', 'Water', 'N/A', 'Torrent', 59, 63, 80),
    array(9, 'Blastoise', 'Water', 'N/A', 'Torrent', 79, 83, 100),
    array(10, 'Caterpie', 'Grass', 'N/A', 'Overgrow', 50, 20, 55),
    
);

 print_r( $Pokemons);
 echo '<br>';
 print count ($Pokemons, 1);

$Jeremiahs_Favorite = array (11, 'Articuno', 'Ice', 'Flying', 'Snow Cloak', 90, 85, 100);

foreach($Pokemons as $Pokemons){
		echo $Pokemons[1];		
		echo '<br>';
}

?>
