<div class="row" >
    <div class="col-lg-12 section-title" id="preparation-title">
        <h1>Preparation</h1>
    </div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'preparation/index.php';
        break;

    case 'study':
        include_once 'preparation/study.php';
        break;

    case 'handbook':
        include_once 'preparation/handbook.php';
        break;

    case 'paper':
        include_once 'preparation/paper.php';
        break;

    case 'schedule':
        include_once 'preparation/schedule.php';
        break;

    case 'award':
        include_once 'preparation/award.php';
        break;

    case 'links':
        include_once 'preparation/links.php';
        break;

    }
?>
