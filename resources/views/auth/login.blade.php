<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Aug 18 2021 14:28:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6115f56fdd2d35440bf06067" data-wf-site="60f964ed749977522e5d9082">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="Login" property="og:title">
    <meta content="Login" property="twitter:title">
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

    <section class="section pricing-hero section-offers section-publish wf-section">
        <h1 class="heading-1 _850-width centre">Se connecter</h1>
        <div class="cointainer-login w-container">
            @error('email')
                <p style="text-align: center;color:red" class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
            @error('password')
                <p style="text-align: center;color:red" class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST"
                action="{{ route('login') }}">
                    @csrf
                    <div class="form-field-wrapper">
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-0bf06067"><label for="Email-4"
                                id="contact-email">Email *</label><input type="email" class="w-input" maxlength="256"
                                name="email" data-name="Email 3" id="Email-3" required=""></div>
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f614-0bf06067"><label
                                for="Contact-Phone-Number-3" id="contact-phone">Mot de passe *</label><input type="password"
                                class="w-input" maxlength="256" name="password"
                                data-name="Contact Phone Number 2" id="Contact-Phone-Number-2"></div>
                    </div>
                    <div class="div-block-109">
                        <div id="formInstructions" class="small-text"><em>Les champs marqués avec un astérisque (*) sont
                                requis.</em></div>
                        <a href="{{ route('password.request')}}" class="link-login">Mot de passe oublié ?</a>
                    </div>
                    @if (Route::has('register'))
                    <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                        {{ __("Pas encore de compte?") }}
                        <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline"
                            href="{{ route('register') }}">
                            {{ __('Inscription') }}
                        </a>
                    </p>
                @endif
                    <div class="div-block-104"><input type="submit" value="Se connecter"
                            data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
                    <div class="div-block-6-copy">
                        <div class="_1px-div-line"></div>
                        <h3 class="heading-17">Ou</h3>
                        <div class="_1px-div-line"></div>
                    </div>
                    <div class="social_btn_group">
                        <div class="social-box">
                            <a href="#" class="social-login w-inline-block"><img src="../images/G.png" alt=""
                                    class="image-96">
                                <div class="div-block-2">
                                    <div class="text-block-9">     Se connecter via Google</div>
                                </div>
                            </a>
                            <a href="../old/profils.html" class="social-login facebook w-inline-block"><img
                                    src="../images/facebook.png" alt="" class="image-96">
                                <div class="div-block-2">
                                    <div class="text-block-9 _2">Se connecter via Facebook</div>
                                </div>
                            </a>
                        </div>
                    </div>
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
