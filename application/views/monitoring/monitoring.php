<?php foreach($konten as $data){ ?>
<section class="banner-bottom py-4">
	<div class="container py-md-5">
		<div class="row mt-lg-5 text-center" id="stats">
			<div class="col-lg-4 counter editContent mt-3">
					<button class="accordion"><b>Nama</b> : <?= $data['nama_pasien']; ?></button>
					<div class="panel">
					  <p><b>Jenis Kelamin :</b>  <?= $data['jenis_kelamin']; ?></br>
					  <b>Usia :</b>  <?= $data['usia']; ?> Thn.</br>
					  <b>Riwayat Penyakit :</b>  <?= $data['riwayat_penyakit']; ?></p>
					</div>
			</div>
			<div class="col-lg-4 counter two editContent mt-3">
				<p>Denyut Nadi</p>
				<img src="<?php echo base_url(); ?>assets/images/Denyutnadi.png" width="30%" id="gmbrJantung">
				<div class="counter-info">
					<h4><?= $data['denyut_nadi']; ?> BPM</h4>
					<?php
						if($data['denyut_nadi']<50){
							$keadaan="( <font color='red'><b>Danger</b></font> )";
						}elseif(($data['denyut_nadi']<=100)){
							$keadaan="( <b>Normal</b> )";
						}else{
							$keadaan="( <font color='red'><b>Need Attention</b></font> )";
						}

						echo $keadaan;
					?>
				</div>
			</div>
			<div class="col-lg-4 counter editContent mt-3">
				<p>Keberadaan Pasien</p>
				<span class="fa fa-layer-group" size="30%"></span>
				<div class="counter-info">
					<h4><?= $data['posisi']; ?></h4>
				</div>
			</div>
		</div>
	</div>
</section>
<?php } ?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
	this.classList.toggle("tampil");
	var panel = this.nextElementSibling;
	if (panel.style.maxHeight) {
	  panel.style.maxHeight = null;
	} else {
	  panel.style.maxHeight = panel.scrollHeight + "px";
	} 
  });
}
</script>