<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EVENTS CREATED</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#000066;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
 </style>   
<body style="background-image:url('https://cdn.wallpapersafari.com/16/83/jGJp1D.jpg')">
<div>
<body>
    <ul>
  <li><a href="new.py" class="font1" >CREATE EVENT</a></li>
  <li><a href="index2.php" class="font1">VIEW EVENTS</a></li>
</ul>
    <h3 class="font1">EVENTS CREATED</h3>
    <a href="javaScript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Add New <i class="fa fa-plus" aria-hidden="true"></i></a>
    <table class="table table-bordered">
        <thead id="thead" style="background-color:#135361">
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Action</th>
                <th>View / Add Core Team</th>
            </tr>
        </thead>
        <tbody id="crudData"></tbody>
    </table>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">CRUD Application Form</h4>
            </div>
            <div class="modal-body">
                <form id="crudAppForm">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                               <label for="name">Name <span class="field-required">*</span></label>
                               <input type="text" name="ename" id="ename" placeholder="Name" class="form-control">
                           </div>
                           <div class="form-group">
                             <label for="etype">Event Type</label><br>
                             <select name="etype" id="etype" class="form-control">
  <option value="Gaming">Gaming</option>
  <option value="Coding and Technical">Coding and Technical</option>
  <option value="Others">Others</option>
 </select>
                           </div>
                           <div class="form-group">
                               <label for="edate">Event Date:</label><br>
  <input type="date" id="edate" name="edate" value="">
                           </div>
                           <div class="form-group">
                              <label for="eplatform">Platform on which the event will be conducted:</label><br>
  <input type="text" id="eplatform" name="eplatform" value="">
                           </div>
                           <div class="form-group">
                               <label for="edescription">Event Description:</label><br>
<textarea id="edescription" name="edescription" rows="4" cols="50" value="">
  </textarea>
                           </div>
                           <div class="form-group">
                               <label for="esessions">Number of Event sessions:</label><br>
<input type="number" id="esessions" name="esessions" value="">
                           </div>
                           <div class="form-group">
                              <label for="efeei">Event Fee Individual:</label><br>
  <input type="text" id="efeei" name="efeei" value="">
                           </div>
                           <div class="form-group">
                                <label for="efeeg">Event Fee Group:</label><br>
  <input type="text" id="efeeg" name="egfee" value="">
                           </div>
                       </div>
                      
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="editId" id="editId" value="" />
                            <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary"><i class="fa fa-spinner fa-spin" id="spinnerLoader" ></i> <span id="buttonLabel">Save</span> </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="crudapp1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</div>

</html>