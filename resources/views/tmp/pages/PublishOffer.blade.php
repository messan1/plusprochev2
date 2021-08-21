
@extends("layouts.layout")

@section("content")

<section style="background-image: url(/images/Bg6.gif)"  class="section pricing-hero section-offers section-publish wf-section">
    <h1 class="heading-1 _850-width centre">Publier une offre</h1>
    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
      <div class="w-tab-menu">
        <a data-w-tab="Tab 1" class="tab-link-tab-1-3 w-inline-block w-tab-link">
          <div>Trajet</div>
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
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-aa54153f"><label for="Nom" id="contact-email">Départ *</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-aa54153f"><label for="Prenom" id="contact-phone">Destination *</label><input type="text" class="w-input" maxlength="256" name="Prenom" data-name="Prenom" id="Prenom"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-aa54153f"><label for="Phone" id="contact-phone">Date d&#x27;arrivée</label><input type="text" class="w-input" maxlength="256" name="Phone" data-name="Phone" id="Phone"></div>
                  <div id="w-node-e21c3df5-4c64-3e72-95c5-d7e887b9bb67-aa54153f"><label for="Phone-4" id="contact-phone">Adresse de livraison souhaité</label><input type="text" class="w-input" maxlength="256" name="Phone-4" data-name="Phone 4" id="Phone-4"></div>
                  <div id="w-node-_104113db-1d81-c710-46e1-6f9384500a2c-aa54153f"><label for="Phone-2" id="contact-phone">Billet d&#x27;avion *</label><input type="tel" class="w-input" maxlength="256" name="Phone-2" data-name="Phone 2" id="Phone-2"></div>
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
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label class="w-checkbox"><input type="checkbox" id="CheckColis" name="CheckColis" data-name="CheckColis" class="w-checkbox-input"><span for="CheckColis" class="w-form-label">Je souhaite effectuer le transport de colis</span></label>
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac28-aa54153f"><label for="Nom-6" id="contact-email">Quantité à vendre * (kg)</label><input type="text" maxlength="256" name="Nom-6" data-name="Nom 6" id="Nom-6" class="w-input"></div>
                  <div id="w-node-_24953867-44eb-de36-2808-be4c2d36ac30-aa54153f"><label for="Phone-3" id="contact-phone">Prix de vente du kilo</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                  <div id="w-node-_3e87f3c4-a634-63d2-9b89-ea77ffbfaeca-aa54153f"><label for="Phone-4" id="contact-phone">Prix publié TTC</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
                  <div id="w-node-_66909a7b-3a14-b717-1003-068fcc86f9f8-aa54153f"><label for="Phone-4" id="contact-phone">Ce que je refuse de transporter</label><textarea placeholder="J&#x27;enumère ..." maxlength="5000" id="field-4" name="field-4" class="w-input"></textarea></div>
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
              <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label class="w-checkbox"><input type="checkbox" id="CheckColis-2" name="CheckColis-2" data-name="Check Colis 2" class="w-checkbox-input"><span for="CheckColis-2" class="w-form-label">Je souhaite effectuer le transport de courrier</span></label>
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-_4e9cf4e5-d11e-0f2c-e265-8e4a060e6f5a-aa54153f"><label for="Phone-4" id="contact-phone">Prix publié TTC</label><input type="number" class="w-input" maxlength="256" name="Phone-3" data-name="Phone 3" id="Phone-3"></div>
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
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"><label class="w-checkbox"><input type="checkbox" id="CheckColis-2" name="CheckColis-2" data-name="Check Colis 2" class="w-checkbox-input"><span for="CheckColis-3" class="w-form-label">J&#x27;accepte les conditions générales et la politique de confidentialité</span></label>
            @csrf

            <div class="div-block-104"><input type="submit" value="Valider la publication" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
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
