
  <section class="section pricing-hero section-offers wf-section">
    <h1 class="heading-1 _850-width centre text-white">{{ __('home.recent.title') }}</h1>
    <p class="subheadline _650-width centre text-white">{{ __('home.recent.subtitle') }}</p>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="slider w-slider">
      <div class="w-slider-mask">
        <div class="slide w-slide">
          <div data-w-id="59151a01-e676-1695-9b4c-5c8741bea079" class="creator_content">
            @foreach ($recentoffers1 as $offer)
                @include('includes.offer', ['offer' => compact($offer)])
            @endforeach
          </div>
          <div data-w-id="51d1a388-d037-1899-3401-360536e17d31" class="creator_content">
            @foreach ($recentoffers2 as $offer)
                @include('includes.offer', ['offer' => compact($offer)])
            @endforeach
          </div>
        </div>
      </div>
      <div class="left-arrow w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="right-arrow w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="slide-nav w-slider-nav w-round"></div>
    </div>
  </section>
