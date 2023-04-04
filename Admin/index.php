<?php

//memanggil dan memproses file bagian atas
include_once 'top.php';
//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <?php 
                        //algoritma menangkap url agar masuk kedalam index
            $url = $_GET['url'];
            if($url == 'dashboard'){
                include_once 'dashboard.php';
            } else if (!empty($url)){
                include_once ''.$url.'.php';
            } else { 'dashboard.php';

        }

        ?>


        <?php 
         //memanggil login

        $url = $_GET['url'];
        if($url == 'login'){
            include_once 'login.php';
        } else if (!empty($url)){
            include_once ''.$url.'.php';
        } else { 'login.php';

    }

    ?>

    
    <?php 
    //memanggil register

    $url = $_GET['url'];
    if($url == 'register'){
        include_once 'register.php';
    } else if (!empty($url)){
        include_once ''.$url.'.php';
    } else { 'register.php';

}

?>


<?php
//memanggil file bagian bawah
include_once 'bottom.php';
?>
</div>
</main>
</div>

