<?php 
    require_once ('Partial/header.php');
    require_once('../php_action/db_connexion.php');
?>
<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Nouvelle offre
												</h3>
                                                <a href="Publication.php" class="btn btn-clean btn-icon-sm">
												    <i class="la la-long-arrow-left"></i>
												     Retour
											    </a>
                                                
											</div>
										</div>

										<!--begin::Form-->
										<form class="kt-form" method='POST' action='../php_action/createOffre.php'>
											<div class="kt-portlet__body">
												<div class="kt-section kt-section--first">
													<div class="form-group">
														<label>Nom:</label>
														<input type="text" class="form-control" name="NOM_EMPLOI" placeholder="Entrez le nom de l'emploi">
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="col-9">
                                                        <label>Compétence comportementale:</label>
															<select class="form-control" name="COMPETENCES">
																<option value="Adaptation">Adaptation</option>
																<option value="Agilité">Agilité</option>
																<option value="Communication">Communication</option>
																<option value="Créativivté">Créativivté</option>
																<option value="Coopération">Coopération</option>
														    </select>
													</div>
                                                    <div class="col-9">
                                                        <label>Secteur d'activité:</label>
															<select class="form-control" name="SECTEUR_ACTIVITE">
																<option value="Transport">Transport</option>
																<option value="Informatique">Informatique</option>
																<option value="Santé">Santé</option>
																<option value="Agriculture">Agriculture</option>
																<option value="Recherche Scientifique">Recherche Scientifique</option>
																<option value="Elevage">Elevage</option>
														    </select>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
													<div class="form-group">
														<label>Rémunération:</label>
														<div class="input-group">
															<div class="input-group-prepend"><span class="input-group-text" id="basic-addon2">XAF</span></div>
															<input type="text" class="form-control" name="REMUNERATION" placeholder="99.9">
														</div>
													</div>
													<div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions">
													<button type="submit" class="btn btn-primary">Enregistrer</button>
													<button type="reset" class="btn btn-secondary">Annuler</button>
												</div>
											</div>
										</form>

										<!--end::Form-->
									</div>
<?php require_once 'Partial/script.php' ?>