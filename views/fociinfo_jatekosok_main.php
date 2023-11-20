
<div class=""container>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">
		<table class="table table-striped table-bordered table-hover">
				
			<thead>
				<tr>
					<th>Labdarúgó ID</th>
					<th>Mezszám</th>
					<th>Klub ID</th>
					<th>Poszt ID</th>
					<th>Utónév</th>
					<th>Vezetéknév</th>
					<th>Születési idő</th>
					<th>Magyar</th>
					<th>Külföldi</th>
					<th>Értéke</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach( $viewData as $key => $item ) { ?>
				<tr>
					<td><?= $item['labdarugoid'] ?></td>
					<td><?= $item['mezszam'] ?></td>
					<td><?= $item['klubid'] ?></td>
					<td><?= $item['posztid'] ?></td>
					<td><?= $item['utonev'] ?></td>
					<td><?= $item['vezeteknev'] ?></td>
					<td><?= $item['szulido'] ?></td>
					<td><?= $item['magyar'] ?></td>
					<td><?= $item['kulfoldi'] ?></td>
					<td><?= $item['ertek'] ?></td>
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