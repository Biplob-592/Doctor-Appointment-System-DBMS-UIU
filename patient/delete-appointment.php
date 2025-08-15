<?php
session_start();

if (!isset($_SESSION["user"]) || $_SESSION["user"] == "") {
    header("location: ../login.php");
    exit;
}

// You may also check role here if needed:
// if ($_SESSION['usertype'] != 'p') {
//     header("location: ../unauthorized.php");
//     exit;
// }

if ($_GET) {
    include("../connection.php");
    $id = $_GET["id"];

    // Secure delete
    $stmt = $database->prepare("DELETE FROM appointment WHERE appoid = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Redirect to patient's appointment list or dashboard
    header("location: appointment.php");
    exit;
}
?>