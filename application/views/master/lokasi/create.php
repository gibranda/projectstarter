<?php section('content') ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Lokasi</h3>
		</div>
		<?= $this->form->open() ?>
			<?php getview('lokasi/form') ?>
		<?= $this->form->close() ?>
	</div>
<?php endsection() ?>

<?php getview('layouts/layout') ?>