<?php

class base{
    public static $name = 'saswat';

    public static function show()
    {
        echo self::$name;
    }

    // function __construct()
    // {
    //     self::show();
    // }
    function __construct($n)
    {
        self::$name = $n;
    }
}

// echo base::$name;

// base::show();
//$obj = new base();
$obj = new base('aryan');
$obj->show();



// ===== situation 2

// class base{
//     static $name = 'aryan2';

// }

// class derived extends base{
//     public static function show() 
//     {
//         echo parent::$name;
//     }
// }

// derived::show();