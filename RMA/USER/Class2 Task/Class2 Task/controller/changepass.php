<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ../login.php");
    exit();
}

if (isset($_POST['changepass'])) {
    $errors = [];

    $cpassword = (isset($_POST['cpassword'])) ? htmlentities(htmlspecialchars($_POST['cpassword'])) : '';
    $npassword = (isset($_POST['npassword'])) ? htmlentities(htmlspecialchars($_POST['npassword'])) : '';
    $ccpassword = (isset($_POST['ccpassword'])) ? htmlentities(htmlspecialchars($_POST['ccpassword'])) : '';

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);

    if (strlen($npassword) < 8 || preg_match("/[\@|\#|\$|\%]/", $npassword) != 1) {
        array_push($errors, "password");
    }
    if ($ccpassword !== $npassword) {
        array_push($errors, "ccpassword");
    }

    // foreach ($tmp_arr as $e) {
    //     if ($e[0]->email == $_SESSION['email']) {
    //         if ($cpassword != $e[0]->password) {
    //             array_push($errors, "cpassword");
    //             break;
    //         }
    //     }
    // }

    if (count($errors)) {
        $url = "?errors=";
        for ($i = 0; $i < count($errors); ++$i) {
            $url = $url . $errors[$i] . ',';
        }
        header("Location:../changepassword.php$url");
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        exit();
    }

    // for ($i = 0; $i < count($tmp_arr); $i++) {
    //     // echo '<pre>';
    //     // echo ($tmp_arr[$i][0]->email);
    //     // echo '</pre>';
    //     if ($tmp_arr[$i][0]->email == $_SESSION['email']) {
    //         $tmp_arr[$i][0]->password = $npassword;
    //         break;
    //     }
    // }

    // echo '<hr><pre>';
    // var_dump($tmp_arr);
    // echo '</pre>';

    // $json_new_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_new_data);

    header("Location: ../changepassword.php?success=true");
    exit();
} else {
    header("Location: ../changepassword.php");
    exit();
}
