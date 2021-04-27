<?php
if (isset($_POST['changepass'])) {
    require_once("../model/database.php");
    // $notFound = true;
    $errors = [];
    $randPass;

    $email = (isset($_POST['email'])) ? htmlentities(htmlspecialchars($_POST['email'])) : '';
    $type = (isset($_POST['type'])) ? htmlentities(htmlspecialchars($_POST['type'])) : '';

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);

    // foreach ($tmp_arr as $e) {
    //     if ($e[0]->email == $email) {
    //         $notFound = false;
    //         $randPass = random_int(99999999, 999999999999);
    //         $e[0]->password = $randPass;
    //         break;
    //     }
    // }

    if (empty($email)) {
        array_push($errors, "emptyemail");
    }

    if (empty($type)) {
        array_push($errors, "emptytype");
    }

    if (preg_match("/restaurantadmin|management|user|admin/", $type) != 1 && !empty($type)) {
        array_push($errors, "type");
    }

    if (isset($_POST["email"]) && !empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "email");
        }
    }

    if (!isExist("email", "email", "$email") && !empty($email)) {
        array_push($errors, "notfoundemail");
    }

    // if ($notFound) {
    //     header("Location: ../forgetpassword.php?errors=notfoundemail");
    //     exit();
    // }

    if (count($errors)) {
        $url = "?errors=";
        for ($i = 0; $i < count($errors); ++$i) {
            $url = $url . $errors[$i] . ',';
        }

        // url = http://localhost/registration_ra.php?errors=name,duplicate,password,

        header("Location: ../forgetpassword.php$url");
        exit();
    }

    $randPass = random_int(99999999, 999999999999);

    if ($type === "restaurantadmin") {
        $e_id = read("email", "e_id", "e_id", "email = '$email'")[0]['e_id'];
        $result = update("restaurant_admin", "e_id = '$e_id'", "password = '$randPass'");
        // var_dump($e_id);
        // return;
    } elseif ($type === "management") {
        $e_id = read("email", "e_id", "e_id", "email = '$email'")[0]['e_id'];
        $result = update("management", "e_id = '$e_id'", "password = '$randPass'");
    } elseif ($type === "user") {
        $e_id = read("email", "e_id", "e_id", "email = '$email'")[0]['e_id'];
        $result = update("user", "e_id = '$e_id'", "password = '$randPass'");
    } elseif ($type === "admin") {
        $e_id = read("email", "e_id", "e_id", "email = '$email'")[0]['e_id'];
        $result = update("admin", "e_id = '$e_id'", "password = '$randPass'");
    }
    // update("email", "email = '$email'", "$email");

    // $json_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_data);
    header("Location: ../forgetpassword.php?success=$randPass");
    exit();
} else {
    header("Location: ../login.php");
    exit();
}
