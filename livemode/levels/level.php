<?php 
include '../server/DB.class.php';

$level = $_GET['level'];

$db = new DB('localhost', 'bitgame', 'root', '');

$leveldata = $db->connect()->getLevelData($level);

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000563">

    <title>Bit Academy | Prototyping tech innovators</title>

    <link rel="shortcut icon" href="../favicon.ico" sizes="16x16" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" sizes="16x16" type="image/x-icon">

    <script src="../js/fontawesome.js"></script>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-157814288-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-157814288-1', { 'anonymize_ip': true });
    </script>

    <!-- Hotjar Tracking Code for www.bit-academy.nl -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = { hjid: 1680339, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <div class="looking-for-bit">
        <p>Looking for Bit? <br /><img src="../images/arrow.png" alt=""></p>

        <a class="curl" href="https://www.wearebit.com">&nbsp;</a>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="header__inner">
                        <a href="../index.html" class="header__logo"><img src="../images/logo.svg" alt="Logo"
                                class="header__logo"></a>
                        <button class="header__btn">
                            <span class="header__btn-line"></span>
                            <span class="header__btn-line"></span>
                            <span class="header__btn-line"></span>
                        </button>
                        <nav class="header__nav">
                            <button class="header__btn">
                                <span class="header__btn-line"></span>
                                <span class="header__btn-line"></span>
                                <span class="header__btn-line"></span>
                            </button>
                            <ul>
                                <li><a href="../index.html">Home</a></li>
                                <li><a href="../manifest.html">Manifest</a></li>
                                <li>
                                    <span>Programma <i class="fas fa-angle-down"></i></span>
                                    <ul>
                                        <li><a href="../programma.html">Studieprogramma</a></li>
                                        <li>
                                            <a href="https://www.notion.so/bitacademy/Bit-Academy-Guide-071d67a67c6740c7af3a1f168f1f2418"
                                                target="_blank" rel="nofollow">Studiegids</a></li>
                                    </ul>
                                </li>
                                <li><a href="../events.html">Events</a></li>
                                <li>
                                    <span>Bedrijven <i class="fas fa-angle-down"></i></span>
                                    <ul>
                                        <li><a href="../tech-talks.html">Tech Talks</a></li>
                                    </ul>
                                </li>

                                <li><a href="../contact.html">Contact</a></li>
                                <li><a href="../bit-enrollment.html">Bit-enrollment</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container" style="max-width:1500px">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <section class="programme">
                    <div class="row mb-5 pb-5">
                        <div class="col-12 col-md-10 col-lg-9 col-xl-8" style="max-width:50%">
                            <h2 class="mb-5 mb-md-4 u-hyphens"><?php echo $leveldata[0]->titel;?></h2>
                            <p>
                                <?php echo $leveldata[0]->opdracht; ?>
                            </p>
                            <br>
                            <code><?php echo $leveldata[0]->code?></code>
                            <br>
                            <br>
                            <form action="../server/makefile.php" method="post">
                            <input type="hidden" name='level' value=<?php echo $level?>>
                                <div>
                                    <textarea class="input px-md-3 w-md-100 " name="html" type="text" rows="4"
                                        style=" border-radius:2rem; resize: none;"></textarea>
                                </div>
                                <p>
                                    <input id="btn" type="submit" class="btn px-md-0 w-md-100" value="check it">
                                    <a href="level.php?level=<?php echo $level + 1;?>" rel="nofollow" class="btn px-md-0 w-md-100"><span>volgende-></span></a>
                                </p>
                            </form>
                        </div>
                        <div>
                            <iframe src="../demo/demo1.html" frameborder="1" height="550px" width="630" class="deiframe"
                                style=" border-radius:1rem;"></iframe>
                        </div>
                    </div>
                </section>
            </div>
        </div>>
    </main>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <div class="footer__inner">
                        <a href="../index.html" class="footer__logo"><img src="../images/logo.svg" alt="Logo"
                                class="footer__logo-img"></a>
                        <div class="footer__info">
                            <div class="footer__info-group">
                                <h4 class="mb-3">Adres</h4>
                                <p>Amsterdam
                                    <br>Science Park 608A
                                    <br>1098XH, Amsterdam</p>
                            </div>
                            <div class="footer__info-group">
                                <h4 class="mb-3">Contact</h4>
                                <p><a href="mailto:info@bit-academy.nl">info@bit-academy.nl</a>
                                    <br><a href="tel:0202470347">020 247 0347</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/app.js"></script>

</body>

</html>