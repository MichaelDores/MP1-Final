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

        $records = csv::getRecords($filename);
        $table = html::generatetable($records);

        }

    }

class html
{

    public static function generatetable($records)
    {
        foreach ($records as $record) {
            $array = $record->returnarray();
            print_r($array);
        }

    }
}

class csv
{

    static public function getRecords($filename){

        $file = fopen($filename, "r");

        $fieldnames = array();

        $count = 0;

        while(! feof($file))
        {

            $record = fgetcsv($file);
            if($count== 0) {
                $fieldnames = $record;
            } else {
                $records[] = recordfactory::create($fieldnames, $record);
            }
            $count++;
        }

        fclose($file);
        return $records;

    }

}

class record{

    public function __construct(Array $fieldnames = null, $values = null)
    {
        $record = array_combine($fieldnames, $values);

        foreach($record as $property => $value) {
            $this->createproperty($property, $value);
        }

    }

    public function returnarray() {
        $array = (array) $this;
        return $array;

    }

    public function createProperty($name = 'name', $value = 'Mike') {

        $this->{$name} = $value;

    }
}

class recordfactory {

    public static function create(Array $fieldnames = null, Array $values = null){


       $record = new record($fieldnames, $values);

        return $record;

    }
}