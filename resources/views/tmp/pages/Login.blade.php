@extends("layouts.layout")

@section('content')

    <section class="section pricing-hero section-offers section-publish wf-section">
        <h1 class="heading-1 _850-width centre">Se connecter</h1>
        <div class="w-container">
            <div class="w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST"
                    action="{{ route('login') }}">
                    @csrf
                    <div class="form-field-wrapper">
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f610-0bf06067"><label for="Email-4"
                                id="contact-email">Email *</label>
                            <input type="email" class="w-input" maxlength="256" name="email" data-name="Email 3"
                                id="Email-3" required autocomplete="email" autofocus>
                            @error('email')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div id="w-node-e498b37c-6fcd-38bc-4005-9c759db9f614-0bf06067"><label for="Contact-Phone-Number-3"
                                id="contact-phone">Mot de passe *</label>
                                <input type="password" class="w-input" maxlength="256"
                                name="password" data-name="Contact Phone Number 2"
                                id="Contact-Phone-Number-2">
                                @error('password')
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $message }}
                                </p>
                                @enderror
                        </div>
                    </div>
                    <div id="formInstructions" class="small-text"><em>Les champs marqués avec un astérisque (*) sont
                            requis.</em></div>
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
                                    <div class="text-block-9">     Se connecter via Google</div>
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
