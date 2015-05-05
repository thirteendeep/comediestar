<br>
<br>
<br>

<div class="row">
    <div class="medium-6 large-offset-1 columns">
        <h1 class="title_section">Écrivez-nous</h1>
        <form action="">
            <div class="row">
                <div class="medium-6 columns">
                    <input type="text" placeholder="Prénom">
                </div>
                <div class="medium-6 columns">
                    <input type="text" placeholder="Nom">
                </div>
            </div>
            <div class="row">
                <div class="medium-6 columns">
                    <input type="text" placeholder="Téléphone">
                </div>
                <div class="medium-6 columns">
                    <input type="email" placeholder="Courriel">
                </div>
            </div>
            <div class="row">
                <div class="medium-12 columns">
                    <textarea name="" id="" placeholder="Votre message"></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn--primary" value="Soumettre">
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
                <a href="tel:5145818226">514.581.8226</a>
                <a href="mailto:info@comediestar.ca">info@comediestar.ca</a>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>


<div class="row">
    <div class="large-10 large-offset-1 column">
        <ul class="large-block-grid-3">
            <?php
            foreach($villes as $key => $ville) {
                ?>
                <li>
                    <article>
                        <?php
                            echo $ville['nom']."<br>";
                            echo $ville['salle']."<br>";
                            echo $ville['billetterie']['phone']."<br>";
                            echo "<a href='".$ville['billetterie']['url']."'>Consulter le site web</a>";

                        ?>
                    </article>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>

<br>
<br>
<br>


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
                Alexandre Sandoval
            </h2>
            <a href="#"> 514.851.8226</a>
            <br>
            <a href="" class=" mail">asandoval@comediestar.ca</a>
        </div>
    </div>
</div>
<div class="bandeau-infolettre">
    <div class="row">
        <form action="">
            <div class="medium-2 columns">
                <span>
                    Infolettre
                </span>
            </div>
            <div class="medium-2 columns">
                <input type="text" placeholder="Prénom">
            </div>
            <div class="medium-2 columns">
                <input type="text" placeholder="Nom">
            </div>
            <div class="medium-2 columns">
                <input type="text" placeholder="Ville">
            </div>
            <div class="medium-2 columns">
                <input type="email" placeholder="Courriel">
            </div>
            <div class="medium-2 columns">
                <button class="btn btn--primary">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</div>