
@extends("layouts.layout")

@section("content")


<section class="section pricing-hero section-offers section-publish section-100 wf-section">
    <h1 class="heading-1 _850-width centre">Réinitialiser votre mot de passe</h1>
    @if (session('status'))
    <p style="color:green;text-align:center"  class="subheadline _650-width centre"
        role="alert">xx
        {{ session('status') }}
    </p>
    @endif

    @error('email')
    <p style="color:red;text-align:center"  class="subheadline _650-width centre">
        {{ $message }}
    </p>
    @enderror
    <div class="container-9 w-container">
      <div class="w-form">

        <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="flex flex-wrap">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('E-Mail Address') }}:
                </label>

                <input id="email" type="email"
                    class="form-input w-input @error('email') border-red-500 @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Password') }}:
                </label>

                <input id="password" type="password"
                    class="form-input w-input @error('password') border-red-500 @enderror" name="password"
                    required autocomplete="new-password">

                @error('password')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex flex-wrap">
                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                    {{ __('Confirm Password') }}:
                </label>

                <input id="password-confirm" type="password" class="form-input w-input"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="div-block-104">
                <input type="submit" value="Réinitialiser" data-wait="Veuillez patienter..." class="form-btn-submit w-button">
            </div>  
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
