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
<div class="content-wrapper">

	<section class="container">





	<?php
	//require "row-one.php";

	require "row-intro.php";

	// Authentique
	require "row-authentique.php";



	// Exotique
	require "row-exotique.php";

	// Porter
	require "row-porter.php";

	// HIBISCUS
	require "row-hibiscus.php";

	// New england IPA
	require "row-potion.php";

	// Castor
	require "row-castor.php";

	//require "row-sharing.php";
	require "row-footer.php";
	?>

	</section>
</div>

<link href="css/binouze.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ruda" rel="stylesheet">

<?php
$admin->end();