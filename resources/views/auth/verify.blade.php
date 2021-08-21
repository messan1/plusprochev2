<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Aug 18 2021 14:28:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="611600c5b140384c0fc37e9a" data-wf-site="60f964ed749977522e5d9082">

<head>
    <meta charset="utf-8">
    <title>ValidateAccount</title>
    <meta content="ValidateAccount" property="og:title">
    <meta content="ValidateAccount" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../css/webflow.css" rel="stylesheet" type="text/css">
    <link href="../css/plusproche.webflow.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
                    "Roboto:300,regular,500,700,900", "Inder:regular", "Inter:300,regular,500,600,700,800,900",
                    "Source Sans Pro:regular"
                ]
            }
        });
    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="../images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="../images/webclip.png" rel="apple-touch-icon">
</head>

<body class="body body-connect">
    @include('includes.nav')

    <section class="section pricing-hero section-offers section-publish section-100 wf-section">
        <h1 class="heading-1 _850-width centre">Valider votre compte</h1>
        <div class="container-9 w-container">
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                    <div class="form-field-wrapper">
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-0fc37e9a"><label for="Nom"
                                id="contact-email">Veuillez renseigner le code qui vous a été envoyé par
                                mail</label>

                        </div>
                    </div>
                    <div class="div-block-104"><input type="submit" value="Envoyer" data-wait="Veuillez patienter..."
                            class="form-btn-submit w-button"></div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=60f964ed749977522e5d9082"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="../js/webflow.js" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
