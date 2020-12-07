<?php 
session_start();
$host= "http://localhost/app-web/";
// include 'db/connection.php';
?>
<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>APP Alcaldía</title>
		<meta name="keywords" content="Sopó" />
		<meta name="description" content="APP Alcaldía Sopó">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS Modal-->
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/morris/morris.css" />

		<!-- Tables advance-->
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?php echo $host;?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo $host;?>assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo $host;?>assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo $host;?>assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo $host;?>assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		
		<section class="body">
			<!-- start: header Incluir header header.html-->
			<?php include 'views/header.php';?>
			<!-- end: header -->
			<div class="inner-wrapper">
				<!-- start: sidebar menu principal sidebar.html-->
				<?php include 'views/sidebar.php';?>
				<!-- end: sidebar menu principal-->
				<section role="main" class="content-body">
					<!-- start: ruta de migas miga-rutas.html-->
					<?php include 'views/miga-ruta.php';?>
					<!-- end: ruta de migas-->
					<!-- start: content principal content.html-->
					<?php
						$mod = $_GET['mod']; 
						$sec = $_GET['sec'];   
						if($mod!=""){include "controllers/$mod/$sec.php";}else{include "controllers/content.php";}
					?>
					<!-- end: content principal -->
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="<?php echo $host;?>assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo $host;?>assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo $host;?>assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo $host;?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo $host;?>assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo $host;?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="<?php echo $host;?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="<?php echo $host;?>assets/vendor/flot/jquery.flot.js"></script>
		<script src="<?php echo $host;?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="<?php echo $host;?>assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="<?php echo $host;?>assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="<?php echo $host;?>assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="<?php echo $host;?>assets/vendor/raphael/raphael.js"></script>
		<script src="<?php echo $host;?>assets/vendor/morris/morris.js"></script>
		<script src="<?php echo $host;?>assets/vendor/gauge/gauge.js"></script>
		<script src="<?php echo $host;?>assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="<?php echo $host;?>assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>	

		<!-- Specific Page Vendor modal -->
		<script src="<?php echo $host;?>assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Tables advance -->
		<script src="<?php echo $host;?>assets/vendor/select2/select2.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo $host;?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		

		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo $host;?>assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo $host;?>assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo $host;?>assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo $host;?>assets/javascripts/dashboard/examples.dashboard.js"></script>
		<!-- Tables advance -->
		<script src="<?php echo $host;?>assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo $host;?>assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo $host;?>assets/javascripts/tables/examples.datatables.tabletools.js"></script>		
		<script src="<?php echo $host;?>assets/javascripts/ui-elements/examples.modals.js"></script>
		<script>
			$('#datatable-default').dataTable( {
				"order": [],
				"columnDefs": [ {
				"targets"  : 'no-sort',
				"orderable": false,
				}]
			} );
			$(document).ready(function () {
				$('select').selectize({
					sortField: 'text'
				});
			});
		</script>
	</body>
</html>