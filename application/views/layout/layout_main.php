<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<title><?php echo $title ?></title>
<link href=<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?> rel="stylesheet" type="text/css"/>
<link href=<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css');?> rel="stylesheet" type="text/css"/>
<link href=<?php echo base_url('assets/css/style.css');?> rel="stylesheet" type="text/css"/>
<script src=<?php echo base_url('assets/jquery/jquery-3.2.1.min.js');?></script>
<script src=<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?></script>
  

</head>
<body>
 <nav class="navbar navbar-static-top navbar-inverse">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Hlavní nadpis</a>
                </div>
               
        <?php
            $this->load->view('layout/menu');
        ?>
               
                  </div>
 </nav>
    <article>
        <div class="container">
                <?php
            echo $content;
                ?>
                
        </div>
 </article>
<script src='<?php echo base_url('resources/jquery/jquery.js');?>' type="text/javascript"></script>
<script src='<?php echo base_url('resources/boostrap/js/bootstrap.min.js');?>' type="text/javascript"></script>
</body>
</html>

        
        