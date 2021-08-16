
@extends("layouts.layout")

@section("content")
<div id="Use-Case-2" class="section grey section-padding-high wf-section">
    <h1 class="heading-1 _850-width centre">Comment ça marche</h1>
    <div class="wrapper horizontal-flex">
      <div class="w-layout-grid grid-3">
        <div class="wrapper-450-width left-aligned">
          <h1 class="heading-3">Etape 1</h1>
          <p class="paragraph">Le <strong>vendeur</strong>, une fois sur le site, <span><strong>se connecte</strong> (ou <strong>s&#x27;inscrit</strong>)</span>, puis <strong>publie une offre</strong> en précisant les détails du trajet (départ, destination, date d&#x27;arrivée, billet d&#x27;avion) ainsi que le prix de vente et la quantité en kilogrammes du colis et/ou s&#x27;il adhère à transporter des courriers</p>
        </div><img src={{asset("../images/Img1.gif")}} loading="lazy" alt="" class="img-how"><img src={{asset("../images/Img2.gif")}} loading="lazy" alt="" class="img-how">
        <div class="wrapper-450-width left-aligned">
          <h1 class="heading-3">Etape 2</h1>
          <p class="paragraph">L&#x27; <strong>acheteur</strong>, quant à lui une fois sur le site, effectue une <strong>recherche de publications</strong> d&#x27;offres.<br>Par la suite, il en sélectionne une, puis renseigne la quantité en kilogrammes du colis et/ou le nombre de courrier à transporter.<br>Enfin, il procède au <strong>paiement</strong> en ligne de la somme totale afin de <strong>valider sa réservation</strong></p>
        </div>
        <div class="wrapper-450-width left-aligned">
          <h1 class="heading-3">Etape 3</h1>
          <p class="paragraph">Après la confirmation de la réservation, une fois le colis en sa possession, le vendeur s&#x27;assure que ce dernier ne contient aucun produit illicite. Le cas échéant, le vendeur communique le code reçu auparavant par mail à l&#x27;acheteur. <br>L&#x27;acheteur s&#x27;assure à son tour de bien valider ce code.<br>Le colis est maintenant en cours de route.</p>
        </div><img src={{asset("../images/Img2.gif")}} loading="lazy" alt="" class="img-how"><img src={{asset("../images/Img4.gif")}} loading="lazy" alt="" class="img-how">
        <div class="wrapper-450-width left-aligned">
          <h1 class="heading-3">Etape 4</h1>
          <p class="paragraph">Le jour de la livraison, l&#x27;acheteur s&#x27;assure que le colis qu&#x27;il a reçu est bien le sien. Dans ce cas, il communique un code reçu par mail au vendeur.<br>Le vendeur, à son tour s&#x27;assure de bien valider le code. Ensuite ce dernier recevra son paiement.<br></p>
        </div>
      </div>
    </div>
  </div>

  @stop
