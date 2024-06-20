<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: registration.php');
    exit();
}
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Сайт Інтернет магазину</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=1">Дизайн</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=2">Каталог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=3">Розпродаж</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=4">Про магазин</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=5">Доставка і оплата</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="category.php?category_id=6">Програма лояльності</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron">
    <h1 class="display-4">Вітаємо на нашому сайті</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="#" role="button">Дізнатися більше</a>
</div>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="news">
                <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="01.jpg" alt="">
                                </div>
                                <h3><a href="new.php?new_id=1">Нові товари</a></h3>
                                <p>Тут ви можете придбати нові товари зі знижкою...</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="#" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#">2023-05-10</a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                                            <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="02.jpg" alt="">
                                </div>
                                <h3><a href="new.php?new_id=4">Живопис</a></h3>
                                <p>Акварельні, олійні, акрилові фарби та гуаш</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="#" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#">2023-05-17</a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                                            <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="03.jpg" alt="">
                                </div>
                                <h3><a href="#">Графіка</a></h3>
                                <p>Олівці, маркери, ручки, лайнери, пастель, сухі матеріали, пера та утримувачі, туш та чорнило, ліногравюра</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="#" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#">2024-05-15</a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                                            <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="04.jpg" alt="">
                                </div>
                                <h3><a href="new.php?new_id=8">Дитяча творчість</a></h3>
                                <p>Фарби, пензлі, альбоми, набори для творчості, пластилін та глина</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="#" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#">2024-05-20</a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                                            <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="05.jpg" alt="">
                                </div>
                                <h3><a href="new.php?new_id=9">Допоміжні матеріали</a></h3>
                                <p>Пензі та мастихіни, офорт, макетні ножі та килимки, підрамники та полотна, етюдники</p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="#" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#">2024-05-20</a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
