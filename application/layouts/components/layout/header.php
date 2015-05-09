<div class="header_container 
    <?php echo ($content != "accueil") ? "tiny" : "";?> 
    <?php echo ($content == "ville") ? "ville" : "";?> 
">
    <div class="row">
        <div class="large-12 column">
            <header>
                <a href="/" class="logo"></a>
                <div class="clearfix">
                    <ul class="barre_technique">
                        <li>
                            <select>
                                <option value="0">Choisir une ville</option>
                                <?php
                                foreach ($villes as $key => $ville) {
                                    ?>
                                    <option value="<?=$key;?>" <?php echo ($key == @$_GET['ville']) ? "selected" : ""; ?>>
                                        <?= $ville['nom']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select> 
                        </li>
                        <li>
                            <a href="tel:5145818226">514.581.8226</a>
                        </li>
                        <li>
                            <a href="mailto:info@comediestar.ca" class="courriel" target="_blank"></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/comediestar" class="facebook" target="_blank"></a>
                        </li>
                        <li>
                            <a href="http://www.youtube.com/user/comediestar" class="youtube" target="_blank"></a>
                        </li>
                    </ul>
                    <br>
                    <ul id="main-nav">
                        <li>
                            <a href="/les-galas" class="<?php echo ($content == "galas") ? "selected" : "" ?>">Les galas<span>comédie star</span></a>
                        </li>
                        <li style="">
                            <a href="/forfait-corporatif" class="<?php echo ($content == "forfait") ? "selected" : "" ?>">Forfait<span>corporatif</span></a>
                        </li>
                        <li>
                            <a href="/agence-comedie-star" class="<?php echo ($content == "agence") ? "selected" : "" ?>">L'agence<span>comédie star</span></a>
                        </li>
                        <li>
                            <a href="/contactez-nous" class="<?php echo ($content == "contact") ? "selected" : "" ?>">contactez-<span>nous</span></a>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <h1 class="title_page">
                        <strong>Le gala d'humour</strong>
                        arrive dans votre région!
                    </h1>
                    <em>Comédie Star part enfin en tournée à travers le Québec.</em>
                    <strong>5 humoristes vedettes. 1 seul soir.</strong>
                </div>
                <?php

                if (isset($_GET['ville'])) {
                    $ville = $_GET['ville'];
                ?>
                <div class="container-ville">
                    <h3 class="title_page"><?= $villes[$ville]['nom']; ?></h3>
                    <span>
                        <?= $villes[$ville]['salle']; ?>
                    </span>
                </div>
                <?php
                }
                ?>
            </header>
            
        </div>

    </div>
</div>
