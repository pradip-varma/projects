<?php  

include 'components/connect.php';

$link = mysqli_connect("localhost", "root", '', "home_db");

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}


if(isset($_POST['submit']))
{

   $builderName = $_POST['bldName'];
   $licNum = $_POST['liNum'];
   $builderCont = $_POST['conNum'];
   $homAddr = $_POST['homAddr'];
   $consAdd = $_POST['siteAddr'];
   $govId = $_POST['govId'];
   $buildMap = $_POST['map'];
   $buildDesc= $_POST['propDes'];

  
   if ($link->connect_error) {
     die("Connection failed: " . $link->connect_error);
   }

   $query= "INSERT INTO 'permits' (builderName,licenseNum,buildCon,homAddr,ConstrAddr,govId,buildingMap,propDescr) VALUES (NULL,$builderName,$licNum ,$builderCont,$homAddr,$consAdd,$govId,$buildMap,$buildDesc)";
   
   if(mysqli_query($link, $query)){
      echo "Records inserted successfully.";
  } else{
      echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>post property</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.scss">
  

</head>
<body>

<style>
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 40px auto;
  padding: 0;
  table-layout: fixed;
  margin-bottom:20px;
  width: 80%;
  font-size:15px;
}

table caption {
  font-size: 34px;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ED5B2D;;
  padding: .35em;
}


table th{
   color:#ED5B2D;
}

table th,
table td {
  padding: .625em;
  text-align: center;
  
}

table th {
  font-size: 16px;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }

  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border: 1px solid #ED5B2D;
    display: block;
    margin-bottom: 5px;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: 14px;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}


/* general styling */
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}

</style>
   
<?php include 'components/user_header.php'; ?>

<section class="property-form">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>Submit Construction Permit</h3>
      <div class="box">
         <p>Builder Name <span>*</span></p>
         <input type="text" name="bldName" required maxlength="50" placeholder="Builder Name" class="input">
      </div>
      <div class="flex">
         <div class="box">
            <p>License Number <span>*</span></p>
            <input type="number" name="liNum" required min="0" max="9999999999" maxlength="10" placeholder="Builder License Number" class="input">
         </div>

         <div class="box">
            <p>Contact Number <span>*</span></p>
            <input type="number" name="conNum" required min="0" max="9999999999" maxlength="10" placeholder="Mobile Number" class="input">
         </div>
         <div class="box">
         <p>Home Address <span>*</span></p>
         <input type="text" name="homAddr" required maxlength="50" placeholder="Builder's Home Address" class="input">
      </div>
        
         <div class="box">
            <p>Construction Address<span>*</span></p>
            <input type="text" name="siteAddr" required maxlength="100" placeholder="Construction Site address" class="input">
         </div>
      <div class="box">
         <p>Government ID (Canadian) <span>*</span></p>
         <input type="file" name="govId" class="input" accept="image/*" required>
      </div>
      
      <div class="box">
         <p>Building Map <span>*</span></p>
         <input type="file" name="map" class="input" accept="image/*" required>
      </div>
      <div class="box">
         <p>Property Description <span>*</span></p>
         <textarea name="prpDes" maxlength="1000" class="input" required cols="30" rows="10" placeholder="write about property..."></textarea>
      </div>
      
      <input type="submit" value="Submit permit" class="btn" name="post">
   </form>

</section>

<!-- TABLE -->

<table>
  <caption>Requested Permits</caption>
  <thead>
    <tr>
      <th scope="col">Permit ID</th>
      <th scope="col">Builder Name</th>
      <th scope="col">Construction Address</th>
      <th scope="col">Permit Status</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <td scope="row" data-label="Permit ID">887364584735u</td>
      <td data-label="Builder Name">Johnson</td>
      <td data-label="Construction Address">147 King Street E</td>
      <td data-label="Permit Status">In Review</td>
    </tr>

    <tr>
      <td scope="row" data-label="Permit ID">4537357357</td>
      <td data-label="Builder Name">Smith</td>
      <td data-label="Construction Address">67 Scarborough Dr</td>
      <td data-label="Permit Status">In Review</td>
    </tr>

    <tr>
      <td scope="row" data-label="Permit ID">32524674375</td>
      <td data-label="Builder Name">Brandon</td>
      <td data-label="Construction Address">1 Queen Street E</td>
      <td data-label="Permit Status">In Review</td>
    </tr>

    <tr>
      <td scope="row" data-label="Permit ID">957846754</td>
      <td data-label="Builder Name">Florentino</td>
      <td data-label="Construction Address">19 College St E</td>
      <td data-label="Permit Status">In Review</td>
    </tr>
  </tbody>
</table>




<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>