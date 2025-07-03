<?php 
include 'db_connect.php';

try{
    $sql = "SELECT * FROM students";
    // $result = mysqli_query($conn, $sql);
    $result = $conn->query($sql);

    if($result === false){
        throw new Exception("Query Failed:" . $sql ." ". $conn->error);

    }
    // else{
    //      echo "<div style='padding:10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 10px;'>
    //             Data Fetch successful!
    //           </div>";
    // }
}catch(Exception $e){
        die("Error". $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Table</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            padding: 30px;
        }

        .table-container {
            max-width: 1000px;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow-x: auto;
            padding: 20px;
        }

        .table-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #343a40;
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background-color: #343a40;
            color: #ffffff;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .action-btn {
            display: inline-block;
            padding: 6px 12px;
            margin-right: 5px;
            font-size: 14px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }
         .add-new-btn-container {
        text-align: right;
        margin: 20px auto;
        max-width: 1000px;
        padding-right: 10px;
    }

    .add-new-btn {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s;
        display: inline-block;
    }

    .add-new-btn:hover {
        background-color: #218838;
    }
    </style>
</head>
<body>
<div class="add-new-btn-container">
    <a href="create.php" class="add-new-btn">➕ Add New</a>
</div>
<div class="table-container">
    <div class="table-title">📋 Student Table</div>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['address']}</td>
                <td>
                    <a href='update.php?id={$row['id']}' class='action-btn edit-btn'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='action-btn delete-btn'>Delete</a>
                </td>
            </tr>
                    ";
                }
                } else {
        echo "<tr><td colspan='6' style='text-align:center;'>Data Not Found!</td></tr>";
    }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
