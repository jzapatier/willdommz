<?php require_once "header.php"; ?>
<script>
    //Simple codigo para hacer la paginacion scroll
    $(document).ready(function() {
        $('.scroll').jscroll({
        loadingHtml: '<img src="gif.gif" alt="Loading" />'
        });
    });
</script>
    <div class="well well-sm text-right">
        <a class="btn btn-primary" href="?c=Scroll&a=Crud">Nuevo Usuario</a>
    </div>
    


    <div class="scroll" style="margin-top:10px;">
        <?php include_once('pscroll.php'); ?>
    </div>
<?php require_once "footer.php"; ?>