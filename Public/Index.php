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
            $records[] = fgetcsv($file);

            $records[] = $record;
        }

        fclose($file);
        print_r($records);
    }
}
class csv {

    static public function getrecords($file) {}
}
class html {}
class system {}