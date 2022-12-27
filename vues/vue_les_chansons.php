<h3>Liste des Chansons</h3>
<!--<form method="post">
    <input type="text" placeholder="Recherche..." name="mot" />
    <input type="submit" name="Filtrer" value="Filtrer" />
</form> -->
</br></br>
<form method="post">
<table id="tableau" class="table table-dark table-striped container-fluid" border="1">
		<tr>
			<td>Id Chanson</td>
			<td>Titre</td>
            <td>Sortie</td>
            <td>Durée</td>
            <td>Id Catégorie</td>
            <td>Id Album</td>
			<?php
				if($_SESSION['role']!='artiste'){
					echo "<td>Opérations</td>";
				}
			?>
			
			
		</tr>
		<tr>
			<?php
				foreach($lesChansons as $uneChanson){
					if($_SESSION['role']=='artiste'){
						//Si la chanson est dans l'album de l'artiste on l'affiche
						if($_SESSION['iduser']==$unAlbum['idartiste']){
							if($unAlbum['idalbum']==$uneChanson['idalbum']){
								echo "<tr>";
								echo "<td>".$uneChanson['idchanson']."</td>";
								echo "<td>".$uneChanson['titre']."</td>";
								echo "<td>".$uneChanson['sortie']."</td>";
								echo "<td>".$uneChanson['duree']."</td>";
								echo "<td>".$uneChanson['idcategorie']."</td>";
								echo "<td>".$uneChanson['idalbum']."</td>";
								
							}
						}
					}
					if($_SESSION['role']=='agent'){
						foreach($lesArtistes as $unArtiste){
							if($_SESSION['iduser']==$unArtiste['idagent']){
								if($unArtiste['iduser']==$unAlbum['idartiste']){
									if($unAlbum['idalbum']==$uneChanson['idalbum']){
										echo "<tr>";
										echo "<td>".$uneChanson['idchanson']."</td>";
										echo "<td>".$uneChanson['titre']."</td>";
										echo "<td>".$uneChanson['sortie']."</td>";
										echo "<td>".$uneChanson['duree']."</td>";
										echo "<td>".$uneChanson['idcategorie']."</td>";
										echo "<td>".$uneChanson['idalbum']."</td>";
										//Opération de suppression et de modification
										echo "<td> <a href='index.php?page=10&action=sup&idchanson=".$uneChanson['idchanson']."'>
											<img src='images/delete.png' heigth='20' width='20'></a>";
										echo "<a href='index.php?page=10&action=edit&idchanson=".$uneChanson['idchanson']."'>
											<img src='images/edit.png' heigth='20' width='20'></a></td>";    
										echo "</tr>";
									}
								}
							}
						}
					}
					else{
						echo "<tr>";
						echo "<td>".$uneChanson['idchanson']."</td>";
						echo "<td>".$uneChanson['titre']."</td>";
						echo "<td>".$uneChanson['sortie']."</td>";
						echo "<td>".$uneChanson['duree']."</td>";
						echo "<td>".$uneChanson['idcategorie']."</td>";
						echo "<td>".$uneChanson['idalbum']."</td>";
						//Opération de suppression et de modification
						echo "<td> <a href='index.php?page=10&action=sup&idchanson=".$uneChanson['idchanson']."'>
							<img src='images/delete.png' heigth='20' width='20'></a>";
						echo "<a href='index.php?page=10&action=edit&idchanson=".$uneChanson['idchanson']."'>
							<img src='images/edit.png' heigth='20' width='20'></a></td>";    
						echo "</tr>";
					}
					
				}
			?>
		</tr>
	</table>
</form>