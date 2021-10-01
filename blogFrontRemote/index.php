<?php require_once "header.php"; ?>


<div class="col-md-8">
    <label for="validationCustom01" class="form-label">Palabra Clave</label>
    <input type="text" id="palabraclave" name="palabraclave" Value="" class="form-control" id="validationCustom01" value="Mark" placeholder="Ingrese la palabra clave" required >
    <div class="valid-feedback">Correcto</div>
</div>
<div id="contentapi">
    <?php
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://gnews.io/api/v4/search?q=relojes&token=c82ebeafb63c9fd63e72a3e2e9e850da');

        $result = (array)json_decode(json_encode(curl_exec($ch)),true);
        $AgrupacionPorDocumento=array();

        foreach ($result as $indice => $documento) {
            $documento_id=$documento["articles"];
            unset($documento['articles']);
            $AgrupacionPorDocumento[$documento_id][] = $documento;
        }

        foreach ($AgrupacionPorDocumento as $indice => $documentos) {
            echo $documento['title'];
        }

        curl_close($ch);
        
    ?>
</div>
<br />
<br />
<?php require_once "footer.php"; ?>