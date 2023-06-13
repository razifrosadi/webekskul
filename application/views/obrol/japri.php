<h1>Obrolanku</h1>
<?php echo $this->session->userdata('message'); ?>
<?php unset($_SESSION['message']); ?>
<div>
    <?php foreach ($list_pesan as $value) {
        if ($value['pengirim_id'] == $this->session->userdata('id')) {
            $class = 'right';
        } else {
            $class = 'left';
        }
        $newDate = date("d-m-Y", strtotime($value['tanggal_kirim']));
        echo '<div class="' . $class . '">' . $value['nama_pengirim'] . '/' . $newDate;
        if ($value['file'] != '') {
            echo '<br> <span class = "content"><img src="' . base_url('pictures/' . $value['file']) . '" class="image-chat"/></span>';
        }
        echo '<br> <span class = "content">' . $value['pesan'] . '</span>';
        if ($value['pengirim_id'] == $this->session->userdata('id') && $value['dibaca'] == 1) {
            echo "<img src='" . base_url('assets/img/checklist.png') . "' width='20' height='20'/>";
        }
        echo '</div>';
    } ?>
</div>

<form class="obrol" method="post" action="<?= base_url('obrol/SendMessage'); ?>" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" name="nama_penerima" value="<?php echo $penerima['name']; ?>">
        <input type="hidden" name="penerima_id" value="<?php echo $penerima['id']; ?>">
        <input type="file" name="file" id="my_file" class="hidden">
        <center>
            <i id="camera" class="fa fa-camera"></i>
            <textarea cols="125" rows="2" name='pesan'> </textarea>
        </center>
    </div>
    <button type="submit" class="btn btn-info btn-user btn-block">Kirim</button>
</form>

<script type="text/javascript">
    document.getElementById("camera").addEventListener("click", openFile);

    function openFile() {
        document.getElementById("my_file").click();
    }
</script>