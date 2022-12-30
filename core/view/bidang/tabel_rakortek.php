<?php
include('../../controller/bidang/proses_rakortek.php');
?>                             

							 <div class="table-responsive">
                    <table class="table" id="data">
					  <thead class=" text-primary">
                        <th>
                          No
                        </th>
                        <th>
                          Nama Usulan 
                        </th>                       

                        <th>
                          Tindak Lanjut
                        </th>
                        <th>
                          Kondisi Lapangan
                        </th>
                        <th>
                          Sumber Dana
                        </th> 
						<th>
                          Lokasi
                        </th>							
						<th>
                          Kecamatan
                        </th>						
						
						<th style="text-align:center";>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
				<?php
				$rows = @pg_num_rows($result);
				if(empty($rows)){
					?>
					<tr>
						<td style="text-align: center;">
							Tidak ada data 
						</td>
					</tr>
					<?php
				} elseif (!empty($rows)) {
					$no = 1;
					while ($data = @pg_fetch_array($result)) 
					{
						?>
                        <tr>
                          <td>
                           <?php echo $no++; ?>
                          </td>
                          <td>
                           <?php echo $data[nama_pekerjaan];?>
                          </td>
                          <td>
                          <?php echo $data[tindak_lanjut];?>
                          </td>
                          <td>
                          <?php 
                          // echo $data[kondisi_lapangan];
                          $dirname    = $data[kondisi_lapangan]."/";
                          $ekstensi   = ".jpg" || ".jpeg" || ".png" ||".bmp";
                          $images     = glob($dirname."*.*");
                          $count_image = count($images);
                          for ($i=0; $i<$count_image; $i++){ 
                            $single_image = $images[$i];
                           ?>
                          <!-- <center> -->
                             <a href="<?php echo $single_image;  ?>" target="_blank"><img src="<?php echo $single_image; ?>" width="120" height="120" /></a>
                          <!-- </center> -->
                          <?php
                          }
                          ?>
                            <!-- <center>
                              <a href="<?php // echo $data[kondisi_lapangan]; ?>" target="_blank"><img src="<?php // echo $data[kondisi_lapangan]; ?>" style="width:120px; height:120px;"/></a>
                            </center> -->
                          </td>
                          <td>
                              <?php echo $data[nama_sumber_dana];?>
                          </td>                         
						  <td>
                           <?php echo $data[keterangan];?>
                          </td>                          
						  <td>
                            <?php echo $data[kec_name];?>
                          </td>                          
						 				  
						 
                           <td class="td-actions text-center">
							<button  id="rincian" data-id="<?php echo $data[id]?> ""type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-just-icon" data-original-title="Rincian Rakortek" aria-describedby="tooltip314314">
                                <i class="material-icons">info</i>
                             </button>
                              <button id="edit" data-id="<?php echo $data[id]?> " type="button" rel="tooltip" title="" class="btn btn-primary btn-round btn-just-icon" data-original-title="Edit Rakortek" aria-describedby="tooltip314314" >
                                <i class="material-icons">edit</i>
                             </button>                              


                            </td>
                                                 

                        </tr>
						<?php
					}
				}
				?>
                      </tbody>
					  </table>
                  </div>
				  
				    <script> 
  $(document).ready(function(){
	$('#data').DataTable();
});	  
					</script>