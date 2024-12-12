<?php
require_once('identifier.php');
?>
<?php
$erreurpwd = "";
if ($_POST)
	{
		$pwd1 = $_POST['oldpwd'];
		$pwd2 = $_POST['newpwd'];
		if ($pwd1 !== $_SESSION['user']['pwd'] ){
			$erreurpwd = "Erreur ! Les deux mots de passe ne sont pas identiques";
		}
	}
?>
<!DOCTYPE HTML>
<html lang="en" class="wf-poppins-n3-inactive wf-poppins-n4-inactive wf-poppins-n5-inactive wf-poppins-n6-inactive wf-poppins-n7-inactive wf-roboto-n3-inactive wf-roboto-n4-inactive wf-roboto-n5-inactive wf-roboto-n6-inactive wf-roboto-n7-inactive wf-inactive">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8">
		<title>Edition du mot de passe</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" media="all"><script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="../assets/app/custom/login/login-v3.default.css" rel="stylesheet" type="text/css">

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="../assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css">

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="../assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css">

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css">

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="../assets/media/logos/favicon.ico">
		<style type="text/css">/* Chart.js */
			@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
			@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
		</style>
	</head>
    <body>
        <div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(../assets/media//bg/bg-3.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<?php 
									if ($_SESSION['user']['ROLE'] == 'demandeur') { 
											?>
								<a href="editerDemandeur.php?id=<?php echo $_SESSION['user']['ID_DEMANDEUR'] ?>"><i class="fa fa-arrow-left"></i></a>
								
								<?php }else{?>
									<a href="editerEmployeur.php?id=<?php echo $_SESSION['user']['ID_EMPLOYEUR'] ?>"><i class="fa fa-arrow-left"></i></a>
								<?php }	?>
								&nbsp;&nbsp;
								&nbsp;&nbsp;
								Compte :<?php echo $_SESSION['user']['login'] ?>
							</div>
                               <form class="kt-form" method="post" action="updatePwd.php">
									<div class="input-group">
										<?php echo $erreurpwd ?>
										<input class="form-control" type="password" autocomplete="new-password" placeholder="Taper votre Ancien Mot de passe" name="oldpwd" required>
									</div>
									<div class="input-group">
										<input class="form-control" type="password"  autocomplete="new-password" placeholder="Taper votre Nouveau Mot de passe" name="newpwd" required>
									</div>
									<div class="kt-login__actions">
										<button class="btn btn-brand btn-elevate kt-login__btn-primary">Enregistrer</button>&nbsp;&nbsp;
										<button type="reset" class="btn btn-light btn-elevate kt-login__btn-secondary">Annuler</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>