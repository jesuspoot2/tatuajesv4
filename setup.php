<?php 
require_once 'functions.php';

createTable('informacion',
             'correo VARCHAR(40),
             tunombre VARCHAR(40),
             texto VARCHAR(40),
             INDEX(correo(6))');

?>

        <br>...done.
    </body>
</html>