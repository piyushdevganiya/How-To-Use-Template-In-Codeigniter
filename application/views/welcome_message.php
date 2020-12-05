<!DOCTYPE html>
<html>
<head>
	<title>Template Using Codeigniter</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<?php 
		$this->load->view('top_bar'); 
		$this->load->view('left_sidebar');
	?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
		<div class="box">
			<div class="box-header with-border">
			<h3 class="box-title">Title</h3>

			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
						title="Collapse">
				<i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fa fa-times"></i></button>
			</div>
		</div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <div class="box-footer">
          Footer
        </div>
      </div>
    </section>
  </div>
  <?php 
	$this->load->view('footer'); 
	$this->load->view('right_sidebar');
?>
</div>
<?php $this->load->view('script'); ?>
</body>
</html>
