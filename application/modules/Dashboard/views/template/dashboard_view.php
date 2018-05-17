<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
        <!--title-->
        <title><?php echo $page_title; ?></title>
        <!--styles-->
        <?php $this->load->view('template/style_view'); ?>
    </head>
    <body class="application">
        <!--navbar-->
        <?php $this->load->view('template/menu_view'); ?>
        <!--filter--
        <?php $this->load->view('template/filter_view'); ?>-->
        <!--tabbed-panes-->
        <div class="tab-content">
            <!--service_view-->
            <?php $this->load->view('tabs/service_view'); ?>
            <!--summary_view-->
            <?php $this->load->view('tabs/summary_view'); ?>
            <!--monitoring evaluation_view-->
            <?php $this->load->view('tabs/monitoring_evaluation_view'); ?>
            <!--commodity_management_view-->
            <?php $this->load->view('tabs/commodity_management_view'); ?>
            <!--facility_view-->
            <?php $this->load->view('tabs/facility_view'); ?>
        </div>
        <!--footer-->
        <hr>
        <p class="small text-muted">NASCOP &copy; 2017-<?php echo date('Y'); ?>. All Rights Reserved</p>
        <!--scripts-->
        <?php $this->load->view('template/script_view'); ?>
    </body>
</html>