<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="<?php echo base_url(); ?>pub/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php $this->load->view('app/form_filter') ?>
        <?php $this->load->view('app/post_list') ?>
        <script src="<?php echo base_url(); ?>pub/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>pub/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>