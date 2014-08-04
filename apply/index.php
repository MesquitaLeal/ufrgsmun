<div class="row" >
	<div class="col-lg-12 section-title" id="apply-title">
		<h1>Apply</h1>
	</div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
	case '':
		include_once 'apply/index.php';
		break;

	case 'countries':
		include_once 'apply/countries.php';
		break;

	case 'register':
		include_once 'apply/register.php';
		break;
	}
?>
