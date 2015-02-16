<!--  PHPBack
Ivan Diaz <ivan@phpback.org>
Copyright (c) 2014 PHPBack
http://www.phpback.org
Released under the GNU General Public License WITHOUT ANY WARRANTY.
See LICENSE.TXT for details.  -->
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/bootstrap/css/prettify.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url(); ?>public/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/demo.css" rel="stylesheet">


  <style type="text/css">
  a:hover{
    text-decoration: none;
  }
  .breadcrumb{
    margin-bottom: 0px;
    margin-left: -10px;
  }
  </style>
  <script type="text/javascript">
  function showtable(tableid, tablelink){
      document.getElementById('activitytable').style.display = 'none';
      document.getElementById('ideastable').style.display = 'none';
      document.getElementById('commentstable').style.display = 'none';
      document.getElementById(tableid).style.display = '';
      document.getElementById("table1").className = "";
      document.getElementById("table2").className = "";
      document.getElementById("table3").className = "";
      document.getElementById(tablelink).className = "active";
  }
  function showtable4(tableid, tablelink){
      document.getElementById('resetvotestable').style.display = 'none';
      document.getElementById('changepasswordtable').style.display = 'none';
      document.getElementById(tableid).style.display = '';
      document.getElementById("table4").className = "";
      document.getElementById("table5").className = "";
      document.getElementById(tablelink).className = "active";
  }
  function popup_sure(text, url) {
        if (confirm(text) == true) {
           window.location = url;
        }
  }
  </script>
</head>
<body style="width:99%;">
  <div class="row" style="background-color:#333;margin-bottom:25px">
    <div class="pull-left" style="padding-left:30px;color:#ECF0F1;">
      <h4><?php echo $title; ?></h4>
    </div>
    <?php if(@isset($_SESSION['phpback_userid'])): ?>
    <div class="pull-right" style="padding-top:15px;padding-right:40px;">
      <small><span style='color:#ECF0F1'>Logged as</span><span style='color:#999;margin-left:5px;'>
      <a href="<?php echo base_url() . 'home/profile/' . $_SESSION['phpback_userid'] . '/' . str_replace(" ", "-", $_SESSION['phpback_username']); ?>"><?php echo $_SESSION['phpback_username']; ?></a></span>
      <a href="<?php echo base_url() . 'action/logout'; ?>"><button type="button" class="btn btn-danger btn-xs" style="margin-left:10px;">Log out</button></a></small>
    </div>
    <?php else : ?>
    <div class="pull-right" style="padding-top:12px;padding-right:40px;">
      <a href="<?php echo base_url() . 'home/login'; ?>"><button type="button" class="btn btn-success btn-sm btn-block" style="width:250px">Sign in</button></a>
    </div>
    <?php endif; ?>
    
  </div>
  <div class="row" style="width:102%;">