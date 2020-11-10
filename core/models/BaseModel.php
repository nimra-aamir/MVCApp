<?php
namespace core\models;

define('ROOT', dirname(__DIR__));
require_once (ROOT.'/core/autoload.php');

class BaseModel implements \core\models\ModelInterface
{
    private $con = null;
    private $db = null;

    public function __construct()
    {
        $this->con = $this->getConnection();
        $this->db = new \core\models\database\QueryBuilder();
    }

    public function addObj($table_name, $entity)
    {
    }

    public function getObj($table_name, $entity)
    {
    }

    public function updateObj($table_name, $entity)
    {

    }

    public function deleteObj($table_name, $entity)
    {

    }

    public function getAll($table_name, $entity)
    {
        $query = $this->db->getAll($table_name);
        $result = $this->con->executeQuery($query);
        return $result;
    }

    public function doAction($request)
    {
        $this->getConnection();
        $model = $this->loadModel($request->controller);
        $result = $model->performAction($model, $request->action, $request->entity, $request->controller);
        while ($row = $result->fetch_assoc()) {
            echo $row['firstName']."<br>";
        }
    }

    public function loadModel($model)
    {
        return \core\models\ModelFactory::getInstance($model); //get model
    }

    public function performAction($model, $action, $entity, $model_name)
    {
        return $model->$action($model_name, $entity);
    }

    public function getConnection()
    {
        return \core\models\database\drivers\mysqli\mysqli_driver::getSqliInstance();
    }

}