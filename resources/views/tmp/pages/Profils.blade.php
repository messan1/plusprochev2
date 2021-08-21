
@extends("layouts.layout")

@section("content")

<section class="section pricing-hero section-offers section-publish wf-section">
    <h1 class="heading-1 _850-width centre">Mon profil</h1>
    <div class="container-10 w-container">
      <div class="div-block-103"><img src={{asset("images/avatar-1_1avatar-1.png")}} loading="lazy" width="72" alt="" class="avatar avatar-readonly">
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
                @csrf

                <div class="form-field-wrapper">
                  <div id="w-node-be176c5e-40dc-f28e-d48d-a0ae1bac7024-7a95ffa9" class="div-block-94"><img src={{asset("images/avatar-1_1avatar-1.png")}} loading="lazy" width="72" alt="" class="avatar">
                    <div class="div-block-102"><label for="Nom-4" id="contact-email">Image</label><input type="text" maxlength="256" name="Nom-4" data-name="Nom 4" id="Nom-4" class="w-input"></div>
                  </div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323b8-7a95ffa9"><label for="Nom" id="contact-email">Nom *</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323bc-7a95ffa9"><label for="Prenom" id="contact-phone">Prénoms *</label><input type="text" class="w-input" maxlength="256" name="Prenom" data-name="Prenom" id="Prenom"></div>
                  <div id="w-node-_7c4238ec-34a1-2227-0577-fe461f0323c4-7a95ffa9"><label for="Phone" id="contact-phone">Numéro de téléphone</label><input type="tel" class="w-input" maxlength="256" name="Phone" data-name="Phone" id="Phone"></div>
                  <div id="w-node-_104113db-1d81-c710-46e1-6f9384500a2c-7a95ffa9"><label for="Phone-2" id="contact-phone">Fichier d&#x27;identité</label><input type="tel" class="w-input" maxlength="256" name="Phone-2" data-name="Phone 2" id="Phone-2"></div>
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
                @csrf

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
                @csrf

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

@stop
