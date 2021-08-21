@extends("layouts.layout")

@section('content')
    <section class="section pricing-hero section-offers section-publish wf-section">
        <h1 class="heading-1 _850-width centre">Se connecter</h1>
        <div class="w-container">
            @error('email')
                <p style="text-align: center;color:red" class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
            @error('password')
                <p style="text-align: center;color:red" class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
            
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="form-field-wrapper">
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-0bf06067"><label for="Email-4"
                                id="contact-email">Email *</label>
                            <input type="email" class="w-input" maxlength="256" name="email" data-name="Email 3"
                                id="Email-3" required autocomplete="email" autofocus>

                        </div>
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f614-0bf06067"><label for="Contact-Phone-Number-3"
                                id="contact-phone">Mot de passe *</label>
                            <input value="{{ old('email') }}" type="password" class="w-input" maxlength="256"
                                name="password" data-name="Contact Phone Number 2" id="Contact-Phone-Number-2">

                        </div>
                    </div>
                    <div id="formInstructions" class="small-text"><em>Les champs marqués avec un astérisque (*) sont
                            requis.</em></div>

                    @if (Route::has('register'))
                        <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __("Pas encore de compte?") }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline"
                                href="{{ route('register') }}">
                                {{ __('Inscription') }}
                            </a>
                        </p>
                    @endif
                    <div class="div-block-104"><input type="submit" value="Se connecter" data-wait="Veuillez patienter..."
                            class="form-btn-submit w-button"></div>
                    <div class="div-block-6-copy">
                        <div class="_1px-div-line"></div>
                        <h3 class="heading-17">Ou</h3>
                        <div class="_1px-div-line"></div>
                    </div>
                    <div class="social_btn_group">
                        <div class="social-box">
                            <a href="#" class="social-login w-inline-block"><img src={{ asset('images/G.png') }} alt=""
                                    class="image-96">
                             <div class="div-block-2">
                                    <div class="text-block-9"> Se connecter via Google</div>
                                </div>
                            </a>
                            <a href="../old/profils.html" class="social-login facebook w-inline-block"><img
                                    src={{ asset('images/facebook.png') }} alt="" class="image-96">
                                <div class="div-block-2">
                                    <div class="text-block-9 _2">Se connecter via Facebook</div>
                                </div>
                            </a>
                        </div>
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
    </section>

@stop
