<?php

/**
 * CRUD
 * Create Read Update Delete
 */

function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rms";
    $conn = null;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $conn;
}

function isExist($tablename, $col_name, $value)
{
    $conn = null;
    $stmt = null;

    try {
        $conn = db_conn();
        $stmt = $conn->prepare("SELECT $col_name FROM $tablename WHERE $col_name = '$value'");
        $result = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // echo "Duplicate found successfully<br>";
        // echo '<br>';
        // var_dump($result);
        // echo '</br>';

        if (count($result) >= 1) {
            $conn = null;
            return true;
        } else {
            $conn = null;
            return false;
        }

        // return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

    return false;
}

// var_dump(isDuplicate("email", "email", "fsdadfadsf@gmail.com"));

function create($tablename, $values, $ismanytomany = false)
{
    $conn = null;
    $stmt = null;

    // INSERT INTO location VALUES (NULL, 'Mirpur, Dhaka-1216');

    if (!$ismanytomany)
        $sql = "INSERT INTO $tablename VALUES (NULL, $values)";
    else
        $sql = "INSERT INTO $tablename VALUES ($values)";

    // echo '<br>Create_SQL: ' . $sql . "<br>";

    try {
        $conn = db_conn();
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        // echo "Insert successfully<br>";
        $conn = null;
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

    return false;
}

// echo "<pre>";
// print_r(create("email", "'rubaiyadnoorshahriar@gmail.com'"));
// echo "</pre>";


function read($tablename, $primary_col_name, $colname = "*", $condition = null, $sort = null)
{
    $conn = null;
    $stmt = null;

    $sql = "SELECT $colname FROM $tablename";

    if ($condition === null)
        $sql = "SELECT $colname FROM $tablename";

    if (isset($colname) && !empty($condition) && $condition !== null)
        $sql .= " WHERE $condition";

    if ($sort !== null)
        $sql .= " ORDER BY $primary_col_name $sort";
    else
        $sql .= " ORDER BY $primary_col_name ASC";

    // echo '<br>Read_SQL: ' . $sql . "<br>";

    try {
        $conn = db_conn();
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // return associative array

        // echo "Read successfully<br>";
        $conn = null;
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

    return $conn;
}

// echo "<pre>";
// var_dump(read("email", "e_id", "e_id", "email = 'rubaiyadnoor@gmail.com'")[0]["e_id"]);
// echo "</pre>";

function update($tablename, $condition, $values)
{
    $conn = null;
    $stmt = null;

    // UPDATE MyGuests SET lastname='Doe' WHERE id=2

    $sql = "UPDATE $tablename SET $values WHERE $condition";

    // echo $sql . "<br>";

    try {
        $conn = db_conn();
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        // echo "Update successfully<br>";
        $conn = null;
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

    return false;
}

// var_dump(update("email", "e_id = 3", "email = 'nobir@nobir.com'"));

function delete($tablename, $condition)
{
    $conn = null;
    $stmt = null;

    // DELETE FROM table_name WHERE some_column = some_value

    $sql = "DELETE FROM $tablename WHERE $condition";

    // echo $sql . "<br>";

    try {
        $conn = db_conn();
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();

        // echo "Delete successfully<br>";
        $conn = null;
        return $result;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;

    return false;
}

// var_dump(delete("email", "e_id = 2"));
