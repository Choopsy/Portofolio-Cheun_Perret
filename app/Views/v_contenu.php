<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    
</head>

<body>
<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li><button class="boutton-menu" onclick="ouvrir()"><i class="bi bi-list"></i></button></li>
            <li class="prenom">
                <a href="#presentation"><h3>Cheun Perret</h3></a></li>
            </li>

            <li class="menu-item hidden"><a href="#experiences">Expériences</a></li>
            <li class="menu-item hidden"><a href="#competences">Compétences</a></li>
            <li class="menu-item hidden"><a href="#contact">Contact</a></li>
            <li class="menu-item hidden"><a href="#divers">Divers</a></li>
        </ul>
    </div>
    <div id="contenu">
        <!-- Barre de menu -->
        <div class="barre" id="barreNavig">
            <div style width="100%">
                 <!-- <li><button onclick="fermer()"class="barre-element">close</button></li> -->
                <li><a href="#" class="barre-element bouton">Présentation</a></li>
                <li><a href="#experiences" class="barre-element bouton">Expériences</a></li>
                <li><a href="#competences" class="barre-element bouton">Compétences</a></li>
                <li><a href="#contact" class="barre-element bouton">Contact</a></li>
                <li><a href="#divers" class="barre-element bouton">Divers</a></li>
            </div>   
    </div>
</header>

<!-- CONTENT -->

<!-- PRESENTATION -->
<div classe="Presentation" id="presentation">
    <section>

        <h1>Présentation</h1>

        <div class="row" style="width: 100%">
            <div id='col1'>
                <img src='/assets/img/PERRETCheun.jpg' alt="Photo de profil">
            </div>
            <div id='bulle'>
                <!-- TODOO / ajouter une icone de discussion --> 
            </div>
            <div id='col2'>
                <p>Bonjour,</p>
                <p>Je m'appelle Cheun Perret et j'ai 20ans. Je suis actuellement étudiant en deuxième année de BTS SIO (Service informatique aux organsiations) option SLAM. Je suis cette formation au lycée Saint-Louis de Châteaulin.</p>
            </div>
        </div>
    </section>
</div>

<!-- EXPERIENCE -->
<div class="parti" id="experiences">
    <section>

        <h1>Expériences Professionnelles et Scolaires</h1>

        <h2>Stage en entreprise</h2>
        <hr>

        <h4>Guillemot Corporation - Carentoir (56) | 30 mai - 24 juin</h4>
        <h5 style="margin-top: 18px">Contexte</h5>

        <table>
            <tbody>
                <li>Migration de l'application intranet.</li>
                <li>Passage d'une organisation d'écriture procédurale à la mise en place et l'utilisation du modèle MVC de PHP</li>
                <li>Réécriture de la page de conversion de monnaie et ajout de fonctionnalité</li>
                <li>Développement sous le frameWork php CodeIgniter 4</li>
                <li>Utilisation de la bibliothèque JQUERY de JavaScript</li>
            </tbody>
        </table>

        <br>

        <h2>Formation Scolaire</h2>
        <hr>

        <H4>BTS SIO - Lycée Saint-Louis - Châteaulin (29) | 2021 - 2023</H4>
        
        <br>

        <table>
            <tbody>
                <li>Services informatiques aux organisations</li>
                <li>Option choisie au cours de la formation : <b>SLAM</b></li>
            </tbody>
        </table>

    </section>
</div>

<!-- COMPETENCES -->
<div classe="Presentation" id="competences">
    <section>
        <h1>Compétences</h1>
                <h2 style="margin-top: -16px">Langages</h2>
                <hr>
                <table>
                    <tbody>
                        <div class="tablang">
                            <li>HTML - CSS
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                                </div>
                            </li>
                            <li>PHP
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                </div>
                            </li>
                            <li>JAVA
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                                </div>
                            </li>
                            <li>PYTHON
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                </div>
                            </li>
                            <li>C#
                                <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
                                </div>
                            </li>
                        </div>     
                    </tbody>
                </table>
                <br>
                <h2>Outils</h2>
                <hr>
                <table>
                    <tbody>
                        <li>Visual Studio Code</li>
                        <li>Eclipse</li>
                        <li>PowerAMC</li>
                        <li>FilleZilla</li>
                    </tbody>
                </table>
    </section>
</div>

<!-- CONTACT -->
<div class="parti" id="contact">
    <section>

        <h1>Contact</h1>

        <div class="row" style="width: 100%">
            <div style="width: 70%">
            <table>
                <tbody>
                    <tr>
                        <td><i class="bi bi-envelope bi-big"></i></td>
                        <td class="esp">-</td>
                        <td>cheunperret56@gmail.com</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-phone bi-big"></i></td>
                        <td class="esp">-</td>
                        <td>06 45 48 01 18</td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-linkedin bi-big"></i></td>
                        <td class="esp">-</td>
                        <td><a href="https://www.linkedin.com/in/cheun-perret-4bb8861b9/" target="_blank">www.Linkedin.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-instagram bi-big"></i></td>
                        <td class="esp">-</td>
                        <td><a href="https://www.instagram.com/cheun_perret/" target="_blank">www.Instagram.com</a></td>
                    </tr>
                    <tr>
                        <td><i class="bi bi-file-earmark-pdf bi-big"></i></td>
                        <td class="esp">-</td>
                        <td><a href="/assets/img/PERRET CHEUN.pdf" target="_blank">Mon CV</a></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

    </section>
</div>

<!-- DIVERS -->
<div classe="Presentation" id="divers">
    <section>

        <h1>Un peu plus sur moi</h1>

        <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

        <p>If you would like to edit this page you will find it located at:</p>

        <pre><code>app/Views/welcome_message.php</code></pre>

        <p>The corresponding controller for this page can be found at:</p>

        <pre><code>app/Controllers/Home.php</code></pre>

    </section>
</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>Page rendered in {elapsed_time} seconds</p>

        <p>Environment: <?= ENVIRONMENT ?></p>

    </div>
</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>
<script type="text/javascript" language="javascript">
    window.addEventListener('load', function () {
        document.getElementById("barreNavig").style.display = "block";
    });
    function ouvrir() {
        document.getElementById("barreNavig").style.display = "block";
    }

    function fermer() {
        document.getElementById("barreNavig").style.display = "none";
    }
</script>
</body>
</html>