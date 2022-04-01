
<?php include_once 'functions.php'?>

<?php if( isset($_FILES['photo']['type']) ){

    $types = array("image/png", "image/jpeg", "image/gif");
    if ( in_array($_FILES['photo']['type'], $types) ) {
        move_uploaded_file( $_FILES['photo']['tmp_name'], "files/".$_FILES['photo']['name']);
    }
    else{
        echo " Your file type is not Allowed";
    }

} ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div class="container" style="padding: 80px 0px;">
    <div class="row">
        <div class="col-md-12">
            <H1>Resut: </H1>
            <pre>
                <?php print_r($_FILES); ?>
            </pre>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fname">First Name</label>
                    <input class="form-control" type="text" name='fname' id="fname">   
                </div>
                <div class="mb-3">
                    <label for="lname">Last Name</label>
                    <input class="form-control" type="text" name='lname' id="fname">   
                </div>
                <div class="mb-3">
                    <label for="file">UploadImage</label>
                    <input class="form-control" type="file" name='photo' id="file">   
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

