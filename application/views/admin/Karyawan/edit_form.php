<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/Karyawan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Karyawan/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $karyawan->karyawan_id?>" />

              <div class="form-group">
								<label for="Id">Id*</label>
								<input class="form-control <?php echo form_error('Id') ? 'is-invalid':'' ?>"
								 type="number" name="Id" placeholder="Karyawan id" value="<?php echo $karyawan->Id ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Id') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Name">Nama*</label>
								<input class="form-control <?php echo form_error('Name') ? 'is-invalid':'' ?>"
								 type="text" name="Name" placeholder="karyawan name" value="<?php echo $karyawan->Name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Address">Alamat</label>
								<input class="form-control <?php echo form_error('Address') ? 'is-invalid':'' ?>"
								 type="text" name="Address" min="0" placeholder="karyawan address" value="<?php echo $karyawan->Address ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Address') ?>
								</div>
							</div>


              <div class="form-group">
								<label for="Telpon">Telpon</label>
								<input class="form-control <?php echo form_error('Telpon') ? 'is-invalid':'' ?>"
								 type="text" name="Telpon" min="0" placeholder="karyawan telp" value="<?php echo $karyawan->Telpon ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Telpon') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
