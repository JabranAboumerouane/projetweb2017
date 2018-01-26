<?php session_start()?>
<?php
    require 'nav.php';
    if (!empty($_POST['Nom']))
    {

        echo 'Votre nom: '.$_POST['Nom'].'</br>';
        echo 'Votre email: '.$_POST['Email'].'</br>';
        echo 'Votre sexe: '.$_POST['Sexe'].'</br>';
        echo 'Votre message: '.$_POST['Comment'].'</br>';
    }
    else
    {
echo '<h2>Formulaire de contact<br /></h2>
<form action="formulaire.php" method="post" accept-charset="utf-8">
	<h3>
        *Nom:<br><input type="text" name="Nom"/><br><br>
		*Email:<br><input type="text" name="Email"/><br><br>
		Je suis:
		<select name="Sexe">
    		<option value="Homme">Homme</option>
    		<option value="Femme">Femme</option>
		</select><br><br>
		Votre message:<br><input type="textarea" name="Comment"></textarea>
	</h3>
	<input type="checkbox" name="newsLetter" value="newsLetter"> Je veux recevoir la newsletter<br><br>
	<input type="submit" value="Valider" /></form>';
    }

\* if (isset($_POST['NOM'])){
$VarNom=$_POST['NOM'];
if (isset($_POST['NOM']),',')==false{

    $VarErrNom ='<div class="alert alert-warning">la zone doit contenir une virgule entre le nom et le prémont</div>';
}
}


if (isset($_POST['NOM'])){
$VarNom=$_POST['NOM'];
if (isset($_POST['NOM']),',')==false{

    $VarErrNom ='<div class="alert alert-warning">la zone doit contenir une virgule entre le nom et le prémont</div>';
}
}

<form action="session_destroy.php" method="post"
*\














}

 ?>