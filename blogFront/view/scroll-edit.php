<h1 class="page-header">
     Nuevo Registro
</h1>

<form id="frm-scroll" action="controller/scrollController.php?action="<?php echo $action; ?> method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
    <input type="hidden" name="idscroll" value="<?php echo $scr[0]; ?>" />
    
    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Título</label>
        <input type="text" name="titulo" value="<?php echo $scr[1]; ?>" class="form-control" id="validationCustom01" value="Mark" placeholder="Ingrese el título" required >
        <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">URL Imagen</label>        
        <input type="text" name="imagen" value="<?php echo $scr[2]; ?>" class="form-control" id="validationCustom01" value="Mark" placeholder="Ingrese la URL de la imagen" required >
        <div class="valid-feedback">Correcto</div>
    </div>
    <div class="col-md-8">
        <label for="validationCustom01" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="validationCustom01" value="Mark" placeholder="Ingrese la descripción">
            <?php echo $scr[3]; ?>
        </textarea>
        <div class="valid-feedback">Correcto</div>
    </div>
    
    <br />
    <br />
    <br />
    <br />
    <div class="col-6">
        <div class="text-right">
            <button class="btn btn-success">Guardar</button>
        </div>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-scroll").submit(function(){
            return $(this).validate();
        });
    })
</script>