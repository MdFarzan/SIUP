<?php

    /* 
        php example for upload handling

    */

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        
        var_dump($_FILES);
        echo "<br><hr>";
        var_dump($_POST);
        
        // img-1 is id which is given while initiating
        if($_FILES['img-1']['size']>0){
            // file exists
            /* time to upload */
            echo "Perform upload and update ref in db.";
        }
        else{

            // an flag is added with each file tag to determine file was exist but it's removed by user
            /* useful in case of updating data */


            if($_POST['flag-img-1'] == 1){
                // file is removed by user
                /* it's time to change db ref to null  */
                echo "delete file from server and make ref to null";
            }

        }

        die('You are in Uploading....');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIUP | Example</title>

    <!-- include SIUP css -->
    <link rel="stylesheet" href="siup/style.css" />
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">

    <div class="siup" id="img-1">
    </div>


    <input type="submit" value="submit" />
    </form>
    
    <!-- include siup js -->
    <script src="siup/script.js"></script>


    <script>
        // set accept formats globally
        SIUP.setAcceptFormats('.jpg,.png');

        
        // initiate with unique id
        // it uses id as name attribute for file tag
        const img1 = new SIUP('img-1');


    </script>
</body>
</html>