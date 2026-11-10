<?php
$a=$_POST["a"];
$b=$_POST["b"];

$operazioni=isset($_POST["operazioni"]) ? $_POST["operazioni"] : "";
if(empty($operazioni)){
    echo("Errore, selezionare un'operazione");
}

if($operazioni="somma"){
    $risultato=$a+$b;
}elseif($operazioni="differenza"){
    $risultato=$a-$b;
}elseif($operazioni="prodotto"){
    $risultato=$a*$b;
}elseif($operazioni="quoziente"){
    $risultato=$a/$b;
}


$opzioni=isset($_POST["opzioni"]) ? $_POST["opzioni"] : "";
if(empty($opzioni)){
    echo("Errore, selezionare un'opzione");
}

if($opzioni="assoluto"){
    $risultato=abs($risultato);
}elseif($opzioni="quadrato"){
    $risultato=pow($risultato,2);
}elseif($opzioni="duedecimali"){
    $risultato=number_format($risultato,2);
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Calcolatrice</h1>
    </div>
    <div>
    <form action="index.php" method="POST">
        <div>
        <div>
            <label for="a">a: </label>
            <input type="text" id="a" name="a" value="<?php echo($a)?>" required>
        </div>
        <div>
            <label for="a">b: </label>
            <input type="text" id="b" name="b" value="<?php echo($b)?>" required>
        </div>
        </div>
        <div>   
            <fieldset>
                <legend>Operazione</legend>
                <div>
                <input type="radio" id="som" name="operazioni[]" value="somma" />
                <label for="sum">somma</label>
                </div>

                <div>
                <input type="radio" id="diff" name="operazioni[]" value="differenza" />
                <label for="diff">differenza</label>
                </div>

                <div>
                <input type="radio" id="prod" name="operazioni[]" value="prodotto" />
                <label for="prd">prodotto</label>
                </div>

                <div>
                <input type="radio" id="quoz" name="operazioni[]" value="quoziente" />
                <label for="quoz">quoziente</label>
                </div>
            </fieldset> 
        </div>
        <div>   
            <fieldset>
                <legend>Opzioni</legend>
                <div>
                <input type="checkbox" id="abs" name="opzioni[]" value="assoluto" />
                <label for="abs">valore assoluto</label>
                </div>

                <div>
                <input type="checkbox" id="qrt" name="opzioni[]" value="quadrato" />
                <label for="qrt">quadrato</label>
                </div>

                <div>
                <input type="checkbox" id="ddc" name="opzioni[]" value="duedecimali" />
                <label for="ddc">arrotonda a 2 decimali</label>
                </div>
            </fieldset>
        </div>
        <input type="submit"></input>
    </form>
    </div>
</body>
</html>

<?php 
echo($risultato)
?>