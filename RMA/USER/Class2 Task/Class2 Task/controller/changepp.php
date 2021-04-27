<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ../login.php");
    exit();
}

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// return;

if (isset($_POST['upload']) && $_FILES['profilepicfile']) {
    require_once('../model/database.php');
    $errors = [];

    $directory = "../images/uploads/";
    $file = $_FILES['profilepicfile'];
    $target_file = $directory . $file['name'];
    $id = (isset($_POST['id'])) ? htmlentities(htmlspecialchars($_POST['id'])) : '';
    $img_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $type = (isset($_POST['type'])) ? htmlentities(htmlspecialchars($_POST['type'])) : '';

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);
    
    if (empty($file['name']) && empty($file['type'])) {
        array_push($errors, "choosefile");
    }
    
    if (empty($id)) {
        array_push($errors, "emptyid");
    }

    // if (!getimagesize($file["tmp_name"]) && !(empty($file['name']) && empty($file['type']))) {
    //     array_push($errors, "isnotfile");
    // }
    if (file_exists($target_file) && !(empty($file['name']) && empty($file['type']))) {
        array_push($errors, "fileexists");
    }
    if ($file["size"] > 4000000 && !(empty($file['name']) && empty($file['type']))) {
        array_push($errors, "bigfile");
    }
    if (preg_match("/jpg|jpeg|png/", $img_type) != 1 && !(empty($file['name']) && empty($file['type']))) {
        array_push($errors, "notfiletype");
    }

    if (count($errors)) {
        $url = "?errors=";
        for ($i = 0; $i < count($errors); ++$i) {
            $url = $url . $errors[$i] . ',';
        }
        header("Location:../changepp.php$url");
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';
        exit();
    }

    if ($type === "restaurantadmin") {
        
        $img_url = preg_replace("/\.\.\//", "", $target_file);
        $_SESSION['purl'] = $img_url;
        
        // var_dump($img_url);
        $result = update("restaurant_admin", "r_id = '$id'", "purl = '$img_url'");
        
        if ($result) {
            move_uploaded_file($file["tmp_name"], $target_file);
        }
        // return;
    } else if ($type === "management") {
    } else if ($type === "user") {
    } else if ($type === "admin") {
        
        $img_url = preg_replace("/\.\.\//", "", $target_file);
        $_SESSION['purl'] = $img_url;
        
        // var_dump($img_url);
        $result = update("admin", "id = '$id'", "purl = '$img_url'");
        
        if ($result) {
            move_uploaded_file($file["tmp_name"], $target_file);
        }
        // return;
    }

    // echo preg_replace("/\.\.\//", "", $target_file);

    // for ($i = 0; $i < count($tmp_arr); $i++) {
    //     if ($tmp_arr[$i][0]->email == $_SESSION['email']) {
    //         $tmp_arr[$i][0]->purl = $img_url;
    //         $_SESSION['purl'] = $img_url;
    //         break;
    //     }
    // }

    // $json_new_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_new_data);

    header("Location: ../changepp.php?success=true");
    exit();
} else {
    header("Location: ../changepp.php");
    exit();
}
