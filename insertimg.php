<?php 
include('header.php');
include('connect.php');
?>





<form action="" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>


<?php
// Include the database configuration file

$statusMsg = '';

// File upload path
if(isset($_POST["submit"])) {

	$targetDir = "uploads/";
	$fileName = basename($_FILES["file"]["name"]);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if(!empty($_FILES["file"]["name"])){
	    // Allow certain file formats
	    $allowTypes = array('jpg','png','jpeg','gif','pdf');
	    if(in_array($fileType, $allowTypes)){
	        // Upload file to server
	        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
	            $insert = mysqli_query($con,"INSERT into users (img) VALUES ('".$fileName."')");
	            if($insert){
	                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
	            }else{
	                $statusMsg = "File upload failed, please try again.";
	            } 
	        }else{
	            $statusMsg = "Sorry, there was an error uploading your file.";
	        }
	    }else{
	        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
	    }
	}else{
	    $statusMsg = 'Please select a file to upload.';
	}

	// Display status message
	echo $statusMsg;
}

?>

<?php
function image()
{
	$query1 = mysqli_query($con,"SELECT image FROM product ORDER BY id DESC");

if(mysqli_num_rows($query1) > 0){
    while($row = mysqli_fetch_assoc($query1)){
        $imageURL = 'uploads/'.$row["image"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php }
}
// Include the database configuration file

// Get images from the database
 ?>