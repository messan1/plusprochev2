
@extends("layouts.layout")

@section("content")


<section class="section pricing-hero section-offers section-publish section-100 wf-section">
    <h1 class="heading-1 _850-width centre">Réinitialiser votre mot de passe</h1>
    <p class="subheadline _650-width centre">Veuillez renseigner votre email</p>
    <div class="container-9 w-container">
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
            @csrf

            <div class="form-field-wrapper">
            <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-dac386f8"><label for="Nom" id="contact-email">Email</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
          </div>
          <div class="div-block-104"><input type="submit" value="Réinitialiser" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      <div class="social-box"></div>
    </div>
  </section>

@stop
