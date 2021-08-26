@extends("layouts.layout")

@section('content')

<form style="background-image: url(/images/Bg6.gif)"
    class="section pricing-hero section-offers section-publish wf-section" action="{{ route('offers.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($error))
    <div class="alert alert-danger">
        <ul>
            <li>{{ $error }}</li>
        </ul>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1 class="heading-1 _850-width centre">Publier une offre</h1>
    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
        <div class="w-tab-menu">

            <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link  w--current">
                <div>Trajet</div>
            </a>
            <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link">
                <div>Transport de colis</div>
            </a>
            <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
                <div>Transport de courrier</div>
            </a>
        </div>
        <div class="tabs-content w-tab-content" x-data="{has_colis: false}">


            <div data-w-tab="Tab 1" class="w-tab-pane">
                <div class="w-container">
                    <div class="w-form">
                        <div id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">


                            <div class="form-field-wrapper">

                                <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-aa54153f"><label for="Nom"
                                        id="contact-email">Départ *</label>


                                    <select class="livesearch form-control w-input" name="depart" style="width: 100%"
                                        name="depart"></select>

                                </div>

                                <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-aa54153f"><label for="Prenom"
                                        id="contact-phone">Destination *</label>


                                    <select class="livesearch form-control w-input" name="destination"
                                        style="width: 100%" name="destination"></select>


                                </div>
                                <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-aa54153f"><label for="Phone"
                                        id="contact-phone">Date d&#x27;arrivée</label><input type="date" class="w-input"
                                        maxlength="256" name="arrived_at" data-name="Phone" id="Phone"></div>
                                <div id="w-node-e21c3df5-4c64-3e72-95c5-d7e887b9bb67-aa54153f"><label for="Phone-4"
                                        id="contact-phone">Adresse de livraison souhaité</label><input value=""
                                        type="text" class="w-input" maxlength="256" name="delivery_address"
                                        data-name="Phone 4" id="Phone-4">
                                </div>
                                <div id="w-node-_104113db-1d81-c710-46e1-6f9384500a2c-aa54153f"><label for="Phone-2"
                                        id="contact-phone">Billet d&#x27;avion *</label><input type="file"
                                        class="w-input" maxlength="256" name="plane_ticket" data-name="Phone 2"
                                        id="Phone-2">
                                </div>
                            </div>
                        </div>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane w--tab-active">
                <div class="w-container">
                    <div class="w-form">
                        <div id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"
                            x-data="{has_colis: false}">
                            <label class="w-checkbox"><input type="checkbox" x-model="has_colis" id="CheckColis"
                                    name="has_colis" data-name="CheckColis" class="w-checkbox-input"><span
                                    for="CheckColis" class="w-form-label">Je souhaite effectuer le transport de
                                    colis</span></label>


                            <div class="form-field-wrapper">

                                <div x-show="has_colis" id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-aa54153f">
                                    <label for="Nom-6" id="contact-email">Quantité à vendre * (kg)</label>

                                    <input x-show="has_colis" type="text" maxlength="256" name="colis_quantity" value=""
                                        data-name="Nom 6" id="Nom-6" class="w-input">

                                    {{-- <input x-show="!has_colis" value="" readonly type="text" maxlength="256"
                                            name="colis_quantity" data-name="Nom 6" id="Nom-6" class="w-input"> --}}

                                </div>


                                <div x-show="has_colis" id="w-node-_24953867-44eb-de36-2808-be4c2d36ac30-aa54153f">
                                    <label for="Phone-3" id="contact-phone">Prix de vente du kilo</label>



                                    <input x-show="has_colis" type="number" class="w-input" maxlength="256"
                                        name="colis_unit_cost" value="" data-name="Phone 3" id="Phone-3">

                                    {{-- <input x-show="!has_colis" readonly type="number" class="w-input" maxlength="256"
                                            name="colis_unit_cost" value="" data-name="Phone 3" id="Phone-3"> --}}

                                </div>
                                <div x-show="has_colis" id="w-node-_3e87f3c4-a634-63d2-9b89-ea77ffbfaeca-aa54153f">
                                    <label for="Phone-4" id="contact-phone">Prix publié TTC</label>
                                    <input type="number" class="w-input" maxlength="256" name="colis_ttc" value=0
                                        readonly data-name="Phone 3" id="Phone-3">
                                </div>
                                <div x-show="has_colis" id="w-node-_66909a7b-3a14-b717-1003-068fcc86f9f8-aa54153f">
                                    <label for="Phone-4" id="contact-phone">Ce que je refuse de transporter</label>
                                    <textarea x-show="has_colis" placeholder="J&#x27;enumère ..." maxlength="5000"
                                        id="field-4" name="delivery_condition" class="w-input"></textarea>

                                    {{-- <textarea x-show="!has_colis" readonly placeholder="J&#x27;enumère ..."
                                            maxlength="5000" id="field-4" name="delivery_condition"
                                            class="w-input"></textarea> --}}

                                </div>
                            </div>
                        </div>
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
                        <div id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"
                            x-data="{has_courrier: false,qt:0,price:0}">
                            <label class="w-checkbox"><input x-model="has_courrier" type="checkbox" id="CheckColis-2"
                                    name="has_courrier" data-name="Check Colis 2" class="w-checkbox-input"><span
                                    for="CheckColis-2" class="w-form-label">Je souhaite effectuer le transport de
                                    courrier</span></label>


                            <div class="form-field-wrapper">
                                <div x-show="has_courrier" id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-aa54153f">
                                    <label for="Nom-6" id="contact-email">Quantité </label>
                                    <input type="text" maxlength="256" x-model="qt" x-show="has_courrier"
                                        name="courrier_quantity" data-name="Nom 6" id="Nom-6" class="w-input">

                                    {{-- <input x-show="!has_courrier" x-model="qt" readonly type="text" maxlength="256"
                                            name="courrier_quantity" data-name="Nom 6" id="Nom-6" class="w-input"> --}}

                                </div>
                                    <div x-show="has_courrier" id="w-node-_4e9cf4e5-d11e-0f2c-e265-8e4a060e6f5a-aa54153f">
                                        <label for="courrier_unit_cost" id="contact-phone">Prix Unittaire</label>

                                        <input x-model="price" x-show="has_courrier" type="number" class="w-input"
                                        maxlength="256" name="courrier_unit_cost" data-name="Phone 3" id="Phone-3">
                                    </div>
                                    <div x-show="has_courrier" id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-aa54153f"><label for="courrier_tcc"
                                        id="contact-email">Prix TTC </label>
                                    <input value=20 readonly type="number" maxlength="256" x-show="has_courrier" name="courrier_ttc"
                                        data-name="Nom 6" id="Nom-6" class="w-input">
    
                                    {{-- <input x-show="!has_courrier" x-model="qt" readonly type="text" maxlength="256"
                                        name="courrier_quantity" data-name="Nom 6" id="Nom-6" class="w-input"> --}}
    
                                    </div>
                                    <div x-show="has_courrier" id="w-node-_66909a7b-3a14-b717-1003-068fcc86f9f8-aa54153f">
                                        <label for="Phone-4" id="contact-phone">Ce que je refuse de transporter</label>
                                        <textarea x-show="has_courrier" placeholder="J&#x27;enumère ..."
                                            maxlength="5000" id="field-4" name="delivery_condition"
                                            class="w-input"></textarea>
                                        {{-- <input x-model="price" x-show="!has_courrier" readonly type="number" class="w-input" maxlength="256"
                                            name="courrier_unit_cost" data-name="Phone 3" id="Phone-3"> --}}

                                </div>
                            </div>
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
        <div class="w-container">
            <div class="w-form">
                <div id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label
                        class="w-checkbox"><input type="checkbox" id="CheckColis-2" name="has_condition"
                            data-name="Check Colis 2" class="w-checkbox-input"><span for="CheckColis-3"
                            class="w-form-label">J&#x27;accepte les conditions générales et la politique de
                            confidentialité</span></label>


                    <div class="div-block-104"><input type="submit" value="Valider la publication"
                            data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
                </div>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Choisir le lieu de depart',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });

</script>

@stop
