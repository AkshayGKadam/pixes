<?php 
    if(!empty($sidebar)){ $this->load->view($sidebar); }
    if(!empty($header)){ $this->load->view($header); }
    if(!empty($body)){ $this->load->view($body); }
    if(!empty($footer)){ $this->load->view($footer); }
?>


<?php
    include "application/views/layouts/script.php";
    if(!empty($extra_js)){ echo $extra_js; }
?>

</div>
<script>
    var base_url = "<?php echo base_url(); ?>";
</script>

<div class="splash-screen">
    <div class="mastercard">
        <div class="mastercard__part">
            <img src="<?php echo base_url('assets/assets/images/pngegg.png'); ?>" width="40px">
        </div>
        <div class="mastercard__copy">
        <span>PIXES</span>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/assets/js/api.js'); ?>"></script>