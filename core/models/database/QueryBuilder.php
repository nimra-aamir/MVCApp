<?php
namespace core\models\database;

class QueryBuilder {

    private $keys;
    private $values;

    /**
     * QueryBuilder constructor.
     * @param $keys
     */
    public function __construct () {

    }

    public function getAll ($table_name) {
        $sql_query = "SELECT * FROM " . $table_name;
        return $sql_query;
    }

    public function insert ($table_name, $params) {
        $this->extractKeysAndValues($params);
    }

    private function extractKeysAndValues ($params) {
        $keys = " ";
        $values = " ";
        foreach($params as $x => $x_value) {
            $keys .= $x . "," ;
            $values .= $x_value . ",";
            echo "<br>";
        }
    }

}