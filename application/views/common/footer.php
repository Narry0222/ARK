<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © ARK Innovations, 2007 | Privacy Policy | Terms &amp;Conditions</p>
    </div>
</footer>
<script src="<?= config_item('root_dir'); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= config_item('root_dir'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        var id = '<?= md5($this->uri->segment(1)); ?>';
        $("#" + id).addClass('navActive');
    });
</script>