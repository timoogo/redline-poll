<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redline - un nième site de sondage </title>
    <script src="https://kit.fontawesome.com/2a28e9e3fb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <header>
        <a href="index.php" class="logo">
            <img src="assets/img/logo.jpg" alt="logo">
        </a>
        <nav>
            <ul>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
                <li><a href="#">item</a></li>
            </ul>
        </nav>
        <ul class="action">
            <li>
                <a href="#"> Connexion </a>
                <a href="#"> Inscription </a>
            </li>
        </ul>
    </header>
<main>
    <section class="hero">
        <div class="centered">
            <h1>Participez à des <br> sondages en <span class="highlight">temps réel </span>  et comparez vos résultats</h1>
            <a href="#">Regardez un exemple </a>
            <a href="#">
                <i class="fas fa-angle-double-down"></i>
            </a>
        </div>
    </section>
    <section class="display-an-example">
        <!-- <img class="background" src="assets/img/bg.png"></img> -->
        <div class="forground">
           <div class="title">
            <h2>Les céréales, <span class="highlight dark">avant</span> ou <span class="highlight dark">après</span> le <br> lait </h2>
            <h3>Question posée par <a href="#" class=" highlight">timogo</a> il y a <time>  une semaine</time></h3>
           </div>
           <div class="flex-hero">
                <div class="cards">
                    <div class="card response">
                        <span class="vote">3</span>
                        <h4>Avant</h4>
                        <progress value="3" max="5"></progress>
                    </div>
                    <div class="card response">
                        <span class="vote">2</span>
                        <h4>Avant</h4>
                        <progress value="2" max="5"></progress>
                    </div>
                </div>
                <aside>
                    <button>
                        Répondre
                    </button>
                    <h3>Nb. de votes</h3>
                    <span class="number">5</span>
                    <div class="social-links">
                        <a href="#" class="link"><i class="fab fa-github"></i></a>
                        <a href="#" class="link"><i class="fab fa-github"></i></a>
                        <a href="#" class="link"><i class="fab fa-github"></i></a>
                        <a href="#" class="link"><i class="fab fa-github"></i></a>
                    </div>
                </aside>

           </div>
        </div>
    </section>
</main>
</body>

</html>