<?php
include_once "scramblf.php";
$task = '';

/**
 * Checking Clicked METHOD 
 * chcking clicked mehtod key or not 
 */
if (isset($_GET['task']) && $_GET['task'] != '') {
    $task = $_GET['task'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if ($task == 'key') {
    $key_original = str_split($key);
    shuffle($key_original);
    $key = join('', $key_original);
} else if (isset($_POST['key']) && $_POST['key'] != '') {
    $key = $_POST['key'];
    echo $key;
}

if ($task == 'encode') {
    if ( isset($_post['data']) && $_post['data'] != '' ) {
        $data = $_post['data'];
        echo $data;
    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        .data-scrambler {
            padding: 40px 0px;
            background-color: #ddd;
        }
    </style>

</head>

<body>


    <div class="data-scrambler">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2>Data Scrambler</h2>
                    <p>Use this application to scramble your data</p>
                    <p>
                        <a href="/php/scramble/?task=encode">Encode</a> |
                        <a href="/php/scramble/?task=decode">Decode</a> |
                        <a href="/php/scramble/?task=key">Generate Key</a>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="index.php">
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" class="form-control" id="key" name="key" <?php displayKey($key); ?>>
                        </div>
                        <div class="form-group">
                            <label for="data">Data</label>
                            <textarea name="data" id="data" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="result">Result</label>
                            <textarea name="result" class="form-control" id="result" cols="30" rows="10"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>