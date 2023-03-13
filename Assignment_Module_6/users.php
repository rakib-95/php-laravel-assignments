<?php
// read users.csv file
$users = array_map('str_getcsv', file('users.csv'));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registerd Users List</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Registerd Users List</h1>
    <table>
        <tr>
	    <th>Profile Picture</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
	    <td><img src="uploads/<?php echo $user[2]; ?>" width="100"></td>
            <td><?php echo $user[0]; ?></td>
            <td><?php echo $user[1]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
