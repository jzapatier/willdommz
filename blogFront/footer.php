<div class="row">
                <div class="col-xs-12">
                    <hr />
                    <footer class="text-center well">
                        <h8> Marcos Zapatier - 
                        CopyRight
                    <?php
                        $copyYear = 2021; // Set your website start date
                        $curYear = date('Y'); // Keeps the second year updated
                        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                    ?> </h8>
                    </footer>                
                </div>    
            </div>
        </div>
    </body>
</html>