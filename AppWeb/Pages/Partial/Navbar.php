<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
						<div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
							<ul class="kt-menu__nav ">
								<li class="kt-menu__item " aria-haspopup="true"><a href="Dashboard.php" class="kt-menu__link "><i class="kt-menu__link-icon flaticon-home-2"></i><span class="kt-menu__link-text">Dashboard</span></a></li>
								<?php if ($_SESSION['user']['ROLE']!= 'demandeur') {?>
									<li class="kt-menu__section ">
										<h4 class="kt-menu__section-text">Employeur</h4>
										<i class="kt-menu__section-icon flaticon-more-v2"></i>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="Publication.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-web"></i><span class="kt-menu__link-text">Publier les offres</span></a>
									</li>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="gestion_de_candidature.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-list-1"></i><span class="kt-menu__link-text">Gestion des candidatures</span></a>
									</li>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="SupportAideE.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-info"></i><span class="kt-menu__link-text">Support client</span></a>
									</li>
								<?php }?>
								<?php if ($_SESSION['user']['ROLE']!= 'employeur' 
											&& 
										$_SESSION['user']['ROLE']!= 'admin' ) {?>
									<li class="kt-menu__section ">
										<h4 class="kt-menu__section-text">Demandeur</h4>
										<i class="kt-menu__section-icon flaticon-more-v2"></i>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="Recherche_job.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-notes"></i><span class="kt-menu__link-text">Recherche du job</span></a>
									</li>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="EntrezCV.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-edit-1"></i><span class="kt-menu__link-text">Entrer le CV</span></a>
									</li>
									</li>
										<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="SupportAideD.php" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon flaticon-info"></i><span class="kt-menu__link-text">Support client</span></a>
									</li>
								<?php } ?>
								<?php if ($_SESSION['user']['ROLE'] =='admin') {?>
									<li class="kt-menu__section ">
										<h4 class="kt-menu__section-text">Administrateur</h4>
										<i class="kt-menu__section-icon flaticon-more-v2"></i>
									</li>
									<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--open" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
										<a href="javascript:;" class="kt-menu__link kt-menu__toggle">
											<span class="kt-menu__link-icon">
												<i class="kt-menu__link-icon flaticon-open-box"></i>
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect id="bound" x="0" y="0" width="24" height="24"></rect>
													<path d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 
														L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 
														C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 
														L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 
														C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 
														L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 
														C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z" 
														id="Combined-Shape" fill="#000000">
													</path>
													<path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 
														L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 
														C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 
														C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 
														L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 
														C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z" 
														id="Combined-Shape" fill="#000000" opacity="0.3">
													</path>
												</g>	
											</span>
											<span class="kt-menu__link-text">Utilisateurs</span>
											<i class="kt-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="kt-menu__submenu " kt-hidden-height="240" style=""><span class="kt-menu__arrow"></span>
											<ul class="kt-menu__subnav">
												<li class="kt-menu__item " aria-haspopup="true">
													<a href="Demandeur.php" class="kt-menu__link ">
														<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
															<span></span>
														</i>
														<span class="kt-menu__link-text">Demandeur</span>
													</a>
												</li>
												<li class="kt-menu__item " aria-haspopup="true">
													<a href="Employeur.php" class="kt-menu__link ">
														<i class="kt-menu__link-bullet kt-menu__link-bullet--dot">
															<span></span>
														</i><span class="kt-menu__link-text">Employeur</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
										<a href="SupportAideA.php" class="kt-menu__link kt-menu__toggle">
											<i class="kt-menu__link-icon flaticon-info"></i>
											<span class="kt-menu__link-text">Support client</span>
										</a>
									</li>
								<?php }?>
							</ul>
						</div>
					</div>