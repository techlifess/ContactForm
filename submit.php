<!DOCTYPE html>
<html>
<head>
    <title>Submit</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="box">
<?php
if(isset($_POST['submit'])){
    // Retrieve form data
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate input fields
    $errors = array();
    if(empty($title)){
        $errors[] = "Title is required";
    }
    if(empty($firstname)){
        $errors[] = "First Name is required";
    }
    if(empty($lastname)){
        $errors[] = "Last Name is required";
    }
    if(empty($telephone)){
        $errors[] = "Telephone number is required";
    }
    if(empty($email)){
        $errors[] = "Email address is required";
    }
    if(count($errors) > 0){
        // Display errors
        echo "<p>Errors:</p>";
        echo "<ul>";
        foreach($errors as $error){
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }else{
        // Display success message and form data
        echo "<h1>Thank you $title $firstname $lastname!</h1>";
        echo "<h2>You have submitted the following details:</h2>";
        echo "<p>Date of Birth: $dob</p>";
        echo "<p>Telephone: $telephone</p>";
        echo "<p>File Uploaded: ".$_FILES['file']['name']."</p>";
        echo "<p>Message: $message</p>";
    }
}
?>
<?php
if(isset($_POST['submit'])){
    // Process form data

    // Clear form inputs
    unset($_POST);
}
?>

<!-- Display "Go Back" button -->
<button class="my-button" onclick="goBack()">Go Back</button>

<!-- JavaScript to navigate back to previous page -->
<script>
function goBack() {
  window.history.back();
}
</script>
</div>
</body>
</html>