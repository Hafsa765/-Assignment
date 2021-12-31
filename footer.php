<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
include($base_dir . 'config.php');
?>
<!-- Jquery Core Js -->
<script src="<?php echo HTTP_ASSETS ?>plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="<?php echo HTTP_ASSETS ?>plugins/bootstrap/js/bootstrap.js"></script>


<!-- Slimscroll Plugin Js -->
<script src="<?php echo HTTP_ASSETS ?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?php echo HTTP_ASSETS ?>plugins/node-waves/waves.js"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="<?php echo HTTP_ASSETS ?>plugins/jquery-countto/jquery.countTo.js"></script>


<!-- sweet alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- instascan -->
<!-- <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->

<!-- Custom Js -->
<script src="<?php echo HTTP_ASSETS ?>js/admin.js"></script>
<script src="<?php echo HTTP_ASSETS ?>js/pages/index.js"></script>
<script src="<?php echo HTTP_ASSETS ?>js/pages/app.js?<?php echo time(); ?>"></script>
<script src="<?php echo HTTP_ASSETS ?>js/script.js"></script>
<script src="<?php echo HTTP_ASSETS ?>scan/instascan.min.js"></script>

<?php
if (isset($aJs)) :
    foreach ($aJs as $k => $v) :
?>
        <script src="<?php echo $v; ?>"></script>
<?php
    endforeach;
endif;
?>
<?php
if (isset($aInJs)) :
    foreach ($aInJs as $k => $v) :
?>
        <script>
            <?php
            echo $v;
            ?>
        </script>
<?php
    endforeach;
endif;
?>
<!-- Demo Js -->
<script src="<?php echo HTTP_ASSETS ?>js/demo.js"></script>
</body>

</html>