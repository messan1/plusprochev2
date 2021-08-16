@extends("layouts.layout")

@section('content')

    <section class="section pricing-hero section-offers section-publish wf-section">
        <h1 class="heading-1 _850-width centre">S&#x27;inscrire</h1>
        <div class="w-container">
            @error('name')
            <p style="text-align: center;color:red" class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror

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
            <div id="formInstructions" class="small-text"><em>Les champs marqués avec un astérisque (*) sont requis.</em>
            </div>
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST"
                    action="{{ route('register') }}">
                    @csrf

                    <div class="form-field-wrapper">
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-247e1aa1"><label for="Nom"
                                id="contact-email">Nom *</label>
                            <input type="text" maxlength="256" name="name" data-name="Nom" id="Nom" class="w-input"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                        </div>
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f614-247e1aa1"><label for="Prenom"
                                id="contact-phone">Prénoms</label><input type="text" class="w-input" maxlength="256"
                                name="Prenom" data-name="Prenom" id="Prenom"></div>
                        <div id="w-node-cf9f0e06-7df6-d326-ca60-bd29d628747f-247e1aa1"><label for="Email-5"
                                id="contact-phone">Email *</label><input type="email" class="w-input" maxlength="256"
                                name="email" data-name="Email" id="Email-5" value="{{ old('email') }}" required
                                autocomplete="email"></div>
                        <div id="w-node-_3b04bf29-ffe9-11aa-0c36-3a755f3b60fd-247e1aa1"><label for="Phone"
                                id="contact-phone">Numéro de téléphone</label><input type="tel" class="w-input"
                                maxlength="256" name="phone" data-name="Phone" id="Phone"></div>
                        <div id="w-node-f0b17edb-3c29-016b-b45a-f5d29f41e427-247e1aa1"><label for="Password"
                                id="contact-phone">Mot de passe *</label><input type="password" class="w-input"
                                maxlength="256" name="password" required autocomplete="new-password" data-name="Password"
                                id="Password"></div>
                        <div id="w-node-b335bd75-74c5-4b5d-ee2a-c7be4c99f5d9-247e1aa1"><label for="Repeat-Password"
                                id="contact-phone">Répéter le mot de passe *</label><input type="password" class="w-input"
                                maxlength="256" name="password_confirmation" required autocomplete="new-password" data-name="Repeat Password" id="Repeat-Password"
                               ></div>
                    </div>
                    <div class="div-block-104"><input type="submit" value="S&#x27;inscrire"
                            data-wait="Veuillez patienter..." class="form-btn-submit w-button"></div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <div class="div-block-6-copy">
                <div class="_1px-div-line"></div>
                <h3 class="heading-17">Ou</h3>
                <div class="_1px-div-line"></div>
            </div>
            <div class="social-box">
                <a href="../old/profils.html" class="social-login w-inline-block"><img src="../images/G.png" alt=""
                        class="image-96">
                    <div class="div-block-2">
                        <div class="text-block-9">    S&#x27;inscrire via Google</div>
                    </div>
                </a>
                <a href="../old/profils.html" class="social-login facebook w-inline-block"><img src="../images/facebook.png"
                        alt="" class="image-96">
                    <div class="div-block-2">
                        <div class="text-block-9 _2">S&#x27;inscrire via Facebook</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

@stop
