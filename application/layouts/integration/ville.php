<div id="ville-selector">
    <div class="circle"><i class="fa fa-angle-up"></i></div>
    <div class="inner">
        <div class="title">
            Changer de ville
        </div>
        <div class="row villes">
            <div class="small-12 column">
                <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-4">
                    <?php
                    foreach($villes as $key => $ville) {
                        ?>
                        <li>
                            <article>
                                <a href="/ville/<?php echo $key; ?>">
                                    <img src="/application/images/villes/<?php echo $key; ?>.png" alt="<?php echo $ville['nom']; ?>">
                                    <img src="/application/images/villes/<?php echo $key; ?>-hover.png" alt="<?php echo $ville['nom']; ?>">
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
    </div>
</div>
<div class="bandeau-gala">
    <div class="row">
        <div class="medium-5 columns">
            <div>Prochain Gala</div>
            <div><?= $villes[$_GET['ville']]['date'] ?></div>

            <div>
                Animé par <br>
                <span><?= $villes[$_GET['ville']]['animateur'] ?></span>
            </div>

            <div class="logo">
                logo
            </div>
            <div class="billetterie">
                <span>Billetterie</span>
                <a href="#" class="tel"><?= $villes[$_GET['ville']]['billetterie']['phone'] ?></a> <br>
                <a href="<?= $villes[$_GET['ville']]['billetterie']['phone'] ?>" target="_blank">Consulter le site web</a>
            </div>
        </div>
        <div class="large-7 columns">
            <?php
            foreach (array_reverse($villes[$_GET['ville']]['humoriste']) as $key => $humorsite) {
                ?>
                <div class="animateur">
                    <img src="/application/images/galas/artistes/artiste_01.jpg">
                    <span>
                        <?= $humorsite['prenom']; ?>
                        <strong>
                            <?= $humorsite['nom']; ?>
                        </strong>
                    </span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_video_2.php');
include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_vert_1.php');
include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_infolettre.php');

