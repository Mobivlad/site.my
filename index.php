<?php 
    $dbase = new mysqli('localhost','root','','site.my');
    $q=mysqli_query($dbase,"SELECT * FROM information ORDER BY id DESC;");
    $num_rows=0;
    $goods = mysqli_fetch_all($q,MYSQLI_ASSOC);
    $main=$goods[$num_rows];

?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Сайт особистих новин</title>
</head>
<body>
    <header>
        <div id="headerInside">
            <a href="index.php">
                <div>
                    <div id="logo"></div>
                    <div id="companyName">Site.MY</div>
                </div>
            </a>
            <div id="navWrap">
                <a href="/">
                    Головна
                </a>
                <a href="index.php?page=news">
                    Новини
                </a>
                <a href="index.php?page=addnews">
                    Додати новину
                </a>
            </div>
        </div>
    </header>

    <div id="content">
        <?php
        $page = $_GET['page'];

        if (!isset($page)) {
            require('pages/main.php');
        } elseif ($page == 'news') {
            require('pages/news.php');
        } elseif ($page == 'new') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('pages/new.php');
        } elseif ($page == 'addnews'){
            require('pages/addnews.php');
        }
        ?>

    </div>

    <footer>
        <div id="footerInside">

            <div id="contacts">
                <div class="contactWrap">
                    <img src="images/envelope.svg" class="contactIcon">
                    name@hosh.host
                </div>
                <div class="contactWrap">
                    <img src="images/phone-call.svg" class="contactIcon">
                    097 000 00 00
                </div>
                <div class="contactWrap">
                    <img src="images/placeholder.svg" class="contactIcon">
                    м.Дрогобич, вул.І.Франка, 23
                </div>
            </div>

            <div id="footerNav">
                <a href="/">Головна</a>
                <a href="index.php?page=news">Новини</a>
                <a href="index.php?page=addnews">Додати новину</a>
            </div>

            <div id="social">
                <a href="https://vk.com/n_n_n_m_h_v">
                 <img class="socialItem" src="images/vk-social-logotype.svg">
             </a>
             <a href="#">
                 <img class="socialItem" src="images/google-plus-social-logotype.svg">
             </a>
             <a href="#">
                 <img class="socialItem" src="images/facebook-logo.svg">
             </a>
         </div>
     </div>
 </footer>

</body>
</html>