<?php
//1-Merci de se connecter à la base données
$c=mysqli_connect("localhost","root","","boutique_vetment");
//2-Recupérer les champs du formulaire article
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$photo=$_FILES['photo']['name'];
$tphoto=$_FILES['photo']['tmp_name'];
move_uploaded_file($tphoto,"./images/$photo");
//3-ajouter les données au sein de la table article
$ajouter=mysqli_query($c,"insert into article(nom,description,prix,photo) values ('$nom','$description','$prix','$photo')");
header("location:formulairearticle.html");

   ?>