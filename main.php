<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="header__container">
            <?php
            include('header.php')
            ?>
        </div>
    </header>
    <main>

        <div id="aboutMe" class="aboutMe__container">
            <?php include('aboutMe.php') ?>
        </div>

        <div id="mySkills" class="mySkills__container">
            <?php include('mySkills.php') ?>
        </div>

        <div id="myWorks" class="myWorks__container">
            <?php include('myWorks.php') ?>
        </div>
    </main>
    <footer>
        <div id="contacts" class="footer__container">

            <div class="footer__contacts">
                <?php include('contacts.php') ?>

            </div>
        </div>

    </footer>
</body>

</html>