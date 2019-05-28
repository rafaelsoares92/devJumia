<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
	<?= $this->Html->css('bootstrap.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
	
	
	<?= $this->Html->script('jquery-3.3.1.js') ?>
	<?= $this->Html->script('jquery.dataTables.min.js') ?>
	<?= $this->Html->script('dataTables.bootstrap4.min.js') ?>
	<?= $this->Html->script('dataTables.fixedHeader.min.js') ?>
	<?= $this->Html->script('Devjumia-index.js') ?>
</head>
<body>
	<main role="main" class="flex-shrink-0">
		<div class="container">
			<h1 class="mt-5">Phone Numbers</h1>
			<div class="col-md-12 order-md-1">
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>State</label>
						<select id="filter-state" class="form-control filterTable">
							<option>All</option>
							<option>OK</option>
							<option>NOK</option>
						</select>
					</div>
					<div class="col-md-6 mb-3">
						<label>Country</label>
						<select id="filter-country" class="form-control filterTable">
							<option>All</option>
							<?php foreach ($countries as $country) { ?>
								<option><?= $country->get('Country'); ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12 order-md-1">
				<div class="row">
					<table id="mainTable" class="table table-striped table-sm">
					  <thead>
						<tr>
						  <th>Country</th>
						  <th>State</th>
						  <th>Country Code</th>
						  <th>Phone Number</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php foreach ($phoneNumbers as $phoneNumber) { ?>
						<tr>
						  <td><?= $phoneNumber->get('Country'); ?></td>
						  <td>
						  <?php if ($phoneNumber->getState()) {
							echo '<span class="badge badge-success">OK</span>';
						  } else {
							echo '<span class="badge badge-danger">NOK</span>';
						  }
						  ?>
						  
						  </td>
						  <td><?= $phoneNumber->getCountryCode(); ?></td>
						  <td><?= $phoneNumber->getNumberWithoutCC(); ?></td>
						</tr>
						<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
