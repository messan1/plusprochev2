<div class="creator_block creator-block-home">
    @if ( $offer->IsOpened() )
    <div class="columns-14 offer-encours w-row">
    @elseif ( $offer->IsClosed())
    <div class="columns-14 offer-closed w-row">
    @elseif( $offer->IsCanceled() )
    <div class="columns-14 offer-canceled w-row">
    @endif
        <div class="w-col w-col-5">
            <div class="block_username text-statut">{{ $offer->status }}</div>
        </div>
        <div class="w-col w-col-7">
            <div class="text-block">Publié le {{ $offer->published_at }}</div>
        </div>
    </div>
    <div class="block_top-wrap"><img src="../images/avatar-3_1avatar-3.png" loading="lazy" alt="" class="block-profile-img">
        <div class="block_top-text-wrap">
            <div class="block_text">Publié par {{ $offer->user()->first()->fullName }}<strong>
                <br>{{ $trajet()->depart }} → {{ $trajet()->destination }}</strong>
                <br>Arrivée : {{ $trajet()->arrived_at }}<br>
            </div>
        </div>
    </div>
    <div class="div-block-88"></div>
    <div class="block_text">
        @if( $offer->hasColis)
        Colis: {{ $offer->colisQuantityFree() }} kg ( {{ changeStr($offer->currency, $request->currency, $offer->colis_unit_cost, now()) }} / kg)
        @else
        Colis: Aucun
        @endif

        <br>
        @if( $offer->hasCourrier)
        Courrier: {{ $offer->courrierQuantityFree() }} disponibilités ({{ changeStr($offer->currency, $request->currency, $offer->courrier_unit_cost, now()) }} / kg)
        @else
        Courrier: Aucun
        @endif

    </div>
    <a href="/detailsoffer/{{ $offer->id }}" class="button no-max-width outline btn-see w-button">Voir</a>
</div>
