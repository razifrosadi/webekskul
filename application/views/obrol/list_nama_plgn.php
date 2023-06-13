<div>
    <h3> List User </h3>
    <ul>
        <?php foreach ($all_user as $value) { ?>
            <?php if ($value['username'] == $this->session->userdata('username')) {
                continue;
            } ?>
            <?php $not_read = messagenotread($value['id'], $this->session->userdata('id')); ?>
            <li><a href="<?php echo base_url('obrol/japri?user_id=' . $value['id']); ?>;"> <?php echo $value['name']; ?> </a>(<?php echo $not_read; ?>) </li>
        <?php } ?>
    </ul>
</div>