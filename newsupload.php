<?php
include("config.php");
 
if(isset($_POST['but_upload'])){
   $maxsize = 86595431; 
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       	   $sub=$_POST['sub'];
       $name = $_FILES['file']['name'];
       $target_dir = "ifiles/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("jpg","jpeg","png");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
             $_SESSION['message'] = "File too large. File must be less than 11MB.";
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO ifiles(name,location,sub) VALUES('".$name."','".$target_file."','".$sub."')";

               mysqli_query($con,$query);
               $_SESSION['message'] = "Upload successfully.";
             }
          }

       }else{
          $_SESSION['message'] = "Invalid file extension.";
       }
   }else{
       $_SESSION['message'] = "Please select a file.";
   }
   header('location:adminarea/@dmin.php');
   exit;
} 
?>
<!doctype html> 
<html> 
  <head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <style>
     html *{
font-family: "Audiowide", sans-serif;
     }
     .a:link {
  color:black;
  background-color: transparent;
  text-decoration: none;
}
	 .button {
 border: 2px solid #6c5ce7;
  padding: 0.2em 0.4em;
  border-radius: 0.2em;
  background-color: #a29bfe;
  transition: 1s;
  padding: 2px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button ::hover{
    background-color: #81ecec;
  border: 2px solid #00cec9;
}
input[type="file"]::file-selector-button {
  border: 2px solid #6c5ce7;
  padding: 0.2em 0.4em;
  border-radius: 0.2em;
  background-color: #a29bfe;
  transition: 1s;
 
     margin: 5px 3px;
}

input[type="file"]::-ms-browse:hover {
  background-color: #81ecec;
  border: 2px solid #00cec9;
}

input[type="file"]::-webkit-file-upload-button:hover {
  background-color: #81ecec;
  border: 2px solid #00cec9;
}

input[type="file"]::file-selector-button:hover {
  background-color: #81ecec;
  border: 2px solid #00cec9;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th  {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;
background: rgb(255 255 255 / 25%);}

#customers tr:hover {background-color: #ddd;
background: rgb(255 255 255 / 25%);}

#customers th{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
div {text-align: center;}

body {
    margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  //  font-family: "Permanent Marker", cursive;
    overflow: auto;
    background: linear-gradient(315deg, rgba(101,0,94,1) 3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(255,25,25,1) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
h3 {text-align: center;}
	 </style>
  </head>
  <body>
    <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
<h3><u><b>News Upload</b></u></h3>
    <form method="post" action="" enctype='multipart/form-data'>
      <input id="fileUpload"  type='file' name='file' />
        <input class="button" type='submit' value='Upload' name='but_upload'><br>
         <input type="text"  name="sub" placeholder="Add desciption" required>
       <!-- Upload response -->
   <u> <b><p><?php 
    if(isset($_SESSION['message'])){
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }
    ?></p></b></u>
    
    </form>

    <?php
include_once 'config.php';

// fetch files
$sql = "select name from ifiles";
$result = mysqli_query($con, $sql);
?>
    
            <table id="customers">
                
                    <tr>
                        <th>#</th>
                        <th>File Name</th>
                    </tr>
                
                
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><a href="ifiles/<?php echo $row['name']; ?>" download><?php echo $row['name']; ?></a></td>
                </tr>
                <?php } ?>
              
            </table>
            
  </body>
</html>