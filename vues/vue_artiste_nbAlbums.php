
<h3> Nombres albums </h3>
<table id="tableau" class="table table-dark table-striped container-fluid" border="1">
    <tr>
        <td>Artiste</td>
        <td>Nb Albums</td>
    </tr>
    
    <?php
    var_dump($nbAlbums);
            echo "<tr>";
            echo "<td>".$nbAlbums['iduser']."</td>";
            echo "<td>".$nbAlbums['count(a.idalbum)']."</td>";
            echo "</tr>";
    ?>
</table>