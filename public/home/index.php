<?php
/**
 * Petcorp @ Binouze
 */

header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\Admin;
echo $admin->head();
?>

<section class="container">


	<?php
	require "row-intro.php";

	// Authentique
	require "row-authentique.php";

	// Castor
	require "row-castor.php";

	// Exotique
	require "row-exotique.php";

	// Porter
	require "row-porter.php";

	// New england IPA
	//

	//require "row-sharing.php";
	require "row-footer.php";
	?>

</section>

<link href="css/binouze.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ruda" rel="stylesheet">

<?php
$admin->end();