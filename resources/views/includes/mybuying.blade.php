<div class="creator_block">
    @if ( $offer->IsOpened() )
    <div class="columns-14 offer-encours w-row">
    @elseif ( $offer->IsClosed())
    <div class="columns-14 offer-closed w-row">
    @elseif( $offer->IsCanceled() )
    <div class="columns-14 offer-canceled w-row">
    @endif
        <div class="w-col w-col-6">
            <div class="block_username">{{ $transaction->status }}</div>
        </div>
        <div class="w-col w-col-6">
            <div class="text-block">Acheté le {{ $transaction->ordered_at }}</div>
        </div>
    </div>
    <div class="block_top-wrap">
        <div class="block_top-text-wrap">
            <div class="text-block-13">Publié {{ $offer->published_at }} par {{ $offer->user()->get()->fullName }}</div>
            <div class="block_followers">Offre: {{ $offer->code }}</div>
            <div class="block_followers">{{ $trajet()->depart }} -- {{ $trajet()->destination }}</div>
            <div class="block_followers">Arrivée: {{ $trajet->arrived_at }} </div>
        </div>
    </div>
    <div class="div-block-88"></div>
    <div class="block_text">
        @if( $offer->hasColis)
            Colis: {{ $transaction->colis_quantity }} kg ( {{ changeStr($transaction->currency, $request->currency, $transaction->colis_cost, $transaction->ordered_at) }} / kg)
        @else
        Colis: Aucun
        @endif
        <br>
    </div>
    <div class="block_text">
        @if( $offer->hasColis)
            Courrier: {{ $transaction->courrier_quantity }} kg ( {{ changeStr($transaction->currency, $request->currency, $transaction->courrier_cost, $transaction->ordered_at) }} / kg)
        @else
            Courrier: Aucun
        @endif
        <br>
    </div>
    <div class="block_text">Achat: {{ $transaction->code }}</div>
    <a href="{{ url("/detailsorder/$transaction->id") }}" class="button no-max-width outline btn-see w-button">Voir</a>
</div>
