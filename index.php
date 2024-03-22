    <?php ?>
    <!doctype html>
    <html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="public/dist/css/projectstyle.css">
        <meta name="description" content="">

        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:image:alt" content="">

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/icon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="manifest" href="site.webmanifest">
        <meta name="theme-color" content="#fafafa">
    </head>

    <body>
        <main class="l-container">
            <?php
            $colors = ["digital-green", "yellow-light", "blue-light", "turquoise-light", "green-light", "orange-light", "lilac-light"];
            $fName = "Lorem";
            $LName = "Domino";
            $ContactDetails = "Email Address::JohnDoe@gmail.com/nPhone:09873426093\n";
            $Socials = ["Twitter" => "", "Fb" => "", "IG" => ""];
            $bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
            <section data-component-name="" class="">
                <div class="l-container">
                    <div class="row">
                        <ul>
                            <?php
                            // Loop through colors and create an option for each color
                            foreach ($colors as $color) {
                                echo "<li> $color</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section data-component-home class="" id="">
                <div class="l-container">
                    <div class="home-grid">
                        <div class="first_last_name">
                            <p class=""></p>
                        </div>
                        <div class="bio_part1">
                            <p class=""></p>
                        </div>
                        <div class="img"><img class="" src="" alt=""></div>
                        <div class="first_last_name_cta">
                            <h1 class=""></h1>
                            <button class=""></button>
                        </div>
                        <div class="contact_details">
                            <ul>
                                <li></li>
                            </ul>
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                        <div class="bio_part2">
                            <p class=""></p>
                        </div>
                    </div>

                </div>
            </section>
            <?php
            $portfolio_project_1_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
            <section data-component-portfolio-1 class="" id="">
                <div class="l-container">
                    <div class="l-row">
                        <div class="col-xs-12">
                            <h3><?= $fName ?> ><?= $lName ?></h3>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md.grid-cols-3">
                        <div class="bio_Desc">
                            <ul class="">
                                <li class=""></li>
                                <li class=""></li>
                            </ul>
                            <h3 class=""></h3>
                            <p class=""></p>
                            <a href="" class=""></a>
                        </div>
                        <div class="img1">
                            <img src="" alt="">
                        </div>
                        <div class="img2">
                            <img src="" alt="">
                        </div>
                        <div class="img3">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <?php
            $portfolio_project_2_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
            <section data-component-portfolio-2 class="" id="">
                <div class="portfolio-2-grid">
                    <div class="img"><img src="" alt=""></div>
                    <div class="bio_Desc">
                        <ul class="">
                            <li class=""></li>
                            <li class=""></li>
                        </ul>
                        <h3 class=""></h3>
                        <p class=""></p>
                        <a href="" class=""></a>
                    </div>
                    <div class="img2"><img src="" alt=""></div>
                    <div class="img3"><img src="" alt=""></div>
                    <div class="img4"><img src="" alt=""></div>
                </div>
            </section>
            <?php
            $portfolio_project_3_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
            <section data-component-portfolio-3 class="" id="">
                <div class="portfolio-3-grid">
                    <div class="img1"><img src="" alt=""></div>
                    <div class="bio_Desc">
                        <ul class="">
                            <li class=""></li>
                            <li class=""></li>
                        </ul>
                        <h3 class=""></h3>
                        <p class=""></p>
                        <a href="" class=""></a>
                    </div>
                    <div class="img2"><img src="" alt=""></div>
                </div>
            </section>

        </main>
        <!-- Add your site or application content here -->
        <footer class>
            <div class="l-container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <ul class="flex flex-row justify-content-between">
                            <li> <?= $fName ?> <?= $LName ?> </li>
                            <li>LOGO</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="public/dist/js/app.js"></script>
    </body>

    </html>