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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Name</th>
										<th>Keterangan</th>
										<!--<th>Action</th>-->
									</tr>
								</thead>
								<tbody>
								<!-- TABLE 1 -->
									<tr>
										<td colspan="2"><b>MANAJEMEN PERUBAHAN (5)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table1 as $data1): ?>
									<tr>
										<td width="50">
											<?php echo $data1->id_list ?>
										</td>
										<td width="850">
											<?php echo $data1->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data1->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data1->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 2 -->
									<tr>
										<td colspan="2"><b>PENATAAN PERATURAN PERUNDANG-UNDANGAN (5)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table2 as $data2): ?>
									<tr>
										<td width="50">
											<?php echo $data2->id_list ?>
										</td>
										<td width="850">
											<?php echo $data2->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data2->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data2->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 3 -->
									<tr>
										<td colspan="2"><b>PENATAAN DAN PENGUATAN ORGANISASI (6)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table3 as $data3): ?>
									<tr>
										<td width="50">
											<?php echo $data3->id_list ?>
										</td>
										<td width="850">
											<?php echo $data3->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data3->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data3->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 4 -->
									<tr>
										<td colspan="2"><b>PENATAAN TATALAKSANA (5)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table4 as $data4): ?>
									<tr>
										<td width="50">
											<?php echo $data4->id_list ?>
										</td>
										<td width="850">
											<?php echo $data4->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data4->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data4->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 5 -->
									<tr>
										<td colspan="2"><b>PENATAAN SISTEM MANAJEMEN SDM (15)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table5 as $data5): ?>
									<tr>
										<td width="50">
											<?php echo $data5->id_list ?>
										</td>
										<td width="850">
											<?php echo $data5->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data5->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data5->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 6 -->
									<tr>
										<td colspan="2"><b>PENGUATAN AKUNTABILITAS (6)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table6 as $data6): ?>
									<tr>
										<td width="50">
											<?php echo $data6->id_list ?>
										</td>
										<td width="850">
											<?php echo $data6->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data6->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data6->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>



									<!-- TABLE 7 -->
									<tr>
										<td colspan="2"><b>PENGUATAN PENGAWASAN (12) </b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table7 as $data7): ?>
									<tr>
										<td width="50">
											<?php echo $data7->id_list ?>
										</td>
										<td width="850">
											<?php echo $data7->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data7->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data7->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>





									<!-- TABLE 8-->
									<tr>
										<td colspan="2"><b>PENINGKATAN KUALITAS PELAYANAN PUBLIK (6)  </b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table8 as $data8): ?>
									<tr>
										<td width="50">
											<?php echo $data8->id_list ?>
										</td>
										<td width="850">
											<?php echo $data8->list ?>
										</td>
										<td width="200">
											<?php 
											$sql ="select * from files where table_id = '$data8->id_table' and header_document_id ='$document_id'" ;

											$query = $this->db->query($sql);
											$hasil = $query->result();
											// print_r ($hasil[0]->file_path);


											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://reskrimsitubondo.com/e-pmprb/berkas/<?php echo $hasil[0]->file_path ?>" class="btn btn-small text-default"></i> View</a>
												<a data-toggle="modal" data-target="#hapus_new" data-id="<?=$data8->id_table;?>"  href="#hapusFile" class="open-hapusFile btn btn-danger btn-sm"><i class="fas fa-plus"></i> Hapus</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
									</tr>
									<?php  endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>


		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->






	<?php $this->load->view("admin/_partials/js.php") ?>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?> 

	<!-- <script type="text/javascript" src="<?php echo base_url().'assets/uploadjs/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/uploadjs/bootstrap.js'?>"></script> -->
</body>




<div class="row">
  <div id="modal_add_new" class="modal fade">
    <div class="modal-dialog">      
      <form class="form-horizontal" id="submit">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Upload Berkas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


    <div class="modal-body">
        <input type="hidden" readonly value="<?=$document_id;?>" name="header_document_id" class="form-control" >
        <input type="hidden" name="id_table" id="id_table" value=""/>
         <div class="form-group">
         	<label class="control-label col-xs-3" >Attachment</label>
            <div class="col-xs-8">
            <input name="file_name_berkas" class="form-control" type="file"  required>
            </div>
        </div>
        <div class="form-group">
        	<label class="control-label col-xs-3" >Keterangan</label>
            <div class="col-xs-8">
            <input name="keterangan" class="form-control" type="text" placeholder="Keterangan" required>
            </div>
        </div>
    </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
          </div>
        </form>
    </div>
  </div>
</div>





<div class="row">
  <div id="hapus_new" class="modal fade">
    <div class="modal-dialog">      
      <form class="form-horizontal" id="submitx">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Hapus Berkas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


    <div class="modal-body">
        <input type="text" readonly value="<?=$document_id;?>" name="header_document_id" class="form-control" >
        <input type="text" name="id_table" id="id_tablex" value=""/>
         
         <div class="alert alert-warning" role="alert">
		  Apakah anda akan menghapus file berkas ini?
		</div>
    </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			<button class="btn btn-success" id="btn_hapus" type="submit">Yes</button>
          </div>
        </form>
    </div>
  </div>
</div>



	<script type="text/javascript">
		$(document).on("click", ".open-uploadFile", function () {
	     var myIdtable = $(this).data('id');
	     	$(".modal-body #id_table").val( myIdtable );
		});


		$(document).on("click", ".open-hapusFile", function () {
	     var myIdtable = $(this).data('id');
	     	$(".modal-body #id_tablex").val( myIdtable );
		});



		$('#submit').submit(function(e){
			// alert("kecelok");
		    e.preventDefault(); 
		         $.ajax({
		             url:'<?php echo base_url();?>index.php/admin/document/do_upload_fix',
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
		                  alert("Upload Berhasil");
		                  location.reload(); 
		           }
		         });
		});

		$('#submitx').submit(function(e){
			// alert("kecelok");
		    e.preventDefault(); 
		         $.ajax({
		             url:'<?php echo base_url();?>index.php/admin/document/hapus_file',
		             type:"post",
		             data:new FormData(this), //this is formData
		             processData:false,
		             contentType:false,
		             cache:false,
		             async:false,
		              success: function(data){
		                  alert("Hapus File Berhasil");
		                  location.reload(); 
		           }
		         });
		});
	</script>

</html>
