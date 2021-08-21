<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Aug 18 2021 14:28:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6116023128fce30c7a95ffa9" data-wf-site="60f964ed749977522e5d9082">
<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <meta content="Profile" property="og:title">
  <meta content="Profile" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="../css/normalize.css" rel="stylesheet" type="text/css">
  <link href="../css/webflow.css" rel="stylesheet" type="text/css">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <link href="../css/plusproche.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Roboto:300,regular,500,700,900","Inder:regular","Inter:300,regular,500,600,700,800,900","Source Sans Pro:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="../images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body body-connect">
    @include('includes.nav')

  <section class="section pricing-hero section-offers section-publish wf-section">
    <h1 class="heading-1 _850-width centre">Mon profil</h1>
    <div class="container-10 w-container">
      <div class="div-block-103"><img src="../images/avatar-1_1avatar-1.png" loading="lazy" width="72" alt="" class="avatar avatar-readonly">
        <div class="text-block-16">Ben Horo</div>
        <div class="text-block-16">Email</div>
        <div class="text-block-16">Numéro de téléphone</div>
        <a href="#">Fichier d&#x27;identité</a>
      </div>
    </div>
    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
      <div class="w-tab-menu">
        <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link">
          <div>Modifier les informations personnelles</div>
        </a>
        <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
          <div>Modifier l&#x27;email</div>
        </a>
        <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link w--current">
          <div>Modifier le mot de passe</div>
        </a>
      </div>
      <div class="tabs-content w-tab-content">
        <div data-w-tab="Tab 1" class="w-tab-pane">
          <div class="w-container">
            <div class="w-form">
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                <div class="form-field-wrapper">
                  <div id="w-node-_7d467feb-c595-04e0-e868-4a5ce0339499-7a95ffa9"><label for="Nom-6" id="contact-email">Nom *</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-7a95ffa9"><label for="Prenom" id="contact-phone">Prénoms *</label><input type="text" class="w-input" maxlength="256" name="Prenom" data-name="Prenom" id="Prenom"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-7a95ffa9"><label for="Phone" id="contact-phone">Numéro de téléphone</label><input type="tel" class="w-input" maxlength="256" name="Phone" data-name="Phone" id="Phone"></div>
                  <div id="w-node-_104113db-1d81-c710-46e1-6f9384500a2c-7a95ffa9" class="div-block-110"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-7a95ffa9"><label for="Nom" id="contact-email">Image</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
                  <div id="w-node-_02839625-6532-eabc-9515-0bed256cd872-7a95ffa9"><label for="Phone-3" id="contact-phone">Fichier d&#x27;identité</label><input type="tel" class="w-input" maxlength="256" name="Phone-2" data-name="Phone 2" id="Phone-2"></div>
                </div>
                <div class="div-block-104"><input type="submit" value="Appliquer les modifications" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 2" class="w-tab-pane">
          <div class="w-container">
            <div class="w-form">
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                <div class="form-field-wrapper">
                  <div id="w-node-_3c7c801e-e5cc-ca14-637e-f30887a11ef9-7a95ffa9"><label for="Nom-5" id="contact-email">Votre email actuel *</label><input type="text" maxlength="256" name="Nom-5" data-name="Nom 5" id="Nom-5" class="w-input"></div>
                  <div id="w-node-_3951dd79-6430-69f1-364a-bf2a45fc462c-7a95ffa9"><label for="Nom-6" id="contact-email">Votre nouvel email *</label><input type="text" maxlength="256" name="Nom-5" data-name="Nom 5" id="Nom-5" class="w-input"></div>
                  <div id="w-node-_3c7c801e-e5cc-ca14-637e-f30887a11efd-7a95ffa9"><label for="Prenom-2" id="contact-phone">Répéter le nouvel email *</label><input type="text" class="w-input" maxlength="256" name="Prenom-2" data-name="Prenom 2" id="Prenom-2"></div>
                </div>
                <div class="div-block-104"><input type="submit" value="Appliquer les modifications" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">
          <div class="w-container">
            <div class="w-form">
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                <div class="form-field-wrapper">
                  <div id="w-node-_285e107c-0dc5-be5c-d26c-76caa6b6898e-7a95ffa9"><label for="Nom-6" id="contact-email">Votre mot de passe actuel *</label><input type="text" maxlength="256" name="Nom-5" data-name="Nom 5" id="Nom-5" class="w-input"></div>
                  <div id="w-node-_285e107c-0dc5-be5c-d26c-76caa6b68992-7a95ffa9"><label for="Nom-6" id="contact-email">Votre nouveau mot de passe *</label><input type="text" maxlength="256" name="Nom-5" data-name="Nom 5" id="Nom-5" class="w-input"></div>
                  <div id="w-node-_285e107c-0dc5-be5c-d26c-76caa6b68996-7a95ffa9"><label for="Prenom-3" id="contact-phone">Répéter le nouveau mot de passe *</label><input type="text" class="w-input" maxlength="256" name="Prenom-2" data-name="Prenom 2" id="Prenom-2"></div>
                </div>
                <div class="div-block-104"><input type="submit" value="Appliquer les modifications" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('includes.footer')
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60f964ed749977522e5d9082" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="../js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
