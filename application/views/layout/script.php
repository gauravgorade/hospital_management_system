<script src="<?php echo base_url(); ?>public/jaju/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/one-page-nav-min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/jquery.meanmenu.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/ajax-form.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/paroller.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/js_isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/imagesloaded.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/parallax.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/parallax-scroll.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/element-in-view.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/main.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/lightbox.js"></script>
<script src="<?php echo base_url(); ?>public/jaju/js/lightbox.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <script type="text/javascript">
<?php
$msg= $this->session->flashdata('success');
if ( $msg != "" )
{ echo "Swal.fire('Thank you!','$msg','success')"; } 
$msg2= $this->session->flashdata('error');
if ( $msg2 != "" )
{  echo "Swal.fire('Oops...','$msg2','error')";} ?>
</script>

<script>

(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
    </script>
