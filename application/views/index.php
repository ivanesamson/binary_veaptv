<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="<?=base_url();?>public/users/img/faviconVeapTV.jpg">
    <link rel="stylesheet" href="<?=base_url();?>public/users/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>public/users/css/style.css">
    <title>VEAPTV</title>
</head>
<body class="body-1">
    <?php $this->load->view('pages/common/header'); ?>
    <?php $this->load->view($page); ?>
    <?php $this->load->view('pages/common/footer'); ?>
    <script src="<?=base_url('public/users/js/core/jquery.3.2.1.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/core/popper.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/core/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/app.js');?>"></script>
    <script>
        // Check if body height is higher than window height :)
        if ($("body").height() > $(window).height()) {
            alert("Vertical Scrollbar!");
        }
    </script>
</body>
</html>