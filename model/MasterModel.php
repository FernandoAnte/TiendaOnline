<?php
include_once '../lib/conf/Connection.php';

class MasterModel extends Connection{

    public function insert($sql)
    {
        $result = mysqli_query($this->getConnect(), $sql);
        if(!$result){
            echo mysqli_error($this->getConnect());
        }
        return $result;
    }

    public function consult($sql)
    {

        $result = mysqli_query($this->getConnect(), $sql);
        if(!$result){
            echo mysqli_error($this->getConnect());
        }
        return $result;
    }

    public function update($sql)
    {
        $result = mysqli_query($this->getConnect(), $sql);
        return $result;
    }

    public function delete($sql)
    {
        $result = mysqli_query($this->getConnect(), $sql);
        return $result;
    }

    function autoIncrement($id, $tabla)
    {
        $sql = "select max($id) from $tabla";
        $resultado = mysqli_query($this->getConnect(), $sql);
        $contador=mysqli_fetch_row($resultado);
        return end($contador) + 1;
    }
}
