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
    <div class="row" style="background-image:url('<?= $villes[$_GET['ville']]['image_animateur'] ?>')">
        <div class="smal-12 medium-5 columns">
            <div class="title_section">Prochain Gala</div>
            <div class="title_section">
                <strong><?= $villes[$_GET['ville']]['date'] ?></strong>
            </div>

            <div class="animation">
                Animé par <br>
                <span><?= $villes[$_GET['ville']]['animateur'] ?></span>
            </div>

            <div class="logo">
                <img src="<?= $villes[$_GET['ville']]['billetterie']['logo'] ?>" alt="<?= $villes[$_GET['ville']]['billetterie']['nom'] ?>">
            </div>
            <div class="billetterie">
                <span>Billetterie</span>
                <a href="#" class="tel"><?= $villes[$_GET['ville']]['billetterie']['phone'] ?></a>
                <a href="<?= $villes[$_GET['ville']]['billetterie']['url'] ?>" target="_blank">Consulter le site web <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
        <div class="small-12 medium-7 columns">
            <div class="clearfix">
                <?php
                foreach (array_reverse($villes[$_GET['ville']]['humoriste']) as $key => $humorsite) {
                    ?>
                    <div class="animateur">
                        <img src="<?= $humorsite['image']; ?>">
                        <span>
                            <?= $humorsite['prenom']; ?>
                            <strong>
                                <?= $humorsite['nom']; ?>
                            </strong>
                        </span>
                    </div>
                    <?php } ?>
                </div>
                <div class="btn-container">
                    <a href="<?= $villes[$_GET['ville']]['billetterie']['url'] ?>" target="_blank" class="btn btn--billet">Acheter vos billets</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_video_2.php');
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_vert_1.php');
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_infolettre.php');

