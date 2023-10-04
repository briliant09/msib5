<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div >
        <!-- <h1>Selamat datang dihalaman admin</h1> -->
    
        <?php
        error_reporting(0);

        $url = !isset($_GET['url']) ? 'dashboard' : $_GET['url'];
        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        } elseif (!empty($url)){
            include_once ''.$url.'.php';
        } else {
            include_once 'dashboard.php';
        }
        ?>
    </div>
</div>
<?php
include_once 'bottom.php';
?>