<section id="categorie" class="container-fluid">
<h4> Ajout d'une Vente </h4>

<form method="post">

<div class="mb-12">
<label for="formGroupExampleInput" class="form-label"></label>
    <table>
        <tr>
            <td><input type="text" name="nbVente" placeholder="Donnez le nombre de Vente..." value="<?= ($laVente!=null)?$laVente['nbVente']:'' ?>" ></td>
        </tr>
        <tr>
            <td><input type="text" name="prixParVente" placeholder="Donnez prix par Vente..." value="<?= ($laVente!=null)?$laVente['prixParVente']:'' ?>" ></td>
        </tr>
        <tr>
            <td><input type="date" name="date" value="<?= ($laVente!=null)?$laVente['date']:'' ?>"></td>
        </tr>
        <tr>
            <td>
                <select name="idpartenaire">
                    <?php
                        foreach($lesPartenaires as $unPartenaire){
                            if($_SESSION['role']=='partenaire'){
                                if($_SESSION['iduser']==$unPartenaire['iduser']){
                                    echo "<option value='".$unPartenaire['iduser']."'>";
                                    echo $unPartenaire['nom']." - ".$unPartenaire['sigle'];
                                    echo "</option>";
                                }
                            }
                            else{
                                echo "<option value='".$unPartenaire['iduser']."'>";
                                echo $unPartenaire['nom']." - ".$unPartenaire['sigle'];
                                echo "</option>";
                            }
                            
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <select name="idalbum">
                    <?php
                        foreach($lesAlbums as $unAlbum){
                            echo "<option value='".$unAlbum['idalbum']."'>";
                            echo $unAlbum['nom']." - ".$unAlbum['anneeSortie'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input class="btn btn-primary" type="reset" name="Annuler" value="Annuler" />
                <input class="btn btn-primary" type="submit" 
            <?= ($laVente!=null) ? 'name="Modifier" value="Modifier"' :
                 'name="Valider" value="Valider"' ?>>
            </td>
        </tr>
        <?= ($laVente!=null)?'<input type="hidden" name="idvente" value="'.$laVente['idvente'].'">':''?>
    </table>
            </div>
</form>
            </section>