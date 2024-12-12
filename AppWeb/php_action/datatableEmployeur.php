<?php require_once('db_connexion.php');?>
<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
            <div class="table-responsive">
                <table class="table" style="">

                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <th class="kt-datatable__cell kt-font-brand " style="cursor: pointer;">
                                <strong>
                                    ID
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Nom
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Téléphone
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Email
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Role
                                </strong>
                            </th>
                            <th class="kt-datatable__cell">
                                <strong>
                                    Actions
                                </strong>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body" style="">
                        <?php
                            include('../php_action/listeEmployeur.php');
                            while ($donnees = $reponse -> fetch()){?>
                            <tr class="kt-datatable__row" style="left: 0px;">
                                <td class="kt-datatable__cell" style="vertical-align: middle;">
                                    <?php echo $donnees['ID_EMPLOYEUR']; ?>
                                </td>
                                <td class="kt-datatable__cell" style="vertical-align: middle;">
                                    <?php echo $donnees['NOM_ENTREPRISE']; ?>
                                </td>
                                <td class="kt-datatable__cell" style="vertical-align: middle;">
                                    <?php echo $donnees['TELEPHONE']; ?>
                                </td>
                                <td class="kt-datatable__cell" style="vertical-align: middle;">
                                    <?php echo  $donnees['EMAIL']; ?>
                                </td>
                                <td class="kt-datatable__cell" style="vertical-align: middle;">
                                    <?php echo  $donnees['ROLE']; ?>
                                </td>
                                <?php
                                    if ($_SESSION['user']['ROLE'] == 'admin') {?>
                                    <?php
                                        if ($_SESSION['user']['ROLE'] !== $donnees['ROLE']) {?>
                                        <td class="kt-datatable__cell" style="vertical-align: middle;">
                                            <a onclick="return confirm('Etes vous sur de vouloir supprimer l\'employeur')" href="../php_action/deleteEmployeur.php?ID_EMPLOYEUR=<?=$donnees['ID_EMPLOYEUR'] ?>"
                                                class="btn btn-danger btn-elevate btn-elevate-air"
                                                title="Supprimer l\'employeur">
                                                <i class="flaticon-delete fa-2x"></i>
                                            </a>
                                        </td>
                                    <?php }?>
                                <?php }?>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
               
            </div>


        </div>