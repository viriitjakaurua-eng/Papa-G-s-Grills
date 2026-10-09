<?php

require_once "db_connect.php";


/* ONLY ACCEPT POST REQUESTS */

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    die("Invalid request.");

}


/* GET FORM DATA */

$name =
    trim($_POST["name"] ?? "");

$email =
    trim($_POST["email"] ?? "");

$phone =
    trim($_POST["phone"] ?? "");

$subject =
    trim($_POST["subject"] ?? "");

$message =
    trim($_POST["message"] ?? "");


/* VALIDATE */

if (
    $name === "" ||
    $email === "" ||
    $message === ""
) {

    die(
        "Please complete all required fields."
    );

}


if (
    !filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    )
) {

    die(
        "Please enter a valid email address."
    );

}


/* INSERT INTO DATABASE */

$sql = "

INSERT INTO enquiries
(
    name,
    email,
    phone,
    subject,
    message
)

VALUES (?, ?, ?, ?, ?)

";


$stmt =
    $conn->prepare($sql);


if (!$stmt) {

    die(
        "Database error: "
        . $conn->error
    );

}


$stmt->bind_param(
    "sssss",
    $name,
    $email,
    $phone,
    $subject,
    $message
);


/* SAVE */

if ($stmt->execute()) {

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Thank You | Papa G's</title>

    <link rel="stylesheet"
          href="../css/style.css">

</head>

<body>

<section class="page-hero">

    <div class="container">

        <p class="section-label light">
            PAPA G'S GRILLS
        </p>

        <h1>
            Thank You!
        </h1>

        <p>
            Your enquiry has been successfully submitted.
            A member of the Papa G's team can follow up with you.
        </p>

        <br>

        <a href="../index.html"
           class="btn btn-light">

            Back to Home

        </a>

    </div>

</section>

</body>

</html>

<?php

} else {

    echo "Something went wrong. Please try again.";

}


$stmt->close();

$conn->close();

?>