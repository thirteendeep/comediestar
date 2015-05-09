<div class="row sectionX2 contact">
    <div class="medium-6 large-offset-1 columns">
        <div id="confirmation-form-contact">
            <div class="table">
                <div>
                    <h2>Message envoyé!</h2>
                    <p>
                        Merci pour votre demande! <br>
                        Sachez que nous vous répondrons dans les plus bref délais! <br>
                        À bientôt</p>
                    </div>
                </div>
                <a href="#">Retour au formulaire <i class="fa fa-angle-double-right"></i></a>
            </div>
            <h1 class="title_section">Écrivez-nous</h1>
            <form id="form-contact" class="section" action="" data-parsley-validate>
                <div class="row">
                    <div class="medium-6 columns">
                        <input type="text" name="prenom" placeholder="Prénom" required>
                    </div>
                    <div class="medium-6 columns">
                        <input type="text" name="nom" placeholder="Nom" required>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-6 columns">
                        <input type="text" name="telephone" placeholder="Téléphone">
                    </div>
                    <div class="medium-6 columns">
                        <input type="email" name="courriel" placeholder="Courriel" required>
                    </div>
                </div>
                <div class="row">
                    <div class="medium-12 columns">
                        <textarea name="message" id="" placeholder="Votre message" required></textarea>
                    </div>
                </div>
                <input type="submit" value="Soumettre" class="btn btn--primary">
            </form>
        </div>

        <div class="medium-4 medium-offset-1 columns">
            <h2 class="title_section">
                Contactez-nous
            </h2>
            <div class="row section">
                <div class="medium-12 column infos">
                    <a href="tel:5145818226" class="tel">514.581.8226</a>
                    <a href="mailto:info@comediestar.ca" class="email">info@comediestar.ca</a>
                </div>
            </div>

            <h3 class="title_section section">
                Suivez-nous
            </h3>
            <div class="row socials">
                <div class="medium-12 column">
                    <a href="https://www.facebook.com/comediestar?fref=ts" target="_blank" class="btn btn--socials"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/user/comediestar"  target="_blank" class="btn btn--socials"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('/application/layouts/components/contact/listing_villes.php');
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_vert_3.php');
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_infolettre.php');
    ?>