<?php 

require_once("../../../core/controller/system//conn.php");
$con = connect();



$query = "SELECT  * from usulan_kecamatan
				where
				 status='diproses skpd' 
				and usulan_kecamatan.id=$_POST[id]";
				
$result=@pg_query($con, $query);
$rows = @pg_fetch_array($result);

$query2 = "SELECT  hasil_rakortek.*,sumber_dana.*,satuan.* from hasil_rakortek,sumber_dana,satuan
				where 
				hasil_rakortek.id_usulan_kecamatan=$_POST[id]
				and sumber_dana.id_sumber_dana=hasil_rakortek.id_sumber_dana
				and satuan.id=hasil_rakortek.satuan_baru
				";
				
$result2=@pg_query($con, $query2);
$rows2 = @pg_fetch_array($result2);
?>

<style type="text/css">
    .gambar{
        width: 360px;
        height: auto;
    }

    .fileUpload{
        position: relative;
        overflow: hidden;
        margin:10px;
    }

    .fileUpload input.uplaod{
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter:alpha(opacity= 0);
    }

</style>

        <input type="hidden" id="id" name="id"  value="<?php echo $_POST[id];?>">
        <div class="form-group">
            <label for="nklm" class="col-md control-label">Nama Kegiatan Lama :</label>
            <div class="col-md">
                <input type="text" id="nklm" name="nklm" class="form-control" value="<?php echo $rows[nama_pekerjaan];?>" autofocus required>
                <span class="help-block with-errors"></span>
            </div>
            <div class="form-group">
                <label for="pnu" class="col-md control-label">Perbaikan Nama Usulan :</label>
                <div class="col-md">
                    <input type="text" id="pnu" name="pnu" class="form-control" value="<?php echo $rows2[nama_kegiatan_baru];?>" autofocus required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>            
			<div class="form-group">
                <label for="tl" class="col-md control-label">Tindak Lanjut :</label>
                <div class="col-md">
                    <input type="text" id="tl" name="tl" class="form-control" value="<?php echo $rows2[tindak_lanjut];?>" autofocus required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>            
			<div class="form-group">
                <label for="sd" class="col-md control-label">Sumber Dana :</label>
                <div class="col-md">
                    

					  <select class="form-control" id="sd" name="sd">
					  <option value="<?php echo $rows2[id_sumber_dana] ?>" ><?php echo $rows2[nama_sumber_dana] ?></option>
									<?php
							             $query3="SELECT  * from sumber_dana ";
										$result3 = @pg_query($con,$query3);
											while($rows3 = @pg_fetch_array($result3))
											{
												
											
										?>
										<option value="<?php echo $rows3[id_sumber_dana] ?>" ><?php echo $rows3[nama_sumber_dana] ?></option>
				
							            <?php } ?>							
					  </select>

                </div>
            </div>			
			<div class="form-group">
                <label for="pv" class="col-md control-label">Perbaikan Volume :</label>
                <div class="col-md">
                    <input type="number" id="pv" name="pv" class="form-control" value="<?php echo $rows2[volume_baru];?>" autofocus required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>			
			<div class="form-group">
                <label for="hs" class="col-md control-label">Harga Per Satuan :</label>
                <div class="col-md">
                    <input type="number" id="hs" name="hs" class="form-control" value="<?php echo $rows2[harga_baru];?>" autofocus required>
                    <span class="help-block with-errors"></span>
                </div>
            </div>			
			<div class="form-group">
                <label for="hs" class="col-md control-label"> Satuan Baru :</label>
                <div class="col-md">
				
					  <select class="form-control" id="stb" name="stb">
					  <option value="<?php echo $rows2[id] ?>" ><?php echo $rows2[nama_satuan] ?></option>
									<?php
							             $query4="SELECT  * from satuan ";
										$result4 = @pg_query($con,$query4);
											while($rows4 = @pg_fetch_array($result4))
											{
												
											
										?>
										<option value="<?php echo $rows4[id] ?>" ><?php echo $rows4[nama_satuan] ?></option>
				
							            <?php } ?>							
					  </select>
                </div>
            </div>			
			<div class="form-group">
                <label for="kl" class="col-md control-label">Kondisi Lapangan</label>
                    <div class="gambar">
                                <?php 
                          // echo $data[kondisi_lapangan];
                          $dirname    = $rows2[kondisi_lapangan]."/";
                          $ekstensi   = ".jpg" || ".jpeg" || ".png" ||".bmp";
                          $images     = glob($dirname."*.*");
                          $count_image = count($images);
                          for ($i=0; $i<$count_image; $i++){ 
                            $single_image = $images[$i];
                           ?>
                          <!-- <center> -->
                             <a href="<?php echo $single_image;  ?>" target="_blank"><img src="<?php echo $single_image; ?>" width="120" height="120"  /></a>
                          <!-- </center> -->
                          <?php
                          }
                          ?>
                                </div>
                <div class="col-md">
                    <!-- <input type="text" id="kl" name="kl" class="form-control" value="<?php echo $rows2[kondisi_lapangan];?>" autofocus required> -->
                    <span class="help-block with-errors"></span>
                    <!-- <div class="fileUpload btn btn-primary">
                                <span>Upload</span> -->
                            
                    <input class="upload"  type="file" id="photo" name="photo[]" accept="image/*" placeholder="Pilih File" multiple onchange="document.getElementById('filename').value=this.value" style="font-size: 1.1em; display:none;"/>
                                <i class="fa fa-upload btn btn-lg btn-primary" style="font-style: normal;font-size: 15px;" onclick="document.getElementById('photo').click()"> Pilih Gambar</i>
                    <label class="label">Disarankan untuk mengupload foto berukuran maksimal 10MB.</label> 
                                                   
                            <div id="preview-image" style="margin-top: .5cm"></div>                                
                                <script type="text/javascript">
                                    $("#photo").on('change', function () {
                                        // Get count of selected files
                                        var countFiles = $(this)[0].files.length;
                                        var imgPath = $(this)[0].value;
                                        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
                                        var image_holder = $("#preview-image");
                                        image_holder.empty();                                       
                                        if (extn == "jpg" || extn == "jpeg" || extn == "png" || extn == "gif" || extn == "bmp" || extn == "ico") {
                                            if (typeof (FileReader) != "undefined") {
                                                // loop for each file selected for uploaded.
                                                for (var i = 0; i < countFiles; i++) {

                                                    var reader = new FileReader();
                                                    reader.onload = function (e) {
                                                        $("<img />", {
                                                            "src": e.target.result,
                                                            "class": "gambar"
                                                        }).appendTo(image_holder);
                                                    }
                                                    image_holder.show();
                                                    reader.readAsDataURL($(this)[0].files[i]);
                                                }

                                            } else {
                                                alert("Browser ini tidak mendukung FileReader.");
                                            }
                                        } else {
                                            alert("Tipe file tidak sesuai, File yang di upload khusus gambar/image!");
                                        }
                                    });
                                </script>
                </div>
                                
                                
            </div>
        </div>


