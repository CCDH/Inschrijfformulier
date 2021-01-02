<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Camiel scriptie</title>

    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="script.js" defer></script>

</head>
<body>
<header>
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="logo">
                <img src="images/logo.png" />
            </div>
            <div class="menu">
                <div class="menu-link">
                    Hoe het werkt
                </div>
                <div class="menu-link">
                    Onze Astronauten
                </div>
                <div class="menu-link">
                    Over ons
                </div>
                <div class="menu-link">
                    Contact
                </div>
                <div class="menu-link menu-link-special">
                    Inschrijven
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <form action="_blank" method="post">
            <div class="form-section show"  id="1">
                <h1>Wat gaaf dat je <span class="primary-color">Astronaut</span><br /> wilt worden</h1>
                <div class="card card-active">
                    <p class="card-number">1.</p>
                    <p class="card-text">De eerste stap is gezet, je meld je aan!</p>
                    <p class="card-icon"></p>
                </div>
                <div class="card">
                    <p class="card-number">2.</p>
                    <p class="card-text">Je komt op gesprek en we kijken samen of je in het team past</p>
                    <p class="card-icon"></p>
                </div>
                <div class="card">
                    <p class="card-number">3.</p>
                    <p class="card-text">Je gaat een persoonlijk leertraject in</p>
                    <p class="card-icon"></p>
                </div>
                <div class="card">
                    <p class="card-number">4.</p>
                    <p class="card-text">Je gaat aan de slag voor verschillende opdrachtgevers</p>
                    <p class="card-icon"></p>
                </div>
                <button type="button" class="next-button" id="1">
                    zet je schrap
                </button>
            </div>
            <div class="form-section hidden" id="2" >
                <p class="section-title"> <b>1.</b> -> Laten we beginnen met je <span class="primary-color">voor en achternaam</span></p>
                <input type="text" placeholder="Voornaam" name="first_name" class="form-text-standard"/>
                <br />
                <input type="text" placeholder="Achternaam" name="last_name" class="form-text-standard"/>
                <br />
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="2">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" class="progress-image" />
                </div>

            </div>
            <div class="form-section hidden" id="3" >
                <p class="section-title"> <b>2.</b> -> Op welk <span class="primary-color">e-mailadres</span> kunnen we je bereiken</p>
                <input type="text" placeholder="Email" name="email" class="form-text-standard"/>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="3">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="3">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container" style="margin-top:100px">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:10%" class="progress-image" />
                    <div class="progress-progress"></div>
                </div>
            </div>
            <div class="form-section hidden" id="4" >
                <p class="section-title"> <b>3.</b> -> We zijn benieuwd wat jou <span class="primary-color">motiveert</span> om astronaut</p>
                <textarea class="form-text-large"></textarea>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="4">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="4">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container" >
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:20%" class="progress-image" />
                    <div class="progress-progress" style="width: 100px"></div>
                </div>
            </div>
            <div class="form-section hidden" id="5" >
                <p class="section-title"> <b>4.</b> -> Ik werk liever</p>
                <div class="form-circle">
                    <img src="images/spaceship.jpg"  />
                </div>
                <div class="form-circle">
                    <img src="images/spaceship.jpg"  />
                </div>
                <div class="form-circle">
                    <img src="images/spaceship.jpg"  />
                </div>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="5">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="5">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:30%" class="progress-image" />
                    <div class="progress-progress" style="width: 130px"></div>
                </div>
            </div>
            <div class="form-section hidden" id="6" >
                <p class="section-title"> <b>5.</b> -> Vul hier je <span class="primary-color">beschikbaarheid</span> in voor het traject </p>
                <div class="clickable-rectangle" name="work_time" value="fulltime">
                    Fulltime
                </div>
                <div class="clickable-rectangle" name="work_time" value="parttime">
                    Parttime
                </div>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="6">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="6">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:40%" class="progress-image" />
                    <div class="progress-progress" style="width: 170px"></div>
                </div>
            </div>
            <div class="form-section hidden" id="7" >
                <p class="section-title"> <b>6.</b> -> De volgende mogelijkheden binnen het traject spreken mij <span class="primary-color">ook</span> aan </p>
                <div class="clickable-rectangle" name="work_area" value="marketing">
                    Marketing
                </div>
                <div class="clickable-rectangle" name="work_area" value="sales">
                    Sales
                </div>
                <br />
                <div class="clickable-rectangle" name="work_area" value="it">
                    IT
                </div>
                <div class="clickable-rectangle" name="work_area" value="marketing2">
                    Marketing
                </div>
                <br />
                <div class="clickable-rectangle" name="work_area" value="design">
                    Design
                </div>
                <div class="clickable-rectangle" name="work_area" value="it2">
                    IT
                </div>
                <br />
                <div class="clickable-rectangle" name="work_area" value="sales2">
                    Sales
                </div>
                <div class="clickable-rectangle" name="work_area" value="design2">
                    Design
                </div>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="7">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="7">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:50%" class="progress-image" />
                    <div class="progress-progress" style="width: 210px"></div>
                </div>
            </div>
            <div class="form-section hidden" id="8" >
                <p class="section-title"> <b>7.</b> -> Heb je al <span class="primary-color">te gekke dingen</span> gemaakt die je ons kunt laten zien? </p>
                <input type="text" placeholder="URL" name="url" class="form-text-standard"/>
                <br />
                <input type="file" placeholder="Achternaam" name="last_name" class="form-text-standard"/>
                <br />
                <button type="button" class="back-button" value="save" style="text-transform: initial !important" id="8">
                    Terug
                </button>
                <button type="button" class="next-button primary-color-bg" value="save" style="text-transform: initial !important" id="8">
                    Verder
                </button>
                <br />
                <br />
                <div class="progress-container">
                    <div class="progress-bar"></div>
                    <img src="images/spaceship.jpg" style="left:60%" class="progress-image" />
                    <div class="progress-progress" style="width: 250px"></div>
                </div>
            </div>
        </form>
    </div>

</main>
<footer>

</footer>

</body>
</html>