<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("unit/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("unit/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("unit/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("unit/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('unit/document/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Keterangan</th>
										<th>Unit</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									
									<?php $no =1; foreach ($products as $product): ?>
									<tr>
										<td width="50"><?php echo $no ?></td>
										<td width="350">
											<?php echo $product->name ?>
										</td>
										<td width="50">
											<?php echo "Unit ".$product->type_unit ?>
										</td>
										
										<td width="300">
											<a href="<?php echo site_url('unit/document/detail/'.$product->header_document_id) ?>"
											 class="btn btn-small text-warning"><i class="fas fa-plus"></i> Detail</a>
											<a href="<?php echo site_url('unit/document/edit/'.$product->header_document_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('unit/document/delete/'.$product->header_document_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									
									<?php $no++; endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("unit/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("unit/_partials/scrolltop.php") ?>
	<?php $this->load->view("unit/_partials/modal.php") ?>

	<?php $this->load->view("unit/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
