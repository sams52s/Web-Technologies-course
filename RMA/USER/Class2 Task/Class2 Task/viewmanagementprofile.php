<?php require_once("./controller/deps.php"); ?>
<?php header_section("Add Management"); ?>
<?php
if ($_SESSION['login'] == false) {
    header("Location: login.php");
    exit();
}
?>

<main class="clearfix">

    <?php

    // $json_data = file_get_contents("db/managementdata.json");
    // $json_data = json_decode($json_data);

    $email = "";
    $phone = "";
    $management_users = read("management", "w_id");

    // echo '<pre>';
    // var_dump($management_users);
    // echo '</pre>';
    // return;

    // foreach ($management_users as $management_user) {
    //     echo $management_user['r_name'];
    // }
    // return;


    ?>


    <h1 class="main-title">Management List</h1>
    <table class="view-mngmnt">
        <tr>
            <th>Work Type</th>
            <th>Email</th>
            <th>Phone</th>
            <!-- <th>Date Of Birth</th> -->
            <th>NID</th>
            <!-- <th>Gender</th> -->
            <!-- <th>Location</th> -->
        </tr>
        <?php foreach ($management_users as $m_user) : ?>
            <?php
            $email = read("email", "e_id", "email", "e_id = '" . $m_user['e_id'] . "'")[0]['email'];
            $phone = read("phone", "p_id", "phone", "p_id = '" . $m_user['p_id'] . "'")[0]['phone'];
            ?>
            <tr>
                <?php if(isset($m_user['w_type']) && !empty($m_user['w_type'])): ?><td><?php echo $m_user['w_type']; ?></td><?php endif; ?>
                <?php if(isset($email) && !empty($email)): ?><td><?php echo $email; ?></td><?php endif; ?>
                <?php if(isset($phone) && !empty($phone)): ?><td><?php echo $phone; ?></td><?php endif; ?>
                <?php if(isset($m_user['NID']) && !empty($m_user['NID'])): ?><td><?php echo $m_user['NID']; ?></td><?php endif; ?>
            </tr>

        <?php endforeach; ?>
    </table>
</main>

<?php footer_section(); ?>