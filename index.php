<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/styleHomePage.css">
</head>

<body>
    <!-- <?php //require_once './db.php';
            //         
            ?> -->
    <audio autoplay loop>
        <source src="./Guerre-Amb2.mp3" type="audio/mp3">
        <source src="" type="audio/AAC">
        Votre navigateur ne supporte pas l'élément audio.
    </audio>
    <!-- <button onclick="toggleAudio()">Lecture/Pause</button> -->


    <main>
        <div class="bubble-down">
            <h1>bienvenue mon ami</h1>
            <p>Alors comme ça tu es égaré ici ? tu reviens peut-être après quelques mésaventures ? quoique deux choix s'offrent à toi t'inscrire ou te connecter .</p>

            <p> Bienvenue mon ami... Bienvenue en enfer...hi...hi sur la route 180</p>

        </div>

        <section id="formulaires">

            <section id="inscription">

                <form method="POST" action="index_post.php">
                    <fieldset>
                        <legend>inscription</legend>
                        <label for="pseudo"> Votre pseudo : </label>
                        <input type="text" name="pseudo" id="pseudo" required />
                        <br />
                        <label for="identifiant"> Votre identifiant : </label>
                        <input type="text" name="identifiant" id="identifiant" required />
                        <br />
                        <label for="password">Mot de passe : </label>
                        <input type="password" name="password" id="password" required />
                        <br />
                        <label for="mail"> Votre email : </label>
                        <input type="text" name="mail" id="mail" required />
                        <br />
                        <input type="submit" value="envoyer" />
                    </fieldset>
                </form>



            </section>










            <section id="connexion">
                <form action="index_post.php" method="POST">
                    <fieldset>
                        <legend>Connexion</legend>

                        <label for="identifiant">Identifiant : </label>
                        <input type="text" name="identifiant" id="identifiant" required>


                        <label for="password">Mot de passe : </label>
                        <input type="password" name="password" id="password" required>

                        <input type="submit" name="submit" value="gigot mon agneau ">

                    </fieldset>
                </form>

            </section>
        </section>

    </main>
</body>

</html>