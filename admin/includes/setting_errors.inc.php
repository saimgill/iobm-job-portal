<?php

    if(isset($_GET['error']) && $_GET['error'] == "wrongpass"){
        echo "<script>alert('You entered wrong password');</script>";
        echo "<script>document.getElementById('password-error').innerHTML = '* Please enter the correct password'</script>";
    }
    if(isset($_GET['error']) && $_GET['error'] == "updatefailed"){
        echo "<script>alert('There was a problem updating your profile');</script>";
    }
        if(isset($_GET['error']) && $_GET['error'] == "fileTooBig"){
        echo "<script>document.getElementById('photo-error').innerHTML = '* File too big'</script>";
    }

    if(isset($_GET['error']) && $_GET['error'] == "incorrectFile"){
        echo "<script>document.getElementById('photo-error').innerHTML = '* Incorrect File Format'</script>";
    }
    if(isset($_GET['error']) && $_GET['error'] == "errorInFile"){
        echo "<script>document.getElementById('photo-error').innerHTML = '* There was an error in uploading this file'</script>";
    }

?>