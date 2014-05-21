<div class="row" >
    <div class="col-lg-12 section-title" id="conference-title">
        <h1>Conference Info</h1>
    </div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'conference/index.php';
        break;

    case 'mun':
        include_once 'conference/mun.php';
        break;

    case 'meet':
        include_once 'conference/meet.php';
        break;

    case 'history':
        include_once 'conference/history.php';
        break;

    case 'location':
        include_once 'conference/location.php';
        break;

    case 'partners':
        include_once 'conference/partners.php';
        break;
    }
?>
