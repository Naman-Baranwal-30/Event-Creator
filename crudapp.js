$( document ).ready(function() {
    getAllData();
    console.log( "ready!" );
});
$("form#crudAppForm").on("submit",function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var eid = $("#eid").val();
    var editId = $("#editId").val();
    if (name == ""){
        alert("Please enter name");
        $("#name").focus();
    
    }else{
        $("#buttonLabel").html("Saving...");
        $("#spinnerLoader").show('fast');
        $.post("crudscript.php",{
            crudOperation:"saveData",
            name:name,
            eid:eid,
           // email:email,
            //contact:contact,
            editId:editId,
        },function (response) {
            if (response == "saved") {
                $("#buttonLabel").html("Save");
                $("#spinnerLoader").hide('fast');
                $("#myModal").modal('hide');
                $("form#crudAppForm").each(function () {
                    this.reset();
                });
                getAllData();
            }
        });
    }
});

function getAllData(eid) {
     var eid = $("#eid").val();
    $.post("crudscript.php",{crudOperation:"getData",
eid:eid,
},function (allData) {
        $("#crudData").html(allData);
    });
}

function editData(editId,name,eid) {
   $("#editId").val(editId);
    $("#name").val(name);
    $("#eid").val(eid);
    

    $("#myModal").modal('show');
}

function deleteData(deleteId) {
    if(confirm("Are you sure to delete this ?")){
        $('#deleteSpinner'+deleteId).show('fast');
        $.post("crudscript.php",{crudOperation:"deleteData",deleteId:deleteId},function (response) {
            if (response == "deleted") {
                $('#deleteSpinner'+deleteId).hide('fast');
                getAllData();
            }
        });
    }
}