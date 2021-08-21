<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Aug 18 2021 14:28:57 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="61161339c6e9419aedc993e5" data-wf-site="60f964ed749977522e5d9082">

<head>
    <meta charset="utf-8">
    <title>Order Offer</title>
    <meta content="Order Offer" property="og:title">
    <meta content="Order Offer" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../css/webflow.css" rel="stylesheet" type="text/css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

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

<body class="body body-offers">

    @include('includes.nav')
    <section class="section pricing-hero section-offers section-publish wf-section">
        <h1 class="heading-1 _850-width centre">Réserver une offre</h1>
        <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
            <div class="w-tab-menu">
                <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link w--current">
                    <div>Détails de l&#x27;offre</div>
                </a>
                <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                    <div>Transport de colis</div>
                </a>
                <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                    <div>Transport de courrier</div>
                </a>
            </div>
            <div class="tabs-content w-tab-content">
                <div data-w-tab="Tab 1" class="w-tab-pane w--tab-active">
                    <div class="w-container">
                        <div class="w-form">
                            <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                                <div class="form-field-wrapper">
                                    <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-edc993e5"
                                        class="div-block-108"><label for="Nom" id="contact-email">Départ *</label><input
                                            readonly value=0 type="text" maxlength="256" name="Nom" data-name="Nom"
                                            id="Nom" class="w-input"></div>
                                    <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-edc993e5"><label for="Prenom"
                                            id="contact-phone">Destination *</label><input readonly value=0 type="text"
                                            class="w-input" maxlength="256" name="Prenom" data-name="Prenom"
                                            id="Prenom"></div>
                                    <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-edc993e5"><label for="Phone"
                                            id="contact-phone">Date d&#x27;arrivée</label><input readonly value=0
                                            type="text" class="w-input" maxlength="256" name="Phone" data-name="Phone"
                                            id="Phone"></div>
                                    <div id="w-node-_231e9d50-030b-8740-1c08-388e9fcd05c6-edc993e5"><label for="Phone-4"
                                            id="contact-phone">Référence de l&#x27;offre</label><input readonly value=0
                                            type="text" class="w-input" maxlength="256" name="Phone-4"
                                            data-name="Phone 4" id="Phone-4"></div>
                                </div>
                            </form>
                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                        <a href="#" class="link-6">Billet d&#x27;avion<br>‍</a>
                    </div>
                </div>
                <div data-w-tab="Tab 2" class="w-tab-pane">
                    <div class="w-container">
                        <div class="w-form">
                            <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label
                                    class="w-checkbox"><input type="checkbox" id="CheckColis" name="has_colis"
                                        data-name="CheckColis" class="w-checkbox-input"><span for="CheckColis"
                                        class="w-form-label">Je souhaite réserver le service de transport de
                                        colis</span></label>
                                <div class="form-field-wrapper">
                                    <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-edc993e5"><label for="Nom-6"
                                            id="contact-email">Quantité disponible (kg)</label><input readonly value=0
                                            type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6"
                                            class="w-input">
                                    </div>
                                    <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac30-edc993e5"><label for="Phone-3"
                                            id="contact-phone">Prix de vente du kilo</label><input readonly value=0
                                            type="number" class="w-input" maxlength="256" name="Phone-3"
                                            data-name="Phone 3" id="Phone-3"></div>
                                    <div id="w-node-_3e87f3c4-a634-63d2-9b89-ea77ffbfaeca-edc993e5"><label for="Phone-4"
                                            id="contact-phone">Quantité à réserver (kg)</label><input type="number"
                                            class="w-input" maxlength="256" name="colis_quantity" data-name="Phone 3"
                                            id="Phone-3"></div>
                                    <div id="w-node-_0ab971ad-73d6-96bb-8abc-082c05d683cf-edc993e5"><label for="Phone-5"
                                            id="contact-phone">Prix correspondant</label><input type="number"
                                            class="w-input" maxlength="256" name="colis_cost" data-name="Phone 3"
                                            id="Phone-3"></div>
                                    <div id="w-node-_66909a7b-3a14-b717-1003-068fcc86f9f8-edc993e5"><label for="Phone-4"
                                            id="contact-phone">Je précise ce que contient mon colis</label><textarea
                                            placeholder="J&#x27;enumère ..." maxlength="5000" id="field-4"
                                            name="description" class="w-input"></textarea></div>
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
                </div>
                <div data-w-tab="Tab 3" class="w-tab-pane">
                    <div class="w-container">
                        <div class="w-form">
                            <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label
                                    class="w-checkbox"><input type="checkbox" id="CheckColis-3" name="has_courrier"
                                        data-name="Check Colis 3" class="w-checkbox-input"><span for="CheckColis-3"
                                        class="w-form-label">Je souhaite réserver le service de transport de
                                        courrier</span></label>
                                <div class="form-field-wrapper">
                                    <div id="w-node-_561b2951-8a3d-ff4e-eb7d-2c4f9e38753e-edc993e5"><label for="Nom-7"
                                            id="contact-email">Nombre de courrier à transporter</label><input
                                            type="text" maxlength="256" name="courrier_number" data-name="Nom 6"
                                            id="Nom-6" class="w-input"></div>
                                    <div id="w-node-_561b2951-8a3d-ff4e-eb7d-2c4f9e387542-edc993e5"><label for="Phone-5"
                                            id="contact-phone">Prix correspondant</label><input type="number"
                                            class="w-input" maxlength="256" value="0.0" readonly name="courrier_cost"
                                            data-name="Phone 3" id="Phone-3"></div>
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
                </div>
            </div>
        </div>
        <div class="container-14 w-container">
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                    <div class="form-field-wrapper">
                        <div id="w-node-_37a26054-c4d5-4a7f-d04b-1b2af1a93564-edc993e5" class="form-break"></div>
                        <div id="w-node-_41952306-0171-42c3-b728-4c434ee8c51d-edc993e5"><label for="Nom-7"
                                id="contact-email">Prix hors taxe</label><input readonly value=0 type="text" maxlength="256" name="Nom-6"
                                data-name="Nom 6" id="Nom-6" class="w-input"></div>
                        <div id="w-node-_4b93cfca-c4d9-2880-73ac-031748dcb593-edc993e5"><label for="Nom-7"
                                id="contact-email">Frais de service</label><input readonly value=0 type="text" maxlength="256"
                                name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div><label
                            id="w-node-_4c0ae8c9-2f35-4774-535a-6adeba3490d6-edc993e5"
                            class="w-checkbox checkbox-field-3"><input type="checkbox" id="CheckColis-2"
                                name="CheckColis-2" data-name="Check Colis 2" class="w-checkbox-input"><span
                                for="CheckColis-4" class="w-form-label">Voulez vous souscrire à une police
                                d&#x27;assurance ?</span></label>
                        <div id="w-node-c5d9a765-ab64-410e-23ee-d2b712487878-edc993e5"><label for="Phone-5"
                                id="contact-phone">Souscrire à une police d&#x27;assurance</label><input type="number"
                                class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                        <div id="w-node-_93640ef7-7545-1dff-b2e6-d8a040308137-edc993e5"><label for="Phone-5"
                                id="contact-phone">Prix de l&#x27;assurance</label><input readonly value=0 type="number" class="w-input"
                                maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                        <div id="w-node-_2686b1cd-9350-9c89-1c8b-bf8b78e3e95b-edc993e5" class="form-break"></div>
                        <div id="w-node-_52c0d420-680c-18b5-58e9-ebbbb3780d12-edc993e5"><label for="Nom-7"
                                id="contact-email">Prix total TTC à payer</label><input readonly value=0 type="text" maxlength="256"
                                name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
                    </div><label class="w-checkbox"><input type="checkbox" id="CheckColis-2" name="has_condition"
                            data-name="Check Colis 2" class="w-checkbox-input"><span for="CheckColis-3"
                            class="w-form-label">J&#x27;accepte les conditions générales et la politique de
                            confidentialité</span></label>
                    <div class="div-block-104"><input type="submit" value="Valider la réservation"
                            data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
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
