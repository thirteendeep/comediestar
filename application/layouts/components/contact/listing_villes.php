<div class="row section listing-ville-block-grid">
    <div class="large-10 large-offset-1 column">
        <h2 class="title_section">
            Les billetteries
        </h2>
        <ul class="small-block-grid-1 medium-block-grid-3 section">
            <?php
            foreach($villes as $key => $ville) {
                ?>
                <li>
                    <article>
                        <h3><?= $ville['nom']; ?></h3>
                        <span><?= $ville['salle']; ?></span>
                        <a href="tel:<?= $ville['billetterie']['phone'] ?>" class="tel"><?= $ville['billetterie']['phone'] ?></a>
                        <a href="<?= $ville['billetterie']['url']; ?>">Consulter le site web <i class="fa fa-angle-double-right"></i></a>
                    </article>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>