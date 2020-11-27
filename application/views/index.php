<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpg" href="<?=base_url();?>public/users/img/faviconVeapTV.jpg">
    <link rel="stylesheet" href="<?=base_url();?>public/users/css/bootstrap.min.css">
    <?php
        if (isset($custom_css) && $custom_css > 0) {
            foreach ($custom_css as $key => $value) {
                if ($key == 'cdn') {
                    foreach ($value as $cdn) {
                        echo '<link rel="stylesheet" href="' . $cdn . '">';
                    }
                } else {
                    echo '<link rel="stylesheet" href="' . base_url() . 'public/users/' . $key . '/' . $value . '.css">';
                }
            }
        }
    ?>
    <link rel="stylesheet" href="<?=base_url();?>public/users/css/style.css">
    <title>VEAPTV | <?=$title?></title>
</head>
<body class="<?=$footer_class?>" data-base-url="<?=base_url();?>">
    <?php $this->load->view('pages/common/header'); ?>
    <?php $this->load->view($page); ?>
    <?php $this->load->view('pages/common/footer'); ?>
    <script src="<?=base_url('public/users/js/core/jquery.3.2.1.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/core/popper.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/core/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('public/users/js/app.js');?>"></script>
    <?php
    if (isset($custom_js) && $custom_js > 0) {
        foreach ($custom_js as $key => $value) {
            if ($key == 'cdn') {
                foreach ($value as $cdn) {
                    echo '<script src="' . $cdn . '"></script>';
                }
            } else {
                echo '<script src="' . base_url() . 'public/users/js/' . $key . '.js"></script>';
            }
        }
    }
    ?>
</body>
</html>