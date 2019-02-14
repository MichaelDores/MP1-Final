<?php

/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/12/2019
 * Time: 5:27 PM
 */
main::start("Mini Project.csv");

class main {

    static public function start($filename) {

        $records = csv::getrecords($filename);

        print_r($records);

    }
}
class csv
{

    static public function getrecords($filename){

        $file = fopen($filename, "r");

        while (!feof($file))
        {

            $records = fgetcsv($file);

            $records[] = recordfactory::create();
        }

        fclose($file);
        return $records;

    }

}

class record {}

class recordfactory {

    public static function create (array $array = null){

        $record = new record();

        return $record;

    }
}
