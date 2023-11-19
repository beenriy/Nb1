


<div class=""container>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
		<table class="table table-striped table-bordered table-hover">
				<caption>Játékosok posztjai</caption>
			<thead>
				<tr>
					<th>ID</th><th>Poszt neve</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $viewData as $key => $item ) { ?>
				<tr>
					<td><?= $item['posztid'] ?></td>
					<td><?= $item['nev'] ?></td>
				</tr>	
			<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2">&copy; 2023 Játékosügynök Bt.</td>
				</tr>		
			</tfoot>
		</table>
		</div>
		<div class="col-2"></div>
	</div>
</div>