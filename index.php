<?php 

    $arrivato = FALSE;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $arrivato = TRUE;
        $mood = htmlspecialchars($_POST["mood"]);
        $frase = htmlspecialchars($_POST["frase"], ENT_QUOTES, 'UTF-8');

        

        if(!empty($mood) && !empty($frase)){

        $immagine ="https://cataas.com/cat/" . urlencode($mood) . "/says/" . rawurlencode($frase);
            
        }
        elseif (!empty($mood) && empty($frase)) {
            $immagine ="https://cataas.com/cat/" . urlencode($mood);
        }
        elseif(empty($mood) && !empty($frase)){
           $immagine ="https://cataas.com/cat/says/" . rawurlencode($frase);
        }
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Gattati!</title>
    <style>
        body{
            text-align: center;
        }

        form, select, input{
                display: inline-block;
        }

        .avviso{
            color: red;
            font-size: small;
        }

        .outro{
            color: orange;
        }

    </style>
</head>
<body>

        <h1>Preparati per dei gattini!</h1>

        <hr>

        

        <section>
            <form action="" method="post">


                <h3>Seleziona il mood del gattino</h3> 
                <fieldset>
                
            
                <select name="mood">
                    <option value="">--</option>
                    <option value="cute">Carino</option>
                    <option value="angry">Arrabbiato</option>
                    <option value="cool">Figo</option>
                    <option value="crazy">Matto</option>
                </select>

                </fieldset>
                

                 <h3>Inserisci la frase</h3>
                <fieldset>
               
                <input type="text" name="frase">

                </fieldset>

                <button type="submit">Invia!</button>


            </form>
        </section>


    <?php if(isset($immagine)): ?>

        <section>
            <img src="<?php  echo $immagine; ?>" alt="Foto gattino" width="500px" height="500px" ">
        </section>

    <?php elseif($arrivato): ?>

        <section>
            <img src="https://cataas.com/cat?width=500" alt="Foto gattino">
        </section>

    <?php endif ?>

    <footer>
        <p>Guarda la pagina su <a href="https://github.com/Popirex/Gattati">Github!</a></p>
        <p class="outro">Popirex</p>
    </footer>
    
</body>
</html>