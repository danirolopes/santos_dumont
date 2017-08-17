     <!-- jQuery -->
    <script src="<?php echo URL;?>js/jquery.js" type="text/javascript"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL;?>js/bootstrap.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo URL;?>js/custom.js"></script>

    <?php if($this->controller == 'index') { ?>
    <script src="<?php echo URL;?>js/home.js" type="text/javascript"></script>
    <?php } ?>
    <?php if($this->controller == 'vestibulinho') { ?>
    <script src="<?php echo URL;?>js/vestibulinho.js" type="text/javascript"></script>
    <?php } ?>
    <?php if($this->controller == 'admin') { ?>
    <script src="<?php echo URL;?>js/admin.js" type="text/javascript"></script>
    <?php } ?>

    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="<?php echo URL;?>JS/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>


</body>

</html>