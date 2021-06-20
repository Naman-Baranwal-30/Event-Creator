<?php
include"db.php";

class CrudOperations
{
    public function saveData($connection,$name,$editId,$eid)
    {
        if ($editId == "") {
            $query = "INSERT INTO coreteam SET name='$name',eid='$eid' ";
        }else{
            $query = "UPDATE coreteam SET name='$name',eid='$eid' WHERE sid='$editId'";
          
        }
        $result = $connection->query($query) or die("Error in saving data".$connection->error);
        return $result;
    }

    public function getAllData($connection,$eid)
    {
        $query = "SELECT * FROM coreteam where eid='$eid'";
        $result = $connection->query($query) or die("Error in getting data".$connection->error);
        return $result;
    }

    public function deleteData($connection,$deleteId){
        $query = "DELETE FROM coreteam WHERE sid='$deleteId'";
        $result = $connection->query($query) or die("Error in deleting data".$connection->error);
        return $result;
    }
}