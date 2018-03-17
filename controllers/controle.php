<?php 
    if ($action == 'home'){
        require "views/head.html";
        require "views/stock.html";
        require "views/cat.php";
        require "views/blockquote.html";
        require "views/footer.html";
    }

    if ($action == 'present'){
        require "views/headnav.html";
        require "views/present.html";
        require "views/footer.html";
    }

    if ($action == 'stock'){
        require "views/headnav.html";
        require "views/stock.html";
        require "views/cat.php";
        require "views/footer.html";
    }

    if ($action == 'contact'){
        require "views/headnav.html";
        require "views/contact.html";
        require "views/footer.html";
    }

?>