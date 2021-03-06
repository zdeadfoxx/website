<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Game page</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <?php
                    require_once 'php/nav.php';
                ?>
            </div>
        </header>
        <main class="page">
            <div class="container">
                <div class="full__screan">
                    <div class="card">
                        <h1 class="card__title">Заголовок</h1>
                        <div class="card__text ">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime labore quas deleniti eveniet
                            nostrum nisi, aliquam molestiae vero fuga enim odit rem et libero ratione quidem aspernatur,
                            illum quasi fugit.
                        </div>
                    </div>
                    <a href="#" class="arrow">
                        <img src="img/arrow.png" alt="arrow">
                    </a>
                </div>
                <div class="news">
                    <div class="news__body">
                        <h2 class="news__title title">Новости</h2>
                        <div class="news__top">
                            <div class="news__card">
                                <div class="news__body">
                                    <div class="body__img">
                                        <img src="img/news/news-1.png" alt="news-1">
                                    </div>
                                    <p class="body__text text">
                                        Новый трейлер DNF DUEL посвятили проклятому Авангарду
                                        Серьёзный воин, вооружённый демоническим копьём.
                                    </p>
                                </div>
                            </div>
                            <div class="news__card">
                                <div class="news__body">
                                    <div class="body__img">
                                        <img src="img/news/news-2.png" alt="news-2">
                                    </div>
                                    <p class="body__text text">
                                        Inscryption получила режим бесконечного «рогалика» в хижине Лешего
                                    </p>
                                </div>
                            </div>
                            <div class="news__card">
                                <div class="news__body text">
                                    <div class="body__img">
                                        <img src="img/news/news-3.png" alt="news-3">
                                    </div>
                                    <p class="body__text">
                                        В «Человек-паук: Нет пути домой» Спайди использует движение из Spider-Man от
                                        Insomniac
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="news__bottom">
                            <div class="news__card">
                                <div class="news__body">
                                    <div class="body__img">
                                        <img src="img/news/news-4.png" alt="news-4">
                                    </div>
                                    <p class="body__text text">
                                        Перспективный файтинг DNF Duel выйдет и на PC
                                    </p>
                                </div>
                            </div>
                            <div class="news__card">
                                <div class="news__body">
                                    <div class="body__img">
                                        <img src="img/news/news-5.png" alt="news-5">
                                    </div>
                                    <p class="body__text text">
                                        Французский поцелуй из снайперской винтовки — анонс Sniper Elite 5
                                    </p>
                                </div>
                            </div>
                            <div class="news__card">
                                <div class="news__body">
                                    <div class="body__img">
                                        <img src="img/news/news-6.png" alt="news-6">
                                    </div>
                                    <p class="body__text text">
                                        Among Us теперь в виртуальной реальности — анонсирована версия для VR-шлемов
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="voting">
                    <h2 class="voting__title title">На чьей ты стороне?</h2>
                    <div class="voting__body">
                        <div class="voting__card">
                            <div class="voting__img">
                                <img src="img/vote/stalker.png" alt="stalker">
                            </div>
                            <div class="voting__precent stalker">
                                49%
                            </div>
                            <button class="voting__btn">
                                <span>+</span>
                            </button>
                        </div>
                        <div class="voting__card">
                            <div class="voting__img">
                                <img src="img/vote/left_dead.png" alt="left_dead">
                            </div>
                            <div class="voting__precent left__dead">
                                56%
                            </div>
                            <button class="voting__btn">
                                <span>+</span>
                            </button>
                        </div>
                    </div>
                </div>
                <section class="game__ul">
                    <div class="game">
                        <h2 class="game__title title">Самые ожидаемые игры 2022 года для PC</h2>
                        <ul class="game__list">
                            <li class="list__item">S.T.A.L.K.E.R. 2: Heart of Chernobyl. 28 апреля 2022.</li>
                            <li class="list__item">Корсары: Черная метка 2022.</li>
                            <li class="list__item">Dying Light 2 Stay Human. 4 февраля 2022.</li>
                            <li class="list__item">Metro 4. 2022.</li>
                            <li class="list__item">Left 4 Dead 3. 2022.</li>
                            <li class="list__item">Crysis 4. 2022.</li>
                            <li class="list__item">Corsairs Legacy - Pirate Action RPG. 2022.</li>
                        </ul>
                    </div>
                    <div class="play__card">
                        <div class="play__top">
                            <div class="play__body">
                                <div class="play__card">
                                    <h2 class="play__title">Assassin's Creed Valhalla: Dawn of Ragnarok
                                        Анонс дополнения</h2>
                                    <div class="play__img"><img src="img/news/assasin.png" alt="assasin"></div>
                                </div>
                            </div>
                            <div class="play__body">
                                <div class="play__card">
                                    <h2 class="play__title">Tiny Tina’s Wonderlands: The Game Awards 2021
                                        Сюжетный Трейлер</h2>
                                    <div class="play__img"><img src="img/news/tina.png" alt="tina"></div>
                                </div>

                            </div>
                        </div>
                        <div class="play__bottom">
                            <div class="play__body">
                                <div class="play__card">
                                    <h2 class="play__title">FINAL FANTASY VII RE: The Game Awards 2021
                                        АНОНС PC-ВЕРСИИ</h2>
                                    <div class="play__img"><img src="img/news/ff.png" alt="ff"></div>
                                </div>

                            </div>
                            <div class="play__card">
                                <div class="play__body">
                                    <h2 class="play__title">GOD OF WAR (2018)
                                        ТРЕЙЛЕР ОСОБЕННОСТЕЙ PC-ВЕРСИИ</h2>
                                    <div class="play__img"><img src="img/news/good_war.png" alt="good_war"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <article class="article">
                    <h2 class="article__title title">Статьи </h2>
                    <div class="article__body">
                        <div class="article__card">
                            <div class="article__text">
                                Assassin's Creed Valhalla: Dawn of Ragnarok
                                Анонс дополнения
                            </div>
                            <img src="img/articles/" alt="">
                        </div>
                        <div class="article__card">
                            <div class="article__text">

                            </div>
                        </div>
                        <div class="article__card">
                            <div class="article__text">

                            </div>
                        </div>
                        <div class="article__card">
                            <div class="article__text">

                            </div>
                        </div>
                        <div class="article__card">
                            <div class="article__text">

                            </div>
                        </div>
                        <div class="article__card">
                            <div class="article__text">

                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <div class="footer__body">
                    <div class="footer__social">
                        <div class="social__circle">
                            <img src="img/youtube.png" alt="youtube">
                        </div>
                        <div class="social__circle">
                            <img src="img/vk.png" alt="vk">
                        </div>
                    </div>
                    <div class="footer__moon">
                        <img src="img/moon.png" alt="moon">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>