
<?php 
include 'connect.php';


if($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

<html>
<head>
<link rel='stylesheet' href='style.css'>
<h1><center><b><img src="https://img.icons8.com/bubbles/80/000000/train.png"/>Medical Tranportation Booking &nbsp<img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png"/></center></b></h1>

</head>

<body>

<form method='post' action = 'book_action.php' align='center'>



<div class="container">
 <section id="form" class="formborder">
  <div class="container2">
    <form><div class="form-row row justify-content-around" name="source">
       &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">Pick-UP Location: </label>
       <select id="inputState" class="form-control" name="source">
       <option>Panvel</option>
            <option>SouthLamar</option>
            <option>NorthLamar</option>
            <option>Jackson Avenue</option>
            <option>The Square</option>
            <option>HWY 6</option>
            <option>Anderson Rd</option>
            <option>Hathorn Rd</option>
            <option>Anchorage Rd</option>
            <option>Sisk Avenue</option>
            <option>Washington Avenue</option>
            <option>MollyBarr Rd</option>
            <option>Belk Bldvd</option> 
            <option>Rebel Dr</option> 

</select>

</div>

<div class="form-group col-md-5" name="dest">
      <label for="inputPassword4"> FINAL DESTINATION :</label>
      <select id="inputState" class="form-control" name="dest">

    <option>Batist Hospital</option>
   <option>Life Dental Oxford</option>
   <option>Oxford Medical Clinic</option>
   <option>Ole Town Med</option>
   <option>Webb Family Medical Clinic</option>
   <option>Oxford Urgent Care</option>
   <option>MississippiCare Oxford</option>
   <option>RedMed Urgent Clinic of Oxfod </option>
   </select> 

</div>

<center><div class="form-group col-md-5" name="type">
    <label for="inputState">JOURNEY TYPE :</label>
    <select id="inputState" class="form-control" name="type">
    <option >Single</option>
    <option >Return</option>
    </select>
    </div>
</center>

<br>

    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <center><label for="inputState"  ><h8>NO OF PASSENGERS :</h8></label></center>
      <center> <input type="number" name="number" required  min="1" max="5"  ></center>
       </div>


<div>   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>

<?php
  include 'footer.php';
  
  ?>

</body>
</html>




           

