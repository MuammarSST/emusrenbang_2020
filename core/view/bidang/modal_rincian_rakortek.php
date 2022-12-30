<?php 

require_once("../../../core/controller/system//conn.php");
$con = connect();



$query = "SELECT usulan_kecamatan.id,
  usulan_kecamatan.nama_pekerjaan,
  usulan_kecamatan.keterangan,
  usulan_kecamatan.keterangan_action,
  usulan_kecamatan.tipe_keg,
  usulan_kecamatan.faktor1,
  usulan_kecamatan.faktor2,
  usulan_kecamatan.faktor3,
  kecamatan.kec_name,
  hasil_rakortek.nama_kegiatan_baru,
  hasil_rakortek.tindak_lanjut,
  hasil_rakortek.kondisi_lapangan,
  hasil_rakortek.volume_baru,
  hasil_rakortek.satuan_baru,
  hasil_rakortek.harga_baru,
  sumber_dana.nama_sumber_dana,
  skpd.nama_skpd
  FROM usulan_kecamatan
    LEFT JOIN kecamatan
      ON kecamatan.kec_kode = usulan_kecamatan.kec_kode
    LEFT JOIN hasil_rakortek
      ON hasil_rakortek.id_usulan_kecamatan= usulan_kecamatan.id
    LEFT JOIN sumber_dana
      ON sumber_dana.id_sumber_dana = hasil_rakortek.id_sumber_dana
    LEFT JOIN skpd
      ON skpd.id = usulan_kecamatan.id_skpd
  WHERE usulan_kecamatan.id = $_POST[id]";
				
$result=@pg_query($con, $query);
$rows = @pg_fetch_array($result);

//echo $_POST[id];exit;

?>
              
			    
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Nama Kegiatan Baru :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[nama_kegiatan_baru];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Tindak Lanjut :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[tindak_lanjut];?>" style="background-color: transparent;"> 
                        </div>
                      </div>
                    </div>

					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Sumber Dana :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[nama_sumber_dana];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Kecamatan :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[kec_name];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Lokasi :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[keterangan];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Volume :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[volume_baru];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Satuan :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[satuan_baru];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Harga Satuan :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[harga_baru];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Jumlah Dana :</label>
                          <input type="text" class="form-control" readonly value="<?php echo Rp.' '.number_format ($rows[volume_baru]*$rows[harga_baru]);?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Kondisi Saat Ini :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[faktor1];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Tingkat Kebutuhan :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[faktor2];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>					
					<div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Dampak Kegiatan :</label>
                          <input type="text" class="form-control" readonly value="<?php echo $rows[faktor3];?>" style="background-color: transparent;">
                        </div>
                      </div>
                    </div>





                 
     
