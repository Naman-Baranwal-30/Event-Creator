<?php
include "db.php";
include_once "crudoperations.php";
$crudObj = new CrudOperations();
if ($_POST['crudOperation'] == "saveData") {
    $name = $_POST['name'];
   
    $eid=$_POST['eid'];
    $editId = $_POST['editId'];
    $save = $crudObj->saveData($connection,$name,$editId,$eid);
    if ($save){
        echo "saved";
    }
}
?>
<?php
if ($_POST['crudOperation'] == "getData") {
    $sr = 1;
    $tableData = '';
    $eid=$_POST['eid'];
    $allData = $crudObj->getAllData($connection,$eid);
    if ($allData->num_rows>0) {
        while ($row = $allData->fetch_object()) {
            $tableData .= ' <tr bgcolor=#660033>
                <td class="font1">'.$sr.'</td>
                <td class="font1">'.$row->name.'</td>
                <td><a href="javaScript:void(0)" onclick="editData(\''.$row->sid.'\',\''.$row->name.'\',\''.$row->eid.'\');" class="myButton2">Edit <i class="fa fa-pencil-square-o"></i></a>
                <a href="javaScript:void(0)" onclick="deleteData(\''.$row->sid.'\');" class="myButton3">Delete <i class="fa fa-trash-o"></i></a>
                <i class="fa fa-spinner fa-spin"  id="deleteSpinner'.$row->sid.'" style="color: #ff195a;display: none"></i></td>
            </tr>';
            $sr++;
        }
    }
    echo $tableData;
}

if ($_POST['crudOperation'] == "deleteData"){
    $deleteId = $_POST['deleteId'];
    $delete = $crudObj->deleteData($connection,$deleteId);
    if ($delete){
        echo "deleted";
    }
}?>
