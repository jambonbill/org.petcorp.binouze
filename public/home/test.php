<?php
/**
 * Petcorp @ Binouze
 */

header('Content-Type: text/html; charset=utf-8');
session_start();

require __DIR__."/../../vendor/autoload.php";

$admin = new LTE\Admin;
echo $admin;
?>
<div class="content-wrapper">

	<section class="container">

		<div class='row'>

			<div class='col-md-6'>
			QQQ
			</div>

			<div class='col-md-6'>
			BBB
			</div>

		</div>

	</section>



</div>


<?php
$admin->end();