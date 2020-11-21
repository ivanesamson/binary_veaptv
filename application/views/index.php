<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="<?=base_url();?>public/assets/img/faviconVeapTV.jpg">
    <link rel="stylesheet" href="<?=base_url();?>public/assets/css/style.css">
    <title>VEAPTV</title>
</head>
<body class="body-1">
    <?php $this->load->view('common/header'); ?>
    <?php $this->load->view($page); ?>
    <?php $this->load->view('common/footer'); ?>
    <script src="<?=base_url();?>public/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url();?>public/assets/js/app.js"></script>

    
    <script src="<?=base_url();?>public/assets/js/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>