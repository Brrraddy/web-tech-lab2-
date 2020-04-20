<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brrraddy</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!--Создание массива меню и получение id страницы-->
<header>
    <div class="title"></div>
    <?php
    $navs = array('Products','Why Brrraddy?','Solutions','Resources','Company','Contact me');
    if (isset($_GET['id']))
        $id = $_GET['id'];
    else
        $id = 0;
    ?>
    <nav>
        <ul>
            <?php
            foreach($navs as $key => $nav):
            ?>
            <li> <?php if($key <> $id) {?>
                <a href="lab2.php?id=<?=$key?>"><?=$nav?></a>
                <?php } else { ?>
                <a class="active" href="#"><?=$nav?></a>
                <?php } ?>
            </li>
            <?php endforeach;?>
        </ul>
    </nav>
</header>
</body>
</html>
