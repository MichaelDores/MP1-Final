<?php

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/12/2019
 * Time: 5:27 PM
 */

main::start();


class main {

    static public function start() {

        $file = fopen("Mini Project.csv","r");

        while(! feof($file))
        {
            $records[] = $file;
        }

        fclose($file);
        print_r($records);
    }
}