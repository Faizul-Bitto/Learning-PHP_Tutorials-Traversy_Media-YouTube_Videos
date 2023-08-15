<?php
/* ----------- File upload ---------- */


$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

//                 name
if (isset($_POST['submit'])) {

    // Check if file was uploaded
    //             name_of_file    check is it name or not  
    if (!empty($_FILES['upload']['name'])) {


        //                  name_of_file    check is it name or not                        
        $file_name = $_FILES['upload']['name'];


        //              name_of_file    check is it size or not    
        $file_size = $_FILES['upload']['size'];


        //              name_of_file    check is it tmp_name or not
        $file_tmp = $_FILES['upload']['tmp_name'];


        //Where we want to get/save the file -> that direction
        //             uploads -> name of the folder
        $target_dir = "uploads/{$file_name}";


        // Get file extension 
        //below function will divide the file name after seeing this '.'. If the file name is file.png -> then it will divide like this:
        // file   and   png
        $file_ext = explode('.', $file_name);


        //As there are two strings here -> file and png, we want only the last string for checking extension.
        //As the last string is the extension.
        //So by taking end() function, we are taking the last value. If it is png, then png, if it is jpg then jpg and so on and on.
        $file_ext = strtolower(end($file_ext));

        // echo $file_ext;
        echo $file_ext;


        // Validate file type/extension, now we have to check the file is image file or not by checking extensions.
        // checking by   taking file_ext and allowed_ext array. 
        if (in_array($file_ext,         $allowed_ext)) {


            // Validate file size
            if ($file_size <= 3000000) { // 1000000 bytes = 1MB


                // Upload file
                //move_uploaded_file -> this will upload the file from the temporary location to target directory
                move_uploaded_file($file_tmp, $target_dir);

                // Success message
                echo '<p style="color: green;">File uploaded!</p>';


                // Show the image :
                echo "<img src='$target_dir'";
            } else {
                echo '<p style="color: red;">File too large!</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php echo $message ?? null; ?> <!--                             For uploading file we must need to put enctype = "multipart/form-data" -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>