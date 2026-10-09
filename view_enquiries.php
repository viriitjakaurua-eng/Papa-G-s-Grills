<?php

require_once "db_connect.php";

$result = $conn->query(
    "SELECT * FROM enquiries
     ORDER BY created_at DESC"
);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Enquiries | Papa G's</title>

    <style>

        body {

            font-family: Arial, sans-serif;

            background: #f5efe5;

            padding: 30px;

        }

        h1 {

            color: #b3261e;

        }

        .table-wrapper {

            overflow-x: auto;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            background: white;

        }

        th,
        td {

            padding: 14px;

            border: 1px solid #ddd;

            text-align: left;

        }

        th {

            background: #b3261e;

            color: white;

        }

        tr:nth-child(even) {

            background: #f8f8f8;

        }

    </style>

</head>

<body>

<h1>
    Papa G's Enquiries
</h1>

<div class="table-wrapper">

<table>

<thead>

<tr>

    <th>ID</th>

    <th>Name</th>

    <th>Email</th>

    <th>Phone</th>

    <th>Subject</th>

    <th>Message</th>

    <th>Date</th>

</tr>

</thead>

<tbody>

<?php

while (
    $row = $result->fetch_assoc()
):

?>

<tr>

    <td>
        <?= htmlspecialchars($row["id"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["name"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["email"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["phone"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["subject"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["message"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($row["created_at"]) ?>
    </td>

</tr>

<?php

endwhile;

?>

</tbody>

</table>

</div>

</body>

</html>

<?php

$conn->close();

?>