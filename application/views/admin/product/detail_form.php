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
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="2"><b>MANAJEMEN PERUBAHAN (5)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table1 as $data1): ?>
									<tr>
										<td width="50">
											<?php echo $data1->id_list ?>
										</td>
										<td width="1000">
											<?php echo $data1->list ?>
										</td>
										<td>
											<?php 
											$sql ="select * from files where table_id = '$data1->id_table'" ;
											$query = $this->db->query($sql);
											if ($query->num_rows() > 0) {?>
												<a target="_blank" href="http://localhost/ultima_diklat/berkas/" class="btn btn-small text-default"></i> View</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
										<td>
											<a data-toggle="modal" data-target="#modal_add_new<?=$data1->id_table;?>" href="<?php echo site_url('admin/document/detail/'.$data1->id_table) ?>"
											 class="btn btn-small text-success"><i class="fas fa-plus"></i> Upload</a>
										</td>
									</tr>
									<?php  endforeach; ?>
								</tbody>


								<tbody>
									<tr>
										<td colspan="2"><b>PENATAAN PERATURAN PERUNDANG-UNDANGAN (5)</b></td>
										<td></td>
									</tr>
									<?php foreach ($detail_table2 as $data2): ?>
									<tr>
										<td width="50">
											<?php echo $data2->id_list ?>
										</td>
										<td width="1000">
											<?php echo $data2->list ?>
										</td>
										<td>
											<?php 
											$sql ="select * from files where table_id = '$data1->id_table'" ;
											$query = $this->db->query($sql);
											if ($query->num_rows() > 0) {?>
												<a href="" class="btn btn-small text-default"></i> View</a>
											<?php }else{?>
												<a href="" class="btn btn-small text-danger"></i> Kosong</a>
											<?php }?>
										</td>
										<td>
											<a data-toggle="modal" data-target="#modal_add_new<?=$data2->id_table;?>" href="<?php echo site_url('admin/document/detail/'.$data2->id_table) ?>"
											 class="btn btn-small text-success"><i class="fas fa-plus"></i> Upload</a>
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






<!-- /////////////////////modal/////////////////// -->
<!-- Ini ada pengulangan Modal mas -->
<!-- iyo iku kanggo jukuk value ne dari button detail sing nang main  -->

<!-- Main attribute class & data mas biasanya kalau ada modal begini -->
<!-- <?php $no=0; foreach($detail_table1 as $row): $no++; ?>  -->

<!-- <?php endforeach; ?> -->



<!-- 
piye bay
sorry

Iki Modale perbaris a mas ?
menu endi mas ?
 -->






	<!-- <script type="text/javascript" src="<?php echo base_url().'assets/uploadjs/jquery-3.2.1.js'?>"></script> -->
	<script type="text/javascript" src="<?php echo base_url().'assets/uploadjs/bootstrap.js'?>"></script>

	<script type="text/javascript">
		// alert("0000");
	$(document).ready(function(){
		// alert("1111111111111");
		// $('#submit').submit(function(e){
		// 	alert("");
		//     e.preventDefault();

		//     var formData = new FormData,
		//     formData.append("file_name_berkas", $("[name=file_name_berkas]").prop("files")[0]),
		//     var file_ = $("[name=file_name_berkas]").prop("files")[0],
		//     formData.append("name", file_),

		//          $.ajax({
		//              url:'<?php echo base_url();?>index.php/admin/document/do_upload_fix',
		//              type:"post",
		//              data:new FormData(this),
		//              processData:false,
		//              contentType:false,
		//              cache:false,
		//              async:false,
		//               success: function(data){
		//                   alert("Upload Image Berhasil.");
		//            }
		//          });
		//     });

		$(".b"tn)



	});
	</script>



	<?php $this->load->view("admin/_partials/js.php") ?>
	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?> 


</body>


<!-- <div class="row">
  <div id="modal_add_new<?=$row->id_table;?>" class="modal fade">
    <div class="modal-dialog">      
      <form class="form-horizontal" id="submit">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Upload Berkas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


    <div class="modal-body">
    	<input type="text" readonly value="<?=$row->id_table;?>" name="id_table" class="form-control" >
        <input type="text" readonly value="<?=$document_id;?>" name="header_document_id" class="form-control" >

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
</div> -->

</html>
