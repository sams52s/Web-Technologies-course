<?php
session_start();
if (!$_SESSION['login']) {
    header("Location: ../login.php");
    exit();
}

if (isset($_POST)) {

    require_once("../model/database.php");
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
    // return;
    $errors = [];

    $id = (isset($_POST['id'])) ? htmlentities(htmlspecialchars($_POST['id'])) : '';
    $name = (isset($_POST['name'])) ? htmlentities(htmlspecialchars($_POST['name'])) : '';
    $email = (isset($_POST['email'])) ? htmlentities(htmlspecialchars($_POST['email'])) : '';
    // $adminid = (isset($_POST['adminid'])) ? htmlentities(htmlspecialchars($_POST['adminid'])) : '';
    // $rid = (isset($_POST['rid'])) ? htmlentities(htmlspecialchars($_POST['rid'])) : '';
    // $wtype = (isset($_POST['wtype'])) ? htmlentities(htmlspecialchars($_POST['wtype'])) : '';
    $phone = (isset($_POST['phone'])) ? htmlentities(htmlspecialchars($_POST['phone'])) : '';
    $location = (isset($_POST['location'])) ? htmlentities(htmlspecialchars($_POST['location'])) : '';
    $nid = (isset($_POST['nid'])) ? htmlentities(htmlspecialchars($_POST['nid'])) : '';
    $type = (isset($_POST['type'])) ? htmlentities(htmlspecialchars($_POST['type'])) : '';

    // $json_data = file_get_contents('../db/data.json');
    // $tmp_arr = json_decode($json_data);

    if (empty($id)) {
        array_push($errors, "emptyid");
    }

    if (empty($name) && ($type === "user" || $type === "restaurantadmin" || $type === "admin")) {
        array_push($errors, "emptyname");
    }

    if (empty($email)) {
        array_push($errors, "emptyemail");
    }

    // if (empty($adminid) && ($type === "user" || $type === "restaurantadmin")) {
    //     array_push($errors, "emptyadminid");
    // }

    // if (empty($rid) && $type === "management") {
    //     array_push($errors, "emptyrid");
    // }

    // if (empty($wtype) && $type === "management") {
    //     array_push($errors, "emptywtype");
    // }

    if (empty($phone) && ($type === "user" || $type === "management")) {
        array_push($errors, "emptyphone");
    }

    if (empty($location) && ($type === "user" || $type === "restaurantadmin")) {
        array_push($errors, "emptylocation");
    }

    if (empty($nid)) {
        array_push($errors, "emptynid");
    }

    // if (empty($password)) {
    //     array_push($errors, "emptypassword");
    // }

    // if (empty($cpassword)) {
    //     array_push($errors, "emptycpassword");
    // }

    if (empty($type)) {
        array_push($errors, "emptytype");
    }

    if (isset($_POST['name']) && !empty($name)) {
        if (strlen($name) < 2 || preg_match("/[a-zA-z0-9]/", $name) != 1) {
            array_push($errors, "name");
        }
    }

    if (isset($_POST['email']) && !empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "email");
        }
    }
    // if (empty($gender) || preg_match("/male|female|others/", $gender) != 1) {
    //     array_push($errors, "gender");
    // }

    if (isset($_POST['type']) && !empty($location)) {
        if (empty($type) || preg_match("/restaurantadmin|management|user|admin/", $type) != 1) {
            array_push($errors, "type");
        }
    }

    if (isset($_SESSION['email']) && $_SESSION['email'] != $email) {
        if (isset($_POST['email']) && !empty($email)) {
            if (isExist("email", "email", $email)) {
                array_push($errors, "duplicate");
            }
        }
    }

    // if (empty($dob)) {
    //     array_push($errors, "dob");
    // }

    // foreach ($tmp_arr as $e) {
    //     if ($e[0]->email == $email && $_SESSION['email'] != $email) {
    //         array_push($errors, "duplicate");
    //         break;
    //     }
    // }

    if (count($errors)) {
        $url = "?errors=";
        for ($i = 0; $i < count($errors); ++$i) {
            $url = $url . $errors[$i] . ',';
        }
        header("Location:../editprofile.php$url");
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
    //         $tmp_arr[$i][0]->name = $name;
    //         $_SESSION['name'] = $name;
    //         $tmp_arr[$i][0]->email = $email;
    //         $_SESSION['email'] = $email;
    //         $tmp_arr[$i][0]->gender = $gender;
    //         $_SESSION['gender'] = $gender;
    //         $tmp_arr[$i][0]->type = $type;
    //         $_SESSION['type'] = $type;
    //         $tmp_arr[$i][0]->dob = $dob;
    //         $_SESSION['dob'] = $dob;
    //         break;
    //     }
    // }

    if ($type === "restaurantadmin") {

        $L_id = read("location", "L_id", "L_id", "Location = '" . $_SESSION['location'] . "'")[0]['L_id'];
        $e_id = read("email", "e_id", "e_id", "email = '" . $_SESSION['email'] . "'")[0]['e_id'];

        // echo $L_id . '<br>';
        // echo $e_id . '<br>';
        // echo '<pre>';
        // var_dump($e_id);
        // echo '</pre>';
        // return;

        $isRAUpdate = update("restaurant_admin", "r_id = '$id'", "r_name = '$name', NID = '$nid'");
        $isEmailUpadte = update("email", "e_id = '$e_id'", "email = '$email'");
        $isLocationUpdate = update("location", "L_id = '$L_id'", "Location = '$location'");


        if ($isRAUpdate && $isEmailUpadte && $isLocationUpdate) {

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['nid'] = $nid;
            $_SESSION['location'] = $location;

            header("Location: ../editprofile.php?success=true");
            exit();
        } else {
            header("Location: ../editprofile.php?errors=notupdate");
            exit();
        }
    } else if ($type === "management") {
    } else if ($type === "user") {
    } else if ($type === "admin") {
        $e_id = read("email", "e_id", "e_id", "email = '" . $_SESSION['email'] . "'")[0]['e_id'];
        $p_id = read("phone", "p_id", "p_id", "phone = '" . $_SESSION['phone'] . "'")[0]['p_id'];

        $isAdminUpdate = update("admin", "id = '$id'", "a_name = '$name', NID = '$nid'");
        $isEmailUpadte = update("email", "e_id = '$e_id'", "email = '$email'");
        $isPhoneUpdate = update("phone", "p_id = '$p_id'", "phone = '$phone'");

        if ($isAdminUpdate && $isEmailUpadte && $isPhoneUpdate) {

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['nid'] = $nid;
            $_SESSION['phone'] = $phone;

            header("Location: ../editprofile.php?success=true");
            exit();
        } else {
            header("Location: ../editprofile.php?errors=notupdate");
            exit();
        }
    }

    // echo '<hr><pre>';
    // var_dump($tmp_arr);
    // echo '</pre>';

    // $json_new_data = json_encode($tmp_arr);
    // file_put_contents('../db/data.json', $json_new_data);

    // header("Location: ../editprofile.php?success=true");
    exit();
} else {
    header("Location: ../editprofile.php");
    exit();
}
