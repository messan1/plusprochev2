
@extends("layouts.layout")

@section("content")


<section style="background-image: url(/images/Bg6.gif)" class="section pricing-hero section-offers section-no-bg wf-section buying-section">
    <h1 class="heading-1 _850-width centre">Mes achats</h1>
    <div class="container-11 w-container">
      <div class="w-form">
        <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form">
            @csrf

            <div class="form-field-wrapper">
            <div id="w-node-a21a2c40-ac39-3086-6c9a-b8cf686c992c-bfbc537a"><label for="Nom" id="contact-email">Statut</label><input type="text" maxlength="256" name="Nom" data-name="Nom" id="Nom" class="w-input"></div>
            <div id="w-node-a21a2c40-ac39-3086-6c9a-b8cf686c9930-bfbc537a"><label for="Prenom" id="contact-phone">Prénoms *</label><input type="text" class="w-input" maxlength="256" name="Prenom" data-name="Prenom" id="Prenom"></div>
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
    <div class="w-layout-grid grid-2">
      @foreach ($buys as $transaction)
          @include('includes.mybuying', [
              'transaction' => compact($transaction),
              'offer' => compact($transaction->offer()->first()),
              'trajet' => compact($transaction->offer()->first()->trajet()->first()),
          ])
      @endforeach
    </div>
  </section>

@stop
