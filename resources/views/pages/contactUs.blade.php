
@extends("layouts.layout")

@section("content")

<section class="section pricing-hero section-offers section-publish wf-section">
    <h1 class="heading-1 _850-width centre">Nous contacter</h1>
    <p class="subheadline _650-width centre">Nous vous répondrons en très peu de temps</p>
    <div class="container-12 w-container">
      <div id="formInstructions" class="small-text"><em>Les champs marqués avec un astérisque (*) sont requis.</em></div>
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
            @csrf

          <div class="contact-form-grid">
            <div id="w-node-_6931873b-fb23-41f7-a565-589b1e97aa24-a3e821ac"><label for="First-Name" id="contact-first-name">Nom *</label><input type="text" class="w-input" maxlength="256" name="First-Name" data-name="First Name" id="First-Name" required=""></div>
            <div id="w-node-_6931873b-fb23-41f7-a565-589b1e97aa28-a3e821ac"><label for="Last-Name" id="contact-last-name">Prénom *</label><input type="text" class="w-input" maxlength="256" name="Last-Name" data-name="Last Name" id="Last-Name" required=""></div>
            <div id="w-node-_6931873b-fb23-41f7-a565-589b1e97aa2c-a3e821ac"><label for="Email-3" id="contact-email">Email *</label><input type="email" class="w-input" maxlength="256" name="Email-3" data-name="Email 3" id="Email-3" required=""></div>
            <div id="w-node-_6931873b-fb23-41f7-a565-589b1e97aa30-a3e821ac"><label for="Contact-Phone-Number" id="contact-phone">Numéro de téléphone</label><input type="tel" class="w-input" maxlength="256" name="Contact-Phone-Number" data-name="Contact Phone Number" id="Contact-Phone-Number"></div>
            <div id="w-node-_6931873b-fb23-41f7-a565-589b1e97aa34-a3e821ac"><label for="Message-3" id="contact-message">Votre message</label><textarea data-name="Message 3" maxlength="5000" id="Message-3" name="Message-3" class="w-input"></textarea></div>
          </div><input type="submit" value="Envoyer votre message" data-wait="Veuillez patienter..." class="form-btn-submit w-button">
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
