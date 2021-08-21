
@extends("layouts.layout")

@section("content")


<section style="background-image: url(/images/Bg6.gif)"  class="section pricing-hero section-offers section-publish wf-section">
    <h1 class="heading-1 _850-width centre">Réserver une offre</h1>
    <div data-duration-in="300" data-duration-out="100" class="tabs tab-bottom-line w-tabs">
      <div class="w-tab-menu">
        <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link">
          <div>Détails de l&#x27;offre</div>
        </a>
        <a data-w-tab="Tab 2" class="tab-link-tab-2 w-inline-block w-tab-link w--current">
          <div>Transport de colis</div>
        </a>
        <a data-w-tab="Tab 3" class="tab-link-tab-3 w-inline-block w-tab-link">
          <div>Transport de courrier</div>
        </a>
      </div>
      <div class="tabs-content w-tab-content">
        <div data-w-tab="Tab 1" class="w-tab-pane">
          <div class="w-container">
            <div class="w-form">
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-edc993e5"><label for="Nom" id="contact-email">Départ *</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-edc993e5"><label for="Prenom" id="contact-phone">Destination *</label><input type="text" class="w-input" maxlength="256" name="Prenom" data-name="Prenom" id="Prenom"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-edc993e5"><label for="Phone" id="contact-phone">Date d&#x27;arrivée</label><input type="text" class="w-input" maxlength="256" name="Phone" data-name="Phone" id="Phone"></div>
                  <div id="w-node-_231e9d50-030b-8740-1c08-388e9fcd05c6-edc993e5"><label for="Phone-4" id="contact-phone">Référence de l&#x27;offre</label><input type="text" class="w-input" maxlength="256" name="Phone-4" data-name="Phone 4" id="Phone-4"></div>
                  <div id="w-node-_104113db-1d81-c710-46e1-6f9384500a2c-edc993e5"><label for="Phone-2" id="contact-phone">Billet d&#x27;avion du vendeur *</label><input type="tel" class="w-input" maxlength="256" name="Phone-2" data-name="Phone 2" id="Phone-2"></div>
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
        <div data-w-tab="Tab 2" class="w-tab-pane w--tab-active">
          <div class="w-container">
            <div class="w-form">
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label class="w-checkbox"><input type="checkbox" id="CheckColis" name="CheckColis" data-name="CheckColis" class="w-checkbox-input"><span for="CheckColis" class="w-form-label">Je souhaite réserver le service de transport de colis</span></label>
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-edc993e5"><label for="Nom-6" id="contact-email">Quantité disponible (kg)</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
                  <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac30-edc993e5"><label for="Phone-3" id="contact-phone">Prix de vente du kilo</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                  <div id="w-node-_3e87f3c4-a634-63d2-9b89-ea77ffbfaeca-edc993e5"><label for="Phone-4" id="contact-phone">Quantité à réserver (kg)</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                  <div id="w-node-_0ab971ad-73d6-96bb-8abc-082c05d683cf-edc993e5"><label for="Phone-5" id="contact-phone">Prix correspondant</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                  <div id="w-node-_66909a7b-3a14-b717-1003-068fcc86f9f8-edc993e5"><label for="Phone-4" id="contact-phone">Je précise ce que contient mon colis</label><textarea placeholder="J&#x27;enumère ..." maxlength="5000" id="field-4" name="field-4" class="w-input"></textarea></div>
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
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label class="w-checkbox"><input type="checkbox" id="CheckColis-3" name="CheckColis-3" data-name="Check Colis 3" class="w-checkbox-input"><span for="CheckColis-3" class="w-form-label">Je souhaite réserver le service de transport de courrier</span></label>
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-_561b2951-8a3d-ff4e-eb7d-2c4f9e38753e-edc993e5"><label for="Nom-7" id="contact-email">Nombre de courrier à transporter</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
                  <div id="w-node-_561b2951-8a3d-ff4e-eb7d-2c4f9e387542-edc993e5"><label for="Phone-5" id="contact-phone">Prix correspondant</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
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
    <div class="w-container">
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
            @csrf

            <div class="form-field-wrapper">
            <div id="w-node-_41952306-0171-42c3-b728-4c434ee8c51d-edc993e5"><label for="Nom-7" id="contact-email">Prix total hors taxe</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
            <div id="w-node-_84e40fb2-0eba-3878-feed-895356fe69d8-edc993e5"><label for="Nom-7" id="contact-email">Taxe</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
            <div id="w-node-_52c0d420-680c-18b5-58e9-ebbbb3780d12-edc993e5"><label for="Nom-7" id="contact-email">Prix total TTC à payer</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
            <div id="w-node-_41952306-0171-42c3-b728-4c434ee8c525-edc993e5"><label for="Phone-5" id="contact-phone">Pièce d&#x27;identité</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
          </div>
          <div class="div-block-104"><input type="submit" value="Valider la réservation" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div><label class="w-checkbox"><input type="checkbox" id="CheckColis-2" name="CheckColis-2" data-name="Check Colis 2" class="w-checkbox-input"><span for="CheckColis-3" class="w-form-label">J&#x27;accepte les conditions générales et la politique de confidentialité</span></label>
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


@stop
