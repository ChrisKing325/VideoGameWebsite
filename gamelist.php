<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">



<body>
<?php
include ('dbconnect.php');
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Halo 4', 'Mature', 'Shooter', '2012-11-06', '8', 'Medium-High', NULL, 'Halo_4_box_artwork.png');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");

echo "Finished adding game 1! \n";
	

$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'World of Warcraft', 'Teen', 'MMORPG', '2004-11-23', '8', 'High', NULL, 'WoW_Box_Art1.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 2! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Dishonored', 'Mature', 'Action', '2012-10-29', '6', 'Low', NULL, 'Dishonored_box_art_Bethesda.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 3! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Zelda: A Link to the Past', 'N/A', 'ActionAdventure', '1991-11-21', '8', 'Medium', NULL, 'The_Legend_of_Zelda_A_Link_to_the_Past_SNES_Game_Cover.jpg');"
mysqli_query($db, $query)
   			or die("Error Querying Database");

			
echo "Finished adding game 4! \n";


$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Pokemon Red', 'Everyone', 'Monster Battle', '1998-09-30', '9', 'High', NULL, 'Pokémon_box_art_-_Red_Version.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");

			
echo "Finished adding game 5! \n";


$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Super Smash Bros. Melee', 'Teen', 'Fighting', '2001-12-03', '8', 'High', NULL, 'Super_Smash_Bros_Melee_box_art.png');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 6! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Devil May Cry', 'Mature', 'Hack and Slash', '2001-08-23', '7', 'Medium', NULL, 'DMClogo.jpg ');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 7! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Guild Wars', 'Teen', 'MMORPG', '2005-04-26', '8', 'Medium-High', NULL, 'Guild_Wars_logo.png ');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 8! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Armored Core', 'Teen', 'Action Shooter', '1997-10-31', '7', 'Medium', NULL, 'Ac_cover.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 9! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Elder Scolls 3: Morrowind', 'Mature', 'Open World RPG', '2002-05-01', '8', 'Medium', NULL, 'MorrowindCOVER.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");


echo "Finished adding game 10! \n";

			
$query = "INSERT INTO `gamereviews`.`videogames` (`id`, `gamename`, `ESRBrating`, `genre`, `releasedate`, `score`, `replayability`, `AdminReview`, `picturelink`) 
	VALUES (NULL, 'Grand Theft Auto 3', 'Mature', 'Open World Action', '2001-10-22', '9', 'Medium-High', NULL, 'GTA3boxcover.jpg');"
	
mysqli_query($db, $query)
   			or die("Error Querying Database");
			
echo "Finished adding game 11! \n";
?>

</body>

</html>