<?php  
session_start();
if($_SESSION['user_level']<>4)
{
	  header("Location:../../../index.php");
	  exit;
}

require_once("../../../core/controller/system/conn.php");
$con = connect();
$kec_kode=$_SESSION[kec_kode];	
?>
<!DOCTYPE html>
<html>
<?php include '../../../core/view/system/header.php'?>

<body class="md-skin">
    <div id="wrapper">
	<?php  include '../../../core/view/kecamatan/nav-sidebar.php' ?>
        <div id="page-wrapper" class="gray-bg">
        <?php include '../../../core/view/system/nav-top-up.php' ?>
		
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2> e-Musrenbang Sign In</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Tabel</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong> Data Usulan Kecamatan</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeIn">
            
            

			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

						
						<div class="ibox-title">
                        <div class="text-center">
                            <button data-toggle="modal" class="btn btn-primary dim" href="#modal-form-sosbud"><i class="fa fa-pencil"> Input Usulan <?php echo $_SESSION['user_name']  ?> Bidang Perencanaan Pemerintahan dan Pembangunan Manusia </i></button>			    

							<div id="modal-form-sosbud" class="modal fade" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 80%;">
                                    <div class="modal-content">
									<div class="modal-header">
										
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										
										</div>
										
                                        <div class="modal-body" >
										<h2 style="text-transform: uppercase;"><i class="fa fa-pencil"> Input Usulan <?php echo $_SESSION['user_name']  ?> Bidang Perencanaan Pemerintahan dan Pembangunan Manusia </i></h2>
											<br>

                        
                            <form method="POST" enctype="multipart/form-data" action="../../../core/controller/kecamatan/proses_input_usulan_kecamatan.php">
							
								<div class="form-group  row"><label class="col-sm-2 col-form-label">ID Kecamatan :</label>

                                    <div class="col-sm-10"><input type="text" name="id_kecamatan" required="" readonly value="<?php echo $kec_kode ;?>" class="form-control"></div>
                                </div>
                             
								<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Gampong :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="id_gampong" required=""> 
                                       <option value="" disabled="" selected="">-- Pilih Gampong --</option>
                                       	<?php
										
									$query_gampong= @pg_query($con, "SELECT * FROM kelurahan WHERE kec_kode='$kec_kode' ORDER BY kel_name ASC");
									while ($data_gampong = @pg_fetch_array($query_gampong)){
										$kel_kode = $data_gampong['kel_kode'];
										$kel_name = $data_gampong['kel_name'];
										?>			    
										<option value="<?php echo $kel_kode ?>"><?php echo $kel_name;
										} 
										?>
										</option>   
                                    </select>

                                    </div>
                                </div>
								
								    <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama Usulan :</label>

                                    <div class="col-sm-10"><input type="text" name="nama_usulan" required="" class="form-control"></div>
                                </div>
								
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Jumlah / Volume :</label>

                                    <div class="col-sm-10"><input type="number" name="volume" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Satuan :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="id_satuan" required="">
                                        <option value="" disabled="" selected="">-- Pilih satuan --</option>
                                        <?php 
									$query_satuan= @pg_query($con, "SELECT * FROM satuan ORDER BY nama_satuan ASC");
									while ($data_satuan = @pg_fetch_array($query_satuan)){
										$id_satuan = $data_satuan['id'];
										$nama_satuan = $data_satuan['nama_satuan'];
										?>			    
										<option value="<?php echo $nama_satuan ?>"><?php echo $nama_satuan; 
										} 
										?>
										</option>   
                                    </select>

                                    </div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Tipe Kegiatan :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="tipe_kegiatan" required="">
                                        <option value="" disabled="" selected="">-- Pilih Tipe Kegiatan --</option>
                                        <option value="Fisik"> Fisik </option>
										<option value="Non Fisik"> Non Fisik </option>
                                    </select>

                                    </div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Bidang :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="id_bidang_bappeda" required="" readonly>
									<?php 
									$query_bidang2= @pg_query($con, "SELECT * FROM bidang_bappeda where id='22'");
									while ($data_bidang2 = @pg_fetch_array($query_bidang2)){
										$id_bidang2 = $data_bidang2['id'];
										$nama_bidang2 = $data_bidang2['nama_bidang'];
										?>			    
										<option value="<?php echo $id_bidang2 ?>"><?php echo $nama_bidang2; 
										} 
										?>
									</option> 
                                    </select>

                                    </div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">SKPD Pelaksana :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="id_skpd" required="">
                                        <option value="" disabled="" selected="">-- Pilih SKPD Pelaksana --</option>
										<?php 
										$query_skpd = "SELECT * FROM skpd WHERE bidang_bappeda='22' ORDER BY nama_skpd ASC;";
										$result_skpd = @pg_query($con, $query_skpd);
										while ($data_skpd = @pg_fetch_array($result_skpd)){
											?>
											<option Value="<?php echo $data_skpd['id'] ?>"> <?php echo $data_skpd['nama_skpd'];
										
										}
										?>
									</option> 
                                    </select>

                                    </div>
                                </div>
								
								 <div class="form-group  row"><label class="col-sm-2 col-form-label">Lokasi :</label>

                                    <div class="col-sm-10"><input type="text" name="lokasi" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Kondisi Saat Ini :</label>

                                    <div class="col-sm-10"><input type="text" name="kondisi_saat_ini" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Tingkat Kebutuhan :</label>

                                    <div class="col-sm-10"><input type="text" name="tingkat_kebutuhan" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Dampak Kegiatan :</label>

                                    <div class="col-sm-10"><input type="text" name="dampak_kegiatan" required="" class="form-control"></div>
                                </div>
                               
							   	<div class="form-group  row"><label class="col-sm-2 col-form-label">Alasan Usulan :</label>

                                    <div class="col-sm-10"><input type="text" name="alasan_usulan" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Keterangan Lainnya :</label>

                                    <div class="col-sm-10"><input type="text" name="keterangan_lainnya" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Foto Kondisi Lapangan :</label>

                                    <div class="col-sm-10">
									<input type="file" name="foto_kondisi_lapangan" id="foto_kondisi_lapangan" accept="image/*" required="" class="form-control">
									<img src="#" id="data_foto_kondisi_lapangan" width="300"  />
			
									</div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Kontak Person Nama :</label>

                                    <div class="col-sm-10"><input type="text" name="cp_nama" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Kontak Person Alamat :</label>

                                    <div class="col-sm-10"><input type="text" name="cp_alamat" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Kontak Person No.hp :</label>

                                    <div class="col-sm-10"><input type="text" name="cp_hp" required="" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Tanggal Usulan :</label>

                                    <div class="col-sm-10"><input type="text" name="tanggal_usulan" required="" readonly value="<?php echo date("Y-m-d H:i:s");?>" class="form-control"></div>
                                </div>
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Status Usulan :</label>

                                    <div class="col-sm-10"><input type="text" name="status_usulan" required="" readonly value="draf_kecamatan" class="form-control"></div>
                                </div>
						
                                
                                <div class="hr-line-dashed"></div>
                                <div class="text-right">
                                    
                                       
                                        <button class="btn btn-primary dim" type="submit"><i class="fa fa-save"> Simpan Usulan </i></button>
										 <button class="btn btn-danger dim" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"> Batal </i></button>
                                    
                                </div>
                            </form>
                    
                   
                                    </div>
                                    </div>
                                </div>
                        </div>
						 </div>
						
						</div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

						
						<div class="ibox-title">
                        <div class="text-center">
                            <button data-toggle="modal" class="btn btn-warning dim" href="#modal-form-ekonomi"><i class="fa fa-pencil"> Input Usulan <?php echo $_SESSION['user_name']  ?> Bidang Perencanaan Perekonomian dan Sumber Daya Alam	</i></button>
							<div id="modal-form-ekonomi" class="modal fade" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 80%;">
                                    <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										
										</div>
                                        <div class="modal-body" >
										
											

                        
                            <form method="get">
                             
								<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Gampong :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                    </div>
                                </div>
								
								    <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama Pekerjaan :</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
								
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Jumlah / Volume :</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Satuan :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                    </div>
                                </div>
								
                               
								
                        
                                
                                <div class="hr-line-dashed"></div>
                                <div class="text-right">
                                    
                                       
                                        <button class="btn btn-primary dim" type="submit"><i class="fa fa-save"> Simpan Usulan </i></button>
										 <button class="btn btn-danger dim" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"> Batal </i></button>
                                    
                                </div>
                            </form>
                    
                   
                                    </div>
                                    </div>
                                </div>
                        </div>
						 </div>
						
						</div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

						
						<div class="ibox-title">
                        <div class="text-center">
                            <button data-toggle="modal" class="btn btn-danger dim" href="#modal-form-fisik"><i class="fa fa-pencil"> Input Usulan <?php echo $_SESSION['user_name']  ?> Bidang Perencanaan Pemerintahan dan Pembangunan Manusia			    
</i></button>
							<div id="modal-form-fisik" class="modal fade" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" style="max-width: 80%;">
                                    <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										
										</div>
                                        <div class="modal-body" >
										
											

                        
                            <form method="get">
                             
								<div class="form-group row"><label class="col-sm-2 col-form-label">Nama Gampong :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                    </div>
                                </div>
								
								    <div class="form-group  row"><label class="col-sm-2 col-form-label">Nama Pekerjaan :</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
								
								
								<div class="form-group  row"><label class="col-sm-2 col-form-label">Jumlah / Volume :</label>

                                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                                </div>
								
								<div class="form-group row"><label class="col-sm-2 col-form-label">Satuan :</label>

                                    <div class="col-sm-10"><select class="form-control m-b" name="account">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>

                                    </div>
                                </div>
								
                               
								
                        
                                
                                <div class="hr-line-dashed"></div>
                                <div class="text-right">
                                    
                                       
                                        <button class="btn btn-primary dim" type="submit"><i class="fa fa-save"> Simpan Usulan </i></button>
										 <button class="btn btn-danger dim" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"> Batal </i></button>
                                    
                                </div>
                            </form>
                    
                   
                                    </div>
                                    </div>
                                </div>
                        </div>
						 </div>
						
						</div>
                        <div class="ibox-content">
                           <!--isi konten -->
						   
						   
						
						 <!--isi konten-->
                        </div>
                    </div>
                </div>
            </div>
			
					
			
            <?php include '../../../core/view/system/footer.php' ?>
        </div>
        </div>

	 <?php include '../../../core/view/system/javascript.php' ?>
	 					<script>
									function bacaGambar(input) {
									   if (input.files && input.files[0]) {
										  var reader = new FileReader();
									 
										  reader.onload = function (e) {
											  $('#data_foto_kondisi_lapangan').attr('src', e.target.result);
										  }
									 
										  reader.readAsDataURL(input.files[0]);
									   }
									}
									$("#foto_kondisi_lapangan").change(function(){
									   bacaGambar(this);
									});

									</script>
</body>

</html>
