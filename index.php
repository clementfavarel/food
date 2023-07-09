<?php
session_start();
// if (!isset($_SESSION['user'])) {
//     header("Location: login.php");
// }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/globals.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Aujourd'hui</h1>
            <div class="icons">
                <i class="fa-solid fa-calendar-day icon"></i>
                <i class="fa-solid fa-barcode icon"></i>
            </div>
        </header>
        <section class="calories">
            <p>Vous pouvez encore manger <b>3 559</b> calories</p>
            <div class="progress">
                <div class="progress-bar" style="width: 50%;"></div>
            </div>
            <div class="infos">
                <p class="green">0 calories absorbées</p>
                <p>Objectif: 3 559</p>
            </div>
        </section>
        <section class="macro">
            <div class="energy">
                <div class="kcal">
                    <i class="fa-solid fa-fire small-icon"></i>
                    <p>0 kcal</p>
                </div>
                <i class="fa-solid fa-caret-up small-icon"></i>
            </div>
            <div class="circles">
                <div class="col">
                    <div class="rate">
                        <h2 class="number pink">0</h2>
                        <p class="pink">Glucides</p>
                    </div>
                    <p class="left pink">444g restants</p>
                </div>
                <div class="col">
                    <div class="rate">
                        <h2 class="number blue">0</h2>
                        <p class="blue">Protéine</p>
                    </div>
                    <p class="left blue">222g restants</p>
                </div>
                <div class="col">
                    <div class="rate">
                        <h2 class="number orange">0</h2>
                        <p class="orange">Graisse</p>
                    </div>
                    <p class="left orange">98g restants</p>
                </div>
            </div>
        </section>
        <section class="comments">
            <div class="comment">
                <div class="header">
                    <h3 class="green">ASTUCE DU JOUR</h3>
                    <i class="fa-regular fa-circle-xmark opacity"></i>
                </div>
                <p><b>Qu'est-ce qu'une calorie ?</b></p>
                <p class="light">
                    Une calorie n'est pas un composant, mais une unité énergétique. En nutrition, les calories sont souvent utilisées pour mesurer la densité énergétique des aliments. Tout les aliments nutritifs vous fournissent de l'énergie et contiennent donc des calories !
                </p>
            </div>
        </section>
        <i class="fa-solid fa-plus plus"></i>
        <nav>
            <div class="col">
                <i class="fa-solid fa-calendar-check active"></i>
                <p class="green">Journal</p>
            </div>
            <div class="col">
                <i class="fa-solid fa-user inactive"></i>
                <p class="gray">Moi</p>
            </div>
        </nav>
    </div>
</body>

</html>