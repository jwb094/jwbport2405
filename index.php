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
        <nav class="l-container"> 
            <div class="row">
                <div class="col-xs-12">LOGO</div>
                <div class="col-xs-12">
                    <ul class="flex flex-col md.flex-row">
                        <li>    </li>
                        <li>    </li>
                        <li>    </li>
                        <li>    </li>
                        <li>    </li>
                    </ul>
                </div>
                <div class="col-xs-12">ICONS</div>
            </div>
        </nav>
        <main>
            <?php
            // Array of colors
            $colors = ["digital-green", "yellow-light", "blue-light", "turquoise-light", "green-light", "orange-light", "lilac-light"];
        ?>
            <section data-component-name="" class="">
            <div class="l-container">
                <div class="row">

                    <ul>

        <?php
                // Loop through colors and create an option for each color
                foreach ($colors as $color) {
                    echo "<li> <?=$color</li>";
                }
            ?>
            </ul>
                </div>
            </div>
            </section>
        <section data-component-name class="" id="">
                <div class="l-container">
                <div class="row">
                    <div class="col-xs-12 col-md-6"></div>
                    <div class="col-xs-12 col-md-6"></div>
                </div>
                </div>
            </section>
            <section data-component-name class="" id="">
            </section>
            <section data-component-name class="" id="">
            </section>
            <section data-component-name class="" id="">
            </section>
            <section data-component-name class="" id="">
            </section>
            <section data-component-name class="">
            </section>
        </main>
        <!-- Add your site or application content here -->
        <p>Welcome to  world! This is HTML5 Boilerplate.</p>
        <script src="public/dist/js/app.js"></script>

            <?php
            // Array of footer links
            $footerLinks = ["Home", "Work", "Contact", "People",];
            $socialLinks = ["Fb", "Ln", "X", "Insta"];
        ?>
        <footer class>
            <div class="l-container">
        <div class="row">
        <div>LOGO</div>
            <div>
                    <ul>

        <?php
                // Loop through colors and create an option for each color
                foreach ($footerLinks as $link) {
                    echo "<li class=""> <?=$link</li>";
                }
            ?>
            </ul>
            </div>
            <div>
                        <ul>

        <?php
                // Loop through colors and create an option for each color
                foreach ($socialLinks as $slink) {
                    echo "<li class=""> <?=$slink</li>";
                }
            ?>
            </ul>
            </div>
                </div>
            </div>
        </footer>
        </body>

        </html>
