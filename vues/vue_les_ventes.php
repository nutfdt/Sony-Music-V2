<h3>Liste des Ventes</h3>
<!--<form method="post">
    <input type="text" placeholder="Recherche..." name="mot" value="" />
    <input type="submit" name="Filtrer" value="Filtrer" />
</form> -->
</br></br>
<form method="post">
<table id="tableau" class="table table-dark table-striped container-fluid" border="1">
		<tr>
			<td>Id Vente</td>
			<td>Nb Vente</td>
			<td>Prix par Vente</td>
			<td>Date</td>
			<td>Id Partenaire</td>
            <td>Id Album</td>
			<?php
				if($_SESSION['role']!='agent'){
					echo "<td>Opération</td>";
				}
			?>
			
			
		</tr>
		<tr>
			<?php
				foreach($lesVentes as $uneVente){
					if($_SESSION['role']=='partenaire'){
						//Le partenaire ne pourra voir que ses ventes
						if($_SESSION['iduser']==$uneVente['idpartenaire']){
							echo "<tr>";
							echo "<td>".$uneVente['idvente']."</td>";
							echo "<td>".$uneVente['nbVente']."</td>";
							echo "<td>".$uneVente['prixParVente']."</td>";
							echo "<td>".$uneVente['date']."</td>";
							echo "<td>".$uneVente['idpartenaire']."</td>";
							echo "<td>".$uneVente['idalbum']."</td>";
							//Opération de suppression et de modification
							echo "<td> <a href='index.php?page=11&action=sup&idvente=".$uneVente['idvente']."'>
								<img src='images/delete.png' heigth='20' width='20'></a>";
							echo "<a href='index.php?page=11&action=edit&idvente=".$uneVente['idvente']."'>
								<img src='images/edit.png' heigth='20' width='20'></a></td>";    
							echo "</tr>";
						}
					}
					else{
						echo "<tr>";
						echo "<td>".$uneVente['idvente']."</td>";
						echo "<td>".$uneVente['nbVente']."</td>";
						echo "<td>".$uneVente['prixParVente']."</td>";
						echo "<td>".$uneVente['date']."</td>";
						echo "<td>".$uneVente['idpartenaire']."</td>";
						echo "<td>".$uneVente['idalbum']."</td>";
						//Opération de suppression et de modification
						if($_SESSION['role']!='agent'){
							echo "<td> <a href='index.php?page=11&action=sup&idvente=".$uneVente['idvente']."'>
								<img src='images/delete.png' heigth='20' width='20'></a>";
							echo "<a href='index.php?page=11&action=edit&idvente=".$uneVente['idvente']."'>
								<img src='images/edit.png' heigth='20' width='20'></a></td>";    
							echo "</tr>";
						}
						
					}
					
				}
			?>
		</tr>
	</table>
</form>