<?php
require_once("DataSource.php");
class Empleados_Documentos{

  protected $ds;
  protected $table           = "empleados_documentos";
  protected $mainId          = "_idDocumento";

  public function __construct(){
    $this->ds 		= new DataSource();
  }

  public function getFields(){
       return $this->ds->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.Columns where TABLE_NAME = '".$this->table."'");
  }

  public function createRecord($params){
      return $this->ds->insertSQL($this->table,$params);
  }

  public function getRecordsById($params){
         return $this->ds->query("select * from ".$this->table." where _idEmpleado = '".$params['_idEmpleado']."'");
  }

  public function deleteRecord($params){
     return $this->ds->deleteSQL($this->table,$this->mainId,"=",$params[$this->mainId]);
  }

  public function updateRecord($params){
      return $this->ds->updateSQL($this->table,$params,$this->mainId,"=",$params[$this->mainId]);
  }



}
?>