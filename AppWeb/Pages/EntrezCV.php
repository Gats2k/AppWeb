<?php
    require_once ('Partial/header.php');
    require_once('../php_action/db_connexion.php');
?>
<!-- cette zone sera le contenu de mes pages. C'est ici que je vais mettre le contenu propre à chaque page -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">	
		<div class="alert alert-light alert-elevate" role="alert">
			<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
			<div class="alert-text">
				Cette page permet aux demandeurs de rechercher un job.
			</div>
		</div>
		<div class="kt-portlet kt-portlet--mobile">
			<div class="kt-portlet__head kt-portlet__head--lg">
				<div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-font-brand flaticon2-line-chart"></i>
					</span>
				    <h3 class="kt-portlet__head-title">
						Curriculum Vitae
					</h3>
				</div>
			</div>
			<div class="kt-portlet__body">
                <div class="kt-portlet__body">
					<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
						<div class="row align-items-center">
							<div class="col-xl-8 order-2 order-xl-1">
								<div class="row align-items-center">
									<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
										<div class="kt-input-icon kt-input-icon--left">
											<h1>Envoyez votre CV en PDF :</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__body kt-portlet__body--fit">
                    <form action="../php_action/upload.php" method="post" enctype="multipart/form-data">
                        <input class="btn btn-outline-success disabled" type="file" name="cv_file" accept=".pdf">
                        <input class="btn btn-brand btn-elevate btn-elevate-air" type="submit" value="Envoyer">
                    </form>	
				</div>
			</div>
		</div>
    </div>
<?php require_once 'Partial/script.php' ?>