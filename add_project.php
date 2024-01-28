<?php
session_start();
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["projectTitle"]) && isset($_POST["projectDescription"])) {
        $projectTitle = $_POST["projectTitle"];
        $projectDescription = $_POST["projectDescription"];
        $projectLocation = $_POST["projectLocation"];
        $implementingAgency = $_POST["implementingAgency"];
        $projectDuration = $_POST["projectDuration"];
        $budget = $_POST["budget"];

        $insertSql = "INSERT INTO government_projects (`Project Title`, `Description`, `Project Location`, `Implementing Agency`, `Project Duration`, `Budget`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertSql);

        if ($stmt->bind_param("ssssss", $projectTitle, $projectDescription, $projectLocation, $implementingAgency, $projectDuration, $budget) && $stmt->execute()) {
            header("Location: admin dashboard.php");
            exit();
        } else {
            echo "Error executing SQL statement: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>
