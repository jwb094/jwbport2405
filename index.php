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
    <main>
        <?php
        $colors = ["digital-green", "yellow-light", "blue-light", "turquoise-light", "green-light", "orange-light", "lilac-light"];
        $fName = "Lorem";
        $LName = "Domino";
        $ContactDetails = ["Email Address" => "JohnDoe@gmail.com", "Phone" => "09873426093"];
        $Socials = ["Twitter" => "@johnDoe", "Fb" => "JDs909", "IG" => "@JDs909"];
        $bio = "Bio 1 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!";
        $bio2 = "Bio 2 - Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!";

        ?>

        <section data-component-home class=" bg-warm-gray-300" id="">
            <div class="l-container">
                <div class="home-grid | py-80">
                    <div class="first_last_name ">
                        <p class="bold text-md | ">
                            <?= $fName ?> 
                            <?= $LName ?>
                        </p>
                    </div>
                    <div class="bio_part1 ">
                        <p class="">
                            <?= $bio; ?>
                        </p>
                    </div>
                    <div class="img ">
                        <img class="w-100p h-100p object-cover" src="https://images.unsplash.com/photo-1624561172888-ac93c696e10c?q=80&w=2189&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>
                    <div class="first_last_name_cta |  md.justify-content-center md.flex md.flex-col md.align-items-center">
                        <div class="md.w-100p ">
                            <h1 class="bold | text-8xl">
                                <?= $fName ?> <?= $LName ?>
                            </h1>
                            <a href="#portfolio1" class="px-16 py-24 | flex flex-row justify-content-between w-6-12 md.w-3-12 | color-white bg-black radius-xl">
                                <p>Click Here</p>
                                <span>icon</span>
                            </a>
                        </div>
                    </div>
                    <div class="contact_details ">
                        <div class="flex flex-col justify-content-end mt-auto h-100p ">
                            <ul class="flex flex-row justify-content-between | md.mx-12">
                                <?php
                                foreach ($ContactDetails as $key => $link) {
                                    echo "<li>$link</li>";
                                }
                                ?>
    
                            </ul>
                            <ul class="flex flex-row justify-content-between mt-24 md.mx-12">
                                <?php
                                foreach ($Socials as $skey => $slink) {
                                    echo "<li> $slink </li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="bio_part2 | flex md.align-items-end">
                        <p class="">
                            <?= $bio2; ?>
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <?php
        $portfolio_project_1_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
        <section data-component-portfolio-1 class="bg-black color-white py-96" id="portfolio1">
            <div class="l-container">
                <div class="l-row">
                    <div class="col-xs-12 | py-48">
                        <h3 class="">
                            <?= $fName ?> >
                            <?= $LName ?>
                        </h3>
                    </div>
                </div>
                <div class="portfolio-1-grid">
                    <div class="bio_Desc pb-32 md.pr-32">
                        <ul class=" mt-12 | flex flex-row gap-12 text-left">
                            <li class="">April ,2023</li>
                            <li class="">X,X</li>
                        </ul>
                        <h3 class="my-12">portfolio_project_1</h3>
                        <p class="mb-32">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A aliquam architecto
                            incidunt maiores voluptas natus voluptatibus consequuntur, ipsam rem quam voluptate libero
                            beatae expedita illum in culpa deleniti fuga earum!</p>
                        <a href="" class="border-1 border-black border-solid px-24 py-16 bg-warm-gray-100 color-black radius-full">View project here</a>
                    </div>
                    <div class="portfolio_img1">
                        <img class="w-100p h-100p md.object-cover" src="https://placeholder.pics/svg/400x375" alt="">
                    </div>
                    <div class="portfolio_img2">
                        <img class="w-100p h-100p md.object-cover" src="https://placeholder.pics/svg/400x750" alt="">
                    </div>
                    <div class="portfolio_img3">
                        <img class="w-100p h-100p md.object-cover" src="https://placeholder.pics/svg/400x750" alt="">
                    </div>
                </div>
            </div>
        </section>
        <?php
        $portfolio_project_2_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
        <section data-component-portfolio-2 class="bg-black color-white py-96" id="portfolio2">
            <div class="l-container">
                <div class="portfolio-2-grid">
                    <div class="portfolio-2-img-1">
                        <img class="w-100p h-100p md.object-cover" src="https://placeholder.pics/svg/927x320" alt="">
                    </div>
                    <div class="portfolio-2-bio md.pl-32 md.pb-32">
                        <ul class=" mt-12 | flex flex-row gap-12 text-left">
                            <li class="mt-12 ">April ,2023</li>
                            <li class="mt-12 ">X,X</li>
                        </ul>
                        <h3 class="my-16">portfolio_project_2</h3>
                        <p class="mb-36">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A aliquam architecto
                            incidunt maiores voluptas natus voluptatibus consequuntur, ipsam rem quam voluptate libero
                            beatae expedita illum in culpa deleniti fuga earum!</p>
                        <a href="" class="border-1 border-black border-solid radius-xl px-24 py-16 bg-warm-gray-100 color-black radius-full">View project here</a>
                    </div>
                    <div class="portfolio-2-img-2"> <img class="w-100p h-100p md.object-cover"
                            src="https://placeholder.pics/svg/453x359" alt=""></div>
                    <div class="portfolio-2-img-3"> <img class="w-100p h-100p md.object-cover"
                            src="https://placeholder.pics/svg/453x359" alt=""></div>
                    <div class="portfolio-2-img-4"> <img class="w-100p h-100p md.object-cover"
                            src="https://placeholder.pics/svg/453x359" alt=""></div>
                </div>
            </div>
        </section>
        <?php
        $portfolio_project_3_bio = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla vero harum minima atque a corporis et explicabo fugit ratione, ex unde quasi laborum molestiae, optio ipsa ipsam inventore voluptas veritatis!"
            ?>
        <section data-component-portfolio-3 class="bg-black color-white py-96" id=portfolio3">
        <div class="l-container">
            <div class="portfolio-3-grid">
                <div class="portfolio-3-bio">
                <ul class=" mt-12 | flex flex-row gap-12 text-left">
                            <li class="mt-12 ">April ,2023</li>
                            <li class="mt-12 ">X,X</li>
                        </ul>
                        <h3 class="my-16">portfolio_project_2</h3>
                        <p class="mb-36"><?=$portfolio_project_3_bio?></p>
                        <a href="" class="border-1 border-black border-solid radius-xl px-24 py-16 bg-warm-gray-100 color-black radius-full">View project here</a>
                </div>
                <div class="portfolio-3-img-1"> <img class="w-100p h-100p md.object-cover"
                            src="https://placeholder.pics/svg/435x301" alt="">
                </div>
                <div class="portfolio-3-img-2"> <img class="w-100p h-100p md.object-cover"
                            src="https://placeholder.pics/svg/927x634" alt="">
                </div>

            </div>
            </div>
        </section>

    </main>
    <!-- Add your site or application content here -->
    <footer class="bg-black color-white">
        <div class="l-container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <ul class="flex flex-row justify-content-between |  border-t-1 border-white border-solid | py-24 md.py-56">
                        <li>
                            <?= $fName ?>
                            <?= $LName ?>
                        </li>
                        <li>LOGO</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="public/dist/js/app.js"></script>
</body>

</html>