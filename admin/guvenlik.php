<?php

    function guvenlik($veri) {
        $veri = htmlspecialchars($veri);
        return trim($veri);
    }

?>