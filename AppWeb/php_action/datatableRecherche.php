<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded">
            <div class="table-responsive">
                <table class="table" style="">

                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <th class="kt-datatable__cell kt-font-brand " style="cursor: pointer;">
                                <strong>
                                    N°
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Nom
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Compétence
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Rémunération
                                </strong>
                            </th>
                            <th class="kt-datatable__cell " style="cursor: pointer;">
                                <strong>
                                    Secteur d'activité
                                </strong>
                            </th>
                            <th class="kt-datatable__cell">
                                <strong>
                                    Action
                                </strong>
                            </th>
                        </tr>

                    </thead>
                    <tbody class="kt-datatable__body" style="">
                        <?php
                                include('../php_action/listeOffre.php');
                                while ($donnees = $reponse->fetch()){?>

                        <tr class="kt-datatable__row" style="left: 0px;">
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['ID_EMPLOI']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['NOM_EMPLOI']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo  $donnees['COMPETENCES']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['REMUNERATION']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['SECTEUR_ACTIVITE']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <a href="postuler.php" class="btn btn-primary btn-elevate btn-elevate-air"
                                    title="postuler à l\'offre">
                                    <i class="fa fa-file-alt fa-2x"></i>
                                </a>
                            </td>
                        </tr>

                        <?php } ?>

                    </tbody>
                </table>
               
            </div>


        </div>