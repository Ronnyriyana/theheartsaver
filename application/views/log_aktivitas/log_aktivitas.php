<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables/dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        fixedHeader: true,
        responsive: true
    });
} );
</script>
<section class="banner-bottom py-4">
	<div class="container py-md-5">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Denyut Nadi</th>
                        <th>Posisi</th>
                        <th>Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($konten as $data){ ?>
                    <tr>
                        <td><?= $data['denyut_nadi']; ?></td>
                        <td><?= $data['posisi']; ?></td>
                        <td><?= $data['waktu']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</section>
