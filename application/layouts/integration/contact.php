<div class="row">
    <div class="medium-6 large-offset-1 columns">
        <h1 class="title_section">Écrivez-nous</h1>
        <form action="" data-parsley-validate>
            <div class="row">
                <div class="medium-6 columns">
                    <input type="text" placeholder="Prénom" required>
                </div>
                <div class="medium-6 columns">
                    <input type="text" placeholder="Nom" required>
                </div>
            </div>
            <div class="row">
                <div class="medium-6 columns">
                    <input type="text" placeholder="Téléphone">
                </div>
                <div class="medium-6 columns">
                    <input type="email" placeholder="Courriel" required>
                </div>
            </div>
            <div class="row">
                <div class="medium-12 columns">
                    <textarea name="" id="" placeholder="Votre message" required></textarea>
                </div>
            </div>
            <input type="submit" value="Soumettre" class="btn btn--primary">
        </form>
    </div>

    <div class="medium-3 medium-offset-1 columns">
        <h2 class="title_section">
            Contactez-nous
        </h2>
        <div class="row">
            <div class="medium-12 column">
                <a href="tel:5145818226">514.581.8226</a>
                <a href="mailto:info@comediestar.ca">info@comediestar.ca</a>
            </div>
        </div>

        <h3 class="title_section">
            Suivez-nous
        </h3>
        <div class="row">
            <div class="medium-12 column">
                socials
            </div>
        </div>
    </div>
</div>


<?php
    include('/application/layouts/components/contact/listing_villes.php');
    include('/application/layouts/components/bandeau/bandeau_vert_3.php');
    include('/application/layouts/components/bandeau/bandeau_infolettre.php');
?>