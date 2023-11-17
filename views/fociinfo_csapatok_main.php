<h2>
    <br>Csapatok:<br>
    <hr>
</h2>
                           
<?php foreach( $viewData as $key => $item ) { ?>
                            <div>
                            <img src="<?= $item['url'] ?>"/><br>
                             <span><?= $item['csapatnev'] ?></span>   
                            </div>
                        <?php } ?>