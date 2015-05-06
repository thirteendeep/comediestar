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