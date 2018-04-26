<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<div class="container">

<h2>TASK FEILDS</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
     <div class="form-group">
     <label for="name">Name:</label>
              <input type="text" name="fname" id="name" class="form-control" pattern="[A-Za-z]{0-10}" required>
			</div>

         <div class="form-group">			
		 <label for="email">Email:</label>
		 
               <input type="email" name="email" id="email" class="form-control"  required>
	    </div>
		 <div class="form-group">
			   <label for="phone">PhoneNumber</label>
			   
			   <input type="text" name="phonenumber" id="phone"class="form-control"  minlength=10 maxlength=10  pattern="^[0-9]*$" required>
	 </div>
	 
	 
	   <div class="form-group"> 
                   <label for="gender">Gender:</label>
               <label class="radio-inline">
                 <input type="radio" name="gender"  id="gender" value="male" required >Male
                      </label>
                 <label class="radio-inline">
                 <input type="radio" name="gender" id="gender"  value="female">Female
              </label>
        </div>
	      
	 
      	  <div class="form-group">
			    <label for="Description">Description</label>
			   
                     <textarea type="text" name="description" id="Description"class="form-control" required></textarea>
	   </div>	 
	   
	     <div class="form-group">
            <label for="exampleInputFile">File input:</label>
              <input name="file" size="60" type="file" accept=".txt" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        </div>
	   
			<div class="form-group">		 
           <input type="submit" name="submit" value="Read Contents" class="btn btn-primary"> 
		   </div>
		   
</form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
	$email=htmlspecialchars($_REQUEST['email']); 
	$phone=htmlspecialchars($_REQUEST['phonenumber']);
	$description=htmlspecialchars($_REQUEST['description']);
	$gender=htmlspecialchars($_REQUEST['gender']);
	
	
	
	
	
	
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
		echo "<br>";
		
    }
	echo $email;
	echo "<br>";
	echo $phone;
	echo "<br>";
    echo $gender;
	echo "<br>";
	echo $description;
	echo "<br>";
	
	if($_FILES){
	
  //Checking if file is selected or not
    if($_FILES['file']['name'] != "") {
  
        //Checking if the file is plain text or not
  if(isset($_FILES) && $_FILES['file']['type'] != 'text/plain') {
  echo "<span>File could not be accepted ! Please upload any '*.txt' file.</span>";
  exit();
  } 
  echo "<center><span id='Content'>Contents of ".$_FILES['file']['name']." File</span></center>";
  
  //Getting and storing the temporary file name of the uploaded file
  $fileName = $_FILES['file']['tmp_name'];
  
  //Throw an error message if the file could not be open
  $file = fopen($fileName,"r") or exit("Unable to open file!");
   
  // Reading a .txt file line by line
  while(!feof($file)) {
  echo fgets($file). "";
  }
   
  //Reading a .txt file character by character
  while(!feof($file)) {
 echo fgetc($file);
 }
 fclose($file);
 }

 else {
 if(isset($_FILES) && $_FILES['file']['type'] == '')
 echo "<span>Please Choose a file by click on 'Browse' or 'Choose File' button.</span>";
 }
}
	
	
	
}
?>

</body>
</html>