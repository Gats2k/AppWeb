<?php
 require_once ('Partial/header.php');
 require_once('../php_action/db_connexion.php');
?>
<!-- cette zone sera le contenu de mes pages. C'est ici que je vais mettre le contenu propre à chaque page -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">	
		<div class="alert alert-light alert-elevate" role="alert">
			<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
				<div class="alert-text">
					Cette page permet aux demandeurs de postuler.
				</div>
		</div>
		<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													postulez
												</h3>
											</div>
										</div>

										<!--begin::Form-->
										<form class="kt-form" method='POST' action='../php_action/createCandidature.php'>
											<div class="kt-portlet__body">
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Nom(s):</label>
														<input type="text" class="form-control"  name="NOM_DEMANDEUR" placeholder="Entrez vos noms">
													</div>
													<div class="col-lg-6">
														<label class="">Numéro de téléphone:</label>
														<input type="text" class="form-control" name="TELEPHONE" placeholder="Entrez votre numéro">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Date de naissance:</label>
														<div class="kt-input-icon">
															<input type="date" class="form-control" name="DATE_DE_NAISSANCE" placeholder="Entrez votre date">
														</div>
													</div>
													<div class="col-lg-6">
														<label class="">Email:</label>
														<div class="kt-input-icon">
															<input type="email" class="form-control" name="EMAIL" placeholder="Entrez votre pmail">
														</div>
													</div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary">Postuler</button>
															<button type="reset" class="btn btn-secondary">Annuler</button>
														</div>
													</div>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>
    </div>
<?php require_once 'Partial/script.php' ?>