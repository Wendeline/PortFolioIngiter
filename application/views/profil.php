<div class="bg1">
    <div class="noMargeBottom noMargeTop row">
        <div class="col s4 imgParfaite" style=" background:url('<?php echo img_url('ME.jpg');?>')">
        </div>
        <div class="col s8">
            <h3  class="center" style="font-size:2vw">Dévellopeur Web / WebDesigner / Graphiste</h3>
        </div>
        <div class="col s8 row">
            <hr>
            <div class="col s7">
                <h5>Moi</h5>
                <p>Etudiant en Dévellopement informatique, Auto-entrepreneur en Communication Print et Web.</p>
                <p>Passionner d'art, de bande dessiner, et d'humour noir</p>
            </div>

            <div class="col s3">
                <h5>Mes Liens</h5>
                <?php
                    $links = Link::all();

                    echo '<ul>';
                        foreach ($links as $link) {
                            echo '<li>'. '<a target="_blank" href="'. $link->link .'">'. $link->nom . '</a>' . '<li>';
                        }
                    echo '</ul>';
                ?>
            </div>

            <div class="col s3">
                <h5>Mes Sites</h5>
                <?php
                    $links = Site::all();

                    echo '<ul>';
                        foreach ($links as $link) {
                            echo '<li>'. '<a target="_blank" href="'. $link->link .'">'. $link->nom . '</a>' . '<li>';
                        }
                    echo '</ul>';
                ?>
            </div>

        </div>
    </div>
</div>
