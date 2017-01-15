<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 13.01.17
 * Time: 20:25
 */
session_start();
$logout=$_GET['logout'];
if ($logout==true){
    session_destroy();
    header("Location: /");
}
?>
<html lang="de">
<head>
    <title>CHAT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Chat.">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="material.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script  src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
    <style>

        <!-- Platz für CSS für jquery UI -->
    </style>
    <script>
        <!-- Captcha -->

         function CaptchaCallback(){
            $('.g-recaptcha').each(function(index, el) {
                grecaptcha.render(el, {'sitekey' : '6LdO4REUAAAAAJ5tUklyThfRMmEN8MvCA8UlDsnQ'});
            });
        };
        function onSubmit (token) {
            document.getElementById("a").submit();
        }
        function onSubmitb (token) {
            document.getElementById("b").submit();
        }
        function onSubmitc (token) {
            document.getElementById("c").submit();
        }

        <!-- Platz für js für jquery UI -->
    </script>

</head>
<body class="mdl-base" onLoad="CaptchaCallback()">
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
    <!-- Header -->
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">Chat - Login</span>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Login</a>
            <a href="#fixed-tab-2" class="mdl-layout__tab">Registrieren</a>
            <a href="#fixed-tab-3" class="mdl-layout__tab">Fehler melden</a>
        </div>
    </header>
  <!--  <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Chat - Login</span>
    </div> -->
    <main class="mdl-layout__content">
<!-- Haupcontent -->
        <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
            <div class="page-content">
                <!-- Login -->
                <h3 style="text-align: center" >Login</h3>
                <div class="mdl-grid">

                    <div class="mdl-layout-spacer"></div>

                          <form id="a" action="login.php" method="post">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" id="Name" name="Name">
                                    <label class="mdl-textfield__label" for="Name">Name...</label>
                                </div>

                    <div class="mdl-layout-spacer"></div>


                    <div class="mdl-layout-spacer"></div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="pw" name="pw">
                            <label class="mdl-textfield__label" for="pw">Passwort...</label>
                        </div>
                              <div class="mdl-layout-spacer"></div>

                              <div class="mdl-layout-spacer"></div>
                              <div class="mdl-grid">
                                  <div class="mdl-layout-spacer"></div>
                <button class="g-recaptcha mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-sitekey="6LdO4REUAAAAAJ5tUklyThfRMmEN8MvCA8UlDsnQ"
                          data-callback='onSubmit' >
                                  Login
                              </button>
                                   <div class="mdl-layout-spacer"></div>
                              </div>
                          </form>

                    <div class="mdl-layout-spacer"></div>




                </div>


            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-2">
            <div class="page-content">
                <!-- Registrierung -->
                <h3 style="text-align: center" >Registrieren</h3>
                <div class="mdl-grid">

                    <div class="mdl-layout-spacer"></div>

                    <form id="b" action="register.php" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="Name" name="Name">
                            <label class="mdl-textfield__label" for="Name">Name...</label>
                        </div>

                        <div class="mdl-layout-spacer"></div>


                        <div class="mdl-layout-spacer"></div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="password" id="pw" name="pw">
                            <label class="mdl-textfield__label" for="pw">Passwort...</label>
                        </div>
                        <div class="mdl-layout-spacer"></div>

                        <div class="mdl-layout-spacer"></div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="mail" name="mail">
                            <label class="mdl-textfield__label" for="mail">E-Mail...</label>
                        </div>
                        <div class="mdl-layout-spacer"></div>

                        <div class="mdl-layout-spacer"></div>

                        <div class="mdl-grid">
                            <div class="mdl-layout-spacer"></div>
                            <button class=" mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-sitekey="6LdO4REUAAAAAJ5tUklyThfRMmEN8MvCA8UlDsnQ"
                                    type="submit" >
                                Registrieren
                            </button>
                            <div class="mdl-layout-spacer"></div>
                        </div>
                    </form>

                    <div class="mdl-layout-spacer"></div>




                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="fixed-tab-3">
            <div class="page-content">
                <!-- Fehler melden -->
                <div class="mdl-grid">
                    <div class="mdl-layout-spacer"></div>
                    <div >

                    </div>


                    <div class="mdl-layout-spacer"></div>

                </div>

            </div>
            </div>
        </section>

 <!-- Footer -->

    </main>
</div>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
