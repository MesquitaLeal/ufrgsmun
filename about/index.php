<div class="row" >
	<div class="col-lg-12 section-title" id="about-title">
		<h1>About us</h1>
	</div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
	case '':
		include_once 'about/index.php';
		break;

	case 'mun':
		include_once 'about/mun.php';
		break;

	case 'meet':
		include_once 'about/meet.php';
		break;

	case 'history':
		include_once 'about/history.php';
		break;

	case 'projects':
		include_once 'about/projects.php';
		break;

	case 'partners':
		include_once 'about/partners.php';
		break;
	}
?>
