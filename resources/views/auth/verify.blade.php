@extends('layouts.layout')

@section('content')

    <section class="section pricing-hero section-offers section-publish section-100 wf-section">
        <h1 class="heading-1 _850-width centre">Valider votre compte</h1>
        <div class="container-9 w-container">
            <div class="w-form">
                <main style="font-size:20px;text-align:center" class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
                    <div class="flex">
                        <div class="w-full">

                            @if (session('resent'))
                                <div style="font-size:20px" class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4"
                                    role="alert">
                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                </div>
                            @endif

                            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
                                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                                    {{ __('Verify Your Email Address') }}
                                </header>

                                <div
                                    class="w-full flex flex-wrap text-gray-700 leading-normal text-sm p-6 space-y-4 sm:text-base sm:space-y-6">
                                    <p>
                                        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                                    </p>

                                    <p>
                                        {{ __("Si vous n'avez pas reçu l'e-mail") }}, <a
                                            class="text-blue-500 hover:text-blue-700 no-underline hover:underline cursor-pointer"
                                            onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('cliquez ici pour en demander un autre') }}</a>.
                                    </p>

                                    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}"
                                        class="hidden">
                                        @csrf
                                    </form>
                                </div>

                            </section>
                        </div>
                    </div>
                </main>
            </div>
            <div class="social-box"></div>
        </div>
    </section>
@endsection
