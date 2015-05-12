<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_vert_1.php');
?>
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
                        <a href="/ville/<?php echo $key; ?>">
                            <img src="/application/images/villes/<?php echo $key; ?>.png" alt="<?php echo $ville['nom']; ?>">
                            <img src="/application/images/villes/<?php echo $key; ?>-hover.png" alt="<?php echo $ville['nom']; ?>">
                        </a>
                        <h2 class="title_section">
                            <a href="/ville/<?php echo $key; ?>"><?php echo $ville['nom']; ?></a>
                        </h2>
                        <span>
                            <a href="/ville/<?php echo $key; ?>"><?php echo $ville['salle']; ?></a>
                        </span>
                    </article>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</div>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_video_2.php');
    include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/components/bandeau/bandeau_fanclub.php');
?>