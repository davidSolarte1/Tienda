<?php
    session_start();
    echo '
            <script>
                alert("Se ha cerrado la sesión");
                window.location ="../../../index.php";
            </script>
        ';
    session_destroy();

?>