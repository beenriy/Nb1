<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>NB1MVC - PHP</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header style="background: rgb(2,0,36);
background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(110,26,47,1) 13%, rgba(51,0,255,1) 100%);">
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">NB1 MVC alkalmazás</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside class="col col-md col-lg" style="background: rgb(180,68,58);
background: linear-gradient(90deg, rgba(180,68,58,1) 4%, rgba(253,29,29,1) 18%, rgba(249,31,38,1) 29%, rgba(164,69,252,1) 76%);">
                <p style="background-image:url('/nb1/images/nike.gif');height:64px;"></p>
<p style="background-image:url('/nb1/images/lg.gif');height:64px"></p>
<p style="background-image:url('/nb1/images/ryanair.gif');height:64px;"></p>
<p style="background-image:url('/nb1/images/thomsonfly.gif');height:64px;"></p>
        </aside>
        <section class="col col-md col-lg" style="background: rgb(19,7,209);
background: radial-gradient(circle, rgba(19,7,209,1) 0%, rgba(176,150,102,1) 0%, rgba(233,112,110,1) 19%, rgba(201,148,68,1) 48%, rgba(219,56,45,1) 61%, rgba(245,239,233,1) 88%);">
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer style="background: rgb(19,7,209);
background: radial-gradient(circle, rgba(19,7,209,1) 0%, rgba(176,150,102,1) 0%, rgba(205,129,63,1) 38%, rgba(204,132,64,1) 45%, rgba(201,148,68,1) 51%, rgba(219,56,45,1) 75%);">&copy; Játékosügynökség Bt. <?= date("Y") ?></footer>
    </body>
</html>
