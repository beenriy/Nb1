<h2>Hírek, vélemények:</h2>
<form action="<?= SITE_ROOT ?>hirek" method="post">
	
	
	<textarea name="velemeny" id="velemeny" size="255">
	</textarea>
    
    <input type="submit" value="Küldés">
</form>



<?php foreach( $viewData['eredmeny'] as $key => $item ) { ?>
				<div><fieldset>
				     <?= $item['velemeny'] ?>
					<h1><?= $item['bejelentkezes'] ?></h1>
					<?= $item['datum'] ?>
				</fieldset></div>	
				
			<?php } ?>




