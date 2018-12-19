 <?php

spl_autoload_register(function($nameclass){

    var_dump($nameclass);

$dirClass = "class";
$filename = $dirClass . DIRECTORY_SEPARATOR . $nameclass . ".php";

    if(file_exists($filename)){

<<<<<<< HEAD
        require_once($filename);
=======
         require_once ($filename);
>>>>>>> ed7ccbf32a6a0f06552556f336ad33e84205e726

    }

});
