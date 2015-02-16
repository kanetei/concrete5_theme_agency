<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php
                    $a = new GlobalArea('Copyright');
                    $a->display();
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    $a = new GlobalArea('Social Buttons');
                    $a->display();
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    $a = new GlobalArea('Quicklinks');
                    $a->display();
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->getThemePath()?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo $this->getThemePath()?>/js/classie.js"></script>
    <script src="<?php echo $this->getThemePath()?>/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo $this->getThemePath()?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo $this->getThemePath()?>/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->getThemePath()?>/js/agency.js"></script>

</div>

<?php Loader::element('footer_required'); ?>

</body>
</html>
