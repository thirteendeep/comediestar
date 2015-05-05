<div class="bandeau">
    <div class="row">
        <div class="medium-12 large-4 columns">
            <h1>
                Forfaits
                <strong>
                    corporatifs
                </strong>
            </h1>
        </div>
        <div class="medium-12 large-8 columns">
            <h2>
                À la recherche d’un événement pour votre entreprise?
            </h2>
            <em>
                Nous offrons des forfaits corporatifs à partir de seulement 350$
            </em>
            <a href="" class="btn btn--transparent ticket">Renseignez-vous</a>
        </div>
    </div>
</div>
<div class="row villes">
    <div class="large-12 column">
        <span class="title_page">
            Selectionnez votre ville
        </span>
        <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
            <?php
            foreach($villes as $key => $ville) {
                ?>
                <li>
                    <article>
                        <a href="<?php echo $ville['nom']; ?>">
                            <img src="/application/images/villes/<?php echo $ville['nom']; ?>" alt="<?php echo $ville['nom']; ?>">
                        </a>
                        <h2 class="title_section">
                            <a href="<?php echo $ville['nom']; ?>"><?php echo $ville['nom']; ?></a>
                        </h2>
                        <span>
                            <a href="<?php echo $ville['nom']; ?>"><?php echo $ville['salle']; ?></a>
                        </span>
                    </article>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<div class="bandeau-video">
    <div class="row">
        <div class="large-6 columns">
            <h2 class="title_section">
                Les galas comédie star
            </h2>
            <p>
                Les Galas Comédie Star sont des spectacles d’humour qui sont présentés à l’Étoile du Quartier Dix30 mettant en vedette des humoristes de la relève, des vétérans de la scène et aussi des vedettes internationales. On peut dire que c’est un pot-pourri d’humoristes triés sur le volet.
            </p>
            <a href="" class="btn btn--primary">Et encore plus!</a>
        </div>
        <div class="large-6 columns">
            <div class="video">
                <img src="http://placehold.it/350x150" alt="">
            </div>
        </div>
    </div>
</div>
<div class="bandeau-fanclub">
    <a href="#"></a>
    <div class="row">
        <div class="medium-6 large-6 columns">
            <h2 class="title_section">Abonnez-vous à notre fan club</h2>
            <ul class="small-block-grid-2">
                <li>
                    <span>
                        <i class="fa fa-users"></i>
                        Meilleures places
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-paper-plane"></i>
                        Infolettre
                    </span>
                </li>
                <li>
                    <span> 
                        <i class="fa fa-gift"></i>
                        Concours
                    </span>
                </li>
                <li>
                    <span>
                        <i class="fa fa-ticket"></i>
                        Pré-vente
                    </span>
                </li>
            </ul>
        </div>
        <div class="medium-6 large-6 columns">
            <form action="">
                <div class="row">
                    <div class="small-6 columns">
                        <input type="text" placeholder="Prénom">
                    </div>
                    <div class="small-6 columns">
                        <input type="text" placeholder="Nom">
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 column">
                        <input type="text" placeholder="Ville">
                        <div class="submit-container">
                            <input type="email" placeholder="Courriel">
                            <button type="submit"></button> 
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>