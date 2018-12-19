 <?php

spl_autoload_register(function($nameclass){

    var_dump($nameclass);

$dirClass = "class";
$filename = $dirClass.DIRECTORY_SEPARATOR.$nameclass.".php";

    if(file_exists($filename)){

        require_once($filename);

    }

});
