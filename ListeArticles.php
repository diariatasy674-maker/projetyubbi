<?php
//1-Merci de se connecter à la base données
$c=mysqli_connect("localhost","root","","boutique_vetment");

   ?>
   
   <table  align="center" border="1" width="80%">
<tr>
<td>ID</td><td>NOM ARTICLE</td><td>DESCRIPTION ARTICLE</td><td>PRIX UNITAIRE</td> <td>PHOTO</td>
</tr>
<?php
//2-préparer une requête pour faire afficher le sdonnées de la table article
$afficher=mysqli_query($c,"select * from article");//les données dans $affiches sont en mysql
while($a=mysqli_fetch_array($afficher)) {  //traduire $afficher en phap par le bias de la variable $a
   ?>

<tr>
<td><?php echo $a['id'];?></td>
<td><?php echo $a['nom'];?></td>
<td><?php echo $a['description'];?></td>
<td><?php echo $a['prix'];?></td>
<td><img src="images/<?php echo $a['photo'];?>" width="70" height="70"></td>
</tr>


<?php
}
   ?>

</table>