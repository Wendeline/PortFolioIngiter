<div id="ProjetPerso">
    <?php foreach (Article::where('categ','ProjetPerso')->get() as $article): ?>
        <div class="row projetsBackground">
            <div class="col m5 s12 projetsBorder">
                <div class="row projetsSlash">
                    <div class="col s12">
                        <h1 class="right h1Project"><?php echo $article->titre; ?></h1>
                    </div>
                    <div class="col offset-s4 s8">
                        <p class="pTOProjet"><?php echo $article->texte; ?></p>
                    </div>
                    <div class="col s12">
                            <?php
                                echo ' <div class="right">';
                                foreach ($article->Competence()->get() as $competence) {
                                    echo '<div class="chip">
                                            '. $competence->lib .'
                                          </div>';
                                }
                                echo ' </div>';
                            ?>
                    </div>
                </div>
            </div>
            <div class="col m7 s12">
                <div class="projectPhoto">
                <?php
                    $i = 0;
                    foreach ($article->Photos()->get() as $key => $photo):
                        if ($i % 2 == 0) { echo '<div class="row">'; }
                ?>
                            <div class="col s6">
                                <img class="responsive-img materialboxed" src="<?php echo img_url($photo->img) ;?>">
                            </div>
                <?php
                        $i++;
                        if ($i % 2 == 0) { echo '</div>'; }
                    endforeach;
                    if ($i % 2 == 1) { echo '</div>'; }
                ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
