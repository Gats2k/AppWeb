<?php 
	require_once ('Partial/header.php');
	require_once('../php_action/db_connexion.php');

	 include('../php_action/listeOffre.php');
?>
<!-- cette zone sera le contenu de mes pages. C'est ici que je vais mettre le contenu propre à chaque page -->
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									Cette page permet de consulter la liste des offres d'emplois publiées.
								</div>
							</div>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Liste des offres d'emplois
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<a href="Dashboard.php" class="btn btn-clean btn-icon-sm">
												<i class="la la-long-arrow-left"></i>
												Retour
											</a>
											&nbsp;
											<div class="dropdown dropdown-inline">
													<a href="nouvelleOfrre.php" class="btn btn-clean btn-icon-sm">
														<i class="flaticon2-plus"></i> Créer une nouvelle offre
													</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Search Form -->
									<div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<form action="publication.php" method="get">
													<div class="row align-items-center">
														<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
															<div class="kt-input-icon kt-input-icon--left">
																<input type="text" class="form-control" 
																placeholder="Nom de l'entreprise..." id="generalSearch" name="nomOffre"
																value="<?php echo $nomOffre ?>"/>
																<span class="kt-input-icon__icon kt-input-icon__icon--left">
																	<span><i class="la la-search"></i></span>
																</span>
															</div>
														</div>
														<button type="submit" class="btn btn-success btn-elevate btn-elevate-air">
															<span class="glyphicon glyphicon-search"></span>
																Chercher...
														</button>
													</div>
												</form>
											</div>
											<div class="col-xl-4 order-1 order-xl-2 kt-align-right">
												<a href="#" class="btn btn-default kt-hidden">
													<i class="la la-cart-plus"></i> New Order
												</a>
												<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								</div>
								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
									<?php
										include('../php_action/datatableOffre.php');
									?>
									<!--end: Datatable -->
								</div>
							</div>		
	</div>
<?php require_once 'Partial/script.php' ?>