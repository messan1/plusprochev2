<section class="section pricing-hero section-recherche wf-section">
    <div class="container-2 w-container">
      <h1 class="heading-1 _850-width centre">{{ __('home.search.title') }}</h1>
      <div class="div-block-86">
        <form action="/search" class="relative w-form"><img src="../images/icons8-shipping-location-64.png" alt="" class="search-icon-2"><input type="search" class="search-bar-2 w-input" maxlength="256" name="query" placeholder="{{ __('home.search.depart') }}" id="search" required=""><input type="submit" value="" class="search-submit-2 w-button"></form>
        <form action="/search" class="relative w-form"><img src="../images/icons8-airport-50.png" width="50" height="50" alt="" class="search-icon-2"><input type="search" class="search-bar-2 w-input" maxlength="256" name="query" placeholder="{{ __('home.search.destination') }}" id="search" required=""><input type="submit" value="" class="search-submit-2 w-button"></form>
      </div>
      <a href="#" target="_blank" class="button no-max-width w-button">{{ __('home.search.submit') }}</a>
    </div>
  </section>
