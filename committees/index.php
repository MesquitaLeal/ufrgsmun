<div class="row" >
    <div class="col-lg-12 section-title" id="committees-title">
        <h1>Committees</h1>
    </div>
</div>

<?php

$section = (isset($_GET['section']))? $_GET['section'] : '';

switch ($section) {
    case '':
        include_once 'committees/index.php';
        break;

    case 'overview':
        include_once 'committees/overview.php';
        break;

    case 'adb':
        include_once 'committees/adb.php';
        break;

    case 'disec':
        include_once 'committees/disec.php';
        break;

    case 'icj':
        include_once 'committees/icj.php';
        break;

    case 'ipc':
        include_once 'committees/ipc.php';
        break;

    case 'unsc':
        include_once 'committees/unsc.php';
        break;

    case 'wsis':
        include_once 'committees/wsis.php';
        break;

    case 'wec':
        include_once 'committees/wec.php';
        break;

    case 'zopacas':
        include_once 'committees/zopacas.php';
        break;
    }
?>
