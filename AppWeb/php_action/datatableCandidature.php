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
                         Date
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
                <th class="kt-datatable__cell">
                     <strong>
                          Actions
                    </strong>
                </th>
                </tr>
                </thead>
                <tbody class="kt-datatable__body" style="">
                    <?php
                        include('../php_action/listeCandidature.php');
                        while ($donnees = $reponse->fetch()){?>
                        <tr class="kt-datatable__row" style="left: 0px;">
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['ID_DEMANDEUR']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                               <?php echo $donnees['NOM_DEMANDEUR']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                               <?php echo  $donnees['DATE_DE_NAISSANCE']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['TELEPHONE']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <?php echo $donnees['EMAIL']; ?>
                            </td>
                            <td class="kt-datatable__cell" style="vertical-align: middle;">
                                <a href="#" class="btn btn-dark btn-elevate btn-elevate-air"
                                    title="contacter l\'offre">
                                    <i class="flaticon-email-black-circular-button fa-2x"></i>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a href="../php_action/CV<?php echo $donnees['nom_fichier']; ?>" target="_blank"
                                    title="Voir le demandeur"
                                    class="btn btn-warning btn-elevate btn-elevate-air">
                                    <i class="flaticon-eye fa-2x"></i>
                                </a>
                                &nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Etes vous sur de vouloir supprimer la candidature')" 
                                    href="../php_action/deleteCandidature.php?ID_DEMANDEUR=<?=$donnees['ID_DEMANDEUR'] ?>"
                                    title="Supprimer l\'offre"
                                    class="btn btn-danger btn-elevate btn-elevate-air">
                                    <i class="flaticon-delete fa-2x"></i>
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
               
        </div>
    </div>
</div>