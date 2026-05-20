<?php

$name = '';
if (isset($_POST["name"]) && $_POST["name"] !== '') {

    echo "Hello " . $_POST["name"];
}
else 

    
?>
{

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <Form method="POST"

    <input type="text" name="nom">
    <botton type="submit" >Envoyer </botton>


</Form>
    
</body>
</html>
}


?>