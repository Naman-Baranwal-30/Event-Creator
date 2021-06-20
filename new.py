#!C:\Users\Naman\AppData\Local\Programs\Python\Python39\python.exe
print("Content-type:text/html")
print();
import cgi,cgitb
import mysql.connector
mydb = mysql.connector.connect( 
user="root",
password="",  
host="localhost",  
database="classroom"
) 

form=cgi.FieldStorage();
#importing the Yagmail library

     
ename=form.getvalue('ename');
etype=form.getvalue('etype'); 
edate=form.getvalue("edate"); 
eplatform=form.getvalue("platform"); 
edescription=form.getvalue("edescription");
esessions=form.getvalue("esessions");  
eifee=form.getvalue("eifee"); 
egfee=form.getvalue("egfee"); 

m="""<html>
<style>
div
{
background-image:url('https://cdn.wallpapersafari.com/16/83/jGJp1D.jpg');

}
.css-input {
   
     padding: 2px;
     font-size: 20px;
     border-width: 5px;
     border-color: #1e06ce;
     background-color: #ffffff;
     color: #000000;
     border-style: solid;
     border-radius: 0px;
     box-shadow: 0px 0px 0px rgba(66,66,66,.75);
     text-shadow: 21px -45px 0px rgba(66,66,66,.75);
     font:Sans Serif;
}
 .css-input:focus {
     outline:none;
}
   .myButton2 {
    background-color:#00cc00;
    
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Trebuchet MS;
    font-size:17px;
    padding:5px 13px;
    text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
}
.myButton2:hover {
    background-color:#ba4522;
}
.myButton2:active {
    position:relative;
    top:1px;
}
.font1{
    font-family:Trebuchet MS;
    font-size:17px;
 text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    color: white;   
}
.font2{
    font-family:Trebuchet MS;
    font-size:27px;
 text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    color: white;   
}
.font3{
    font-family:Trebuchet MS;
    font-size:23px;
 text-decoration:none;
    text-shadow:0px 1px 0px #2f6627;
    color: white;   
}
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
<div>
<body>
<ul>
  <li><a href="new.py" class="font1" >CREATE EVENT</a></li>
  <li><a href="index2.php" class="font1">VIEW EVENTS</a></li>
</ul>
<h2 class="font2">Enter Event Details</h2>

<form action="new.py">
  <label for="ename" class="font3">Event name:</label><br>
  <input type="text" class="css-input" id="ename" name="ename" value=""><br><br>

 <label for="etype" class="font3">Event Type</label><br>
 
 <select name="etype" class="css-input" id="etype">
  <option value="Gaming">Gaming</option>
  <option value="Coding and Technical">Coding and Technical</option>
  <option value="Others">Others</option>
 </select><br><br>

  <label for="edate" class="font3">Event Date:</label><br>
  <input type="date" class="css-input" id="edate" name="edate" value=""><br><br>
  
  <label for="platform" class="font3">Platform on which the event will be conducted:</label><br>
  <input type="text" class="css-input" id="platform" name="platform" value=""><br><br>
  
<label for="edescription" class="font3">Event Description:</label><br>
<textarea id="edescription" class="css-input" name="edescription" rows="4" cols="50" value="">
  </textarea><br><br>

<label for="esessions" class="font3">Number of Event sessions:</label><br>
<input type="number" class="css-input" id="esessions" name="esessions" value=""><br><br>
 
 <label for="eifee" class="font3">Event Fee Individual:</label><br>
  <input type="text" class="css-input" id="eifee" name="eifee" value=""><br>
  <b class="font1">**If no fee for individual or only group Fees mention 0</b><br><br>
  
 <label for="egfee" class="font3">Event Fee Group:</label><br>
  <input type="text" class="css-input" id="egfee" name="egfee" value=""><br><br>
  
  <input type="submit" class="myButton2" value="Submit">
</form> 


</body>
</div>

</html>""";
print(m);

mycursor = mydb.cursor()
# 
sql="insert into event(ename,etype,edate,eplatform,edescrp,esessions,efeei,efeeg) values(%s,%s,%s,%s,%s,%s,%s,%s)";
value=(ename,etype,edate,eplatform,edescription,esessions,eifee,egfee,);

mycursor.execute(sql,value);
mydb.commit()
print(mycursor.rowcount, "<script>alert('record inserted sucessfully')</script>")

mycursor.close();
mydb.close();
