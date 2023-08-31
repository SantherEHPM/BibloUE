<?php
    $root = '/BibloUE/';
    function printHead($view){
        $root = $GLOBALS["root"];
        ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BiblioUE-<?php echo $view ?></title>
        <link href=<?php echo $root.'assets/img/icon_ue.svg' ?> rel="icon">
        <link href="<?php echo $root.'nameless/nameless.css'; ?>" rel="stylesheet">
        <link href="<?php echo $root.'nameless/specific.css'; ?>" rel="stylesheet">
    </head>
    <?php } 
    function printScripts($scripts=array()){
        $root = $GLOBALS["root"];
    ?>
    <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="<?php echo $root.'nameless/nameless.js'?>"></script>
    <?php 
        foreach($scripts as $script){
            ?>
            <script src="<?php echo $root.'scripts/'.$script?>" type="module"></script>
            <?php
        }
    }
    ?>