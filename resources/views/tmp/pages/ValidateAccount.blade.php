
@extends("layouts.layout")

@section("content")

<section class="section pricing-hero section-offers section-publish section-100 wf-section">
    <h1 class="heading-1 _850-width centre">Valider votre compte</h1>
    <div class="container-9 w-container">
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
            @csrf

            <div class="form-field-wrapper">
            <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-0fc37e9a"><label for="Nom" id="contact-email">Veuillez renseigner le code qui vous a été envoyé par mail</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
          </div>
          <div class="div-block-104"><input type="submit" value="Envoyer" data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
        </form>
      </div>
      <div class="social-box"></div>
    </div>
  </section>


@stop
