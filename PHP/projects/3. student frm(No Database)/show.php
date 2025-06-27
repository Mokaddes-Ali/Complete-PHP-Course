<?php 
session_start();
$success = '';
$error = '';
$students = $_SESSION['students'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])){
    $index = $_POST['delete_index'];
    if(isset($_SESSION['students'][$index])){
        unset ($_SESSION['students'][$index]);
        $_SESSION['students'] = array_values($_SESSION['students']);
        $success = "Student deleted successfully!"; 
    } else{
        $error ="Student not Found or already deleted!";
    }
    $students = $_SESSION['students'] ?? [];
    
}
?>
<?php include_once('header.php')?>

<?php if(!empty($success)):?>
<p style="color:green; text-align:center;"><?php echo $success; ?></p>
<?php endif; ?>

<?php if(!empty($error)):?>
<p style="color:red; text-align:center;"><?php echo $error; ?></p>
<?php endif; ?>

<h3>Submitted Data:</h3>

<table class="data-table" border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Student Id</th>
            <th>Group</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if ( empty($students)): ?>
        <tr>
            <td>Student Name 2</td>
            <td>student2@example.com</td>
            <td>234-567-8901</td>
            <td>Student Name 3</td>
            <td>student3@example.com</td>
            <td>345-678-9012</td>
            <td>Student Name 3</td>
            <td>student3@example.com</td>
            <td>345-678-9012</td>
        </tr>

        <?php else: ?>
        <tr>
            <?php foreach ( $students as $key => $student) : ?>
            <td><?php echo htmlspecialchars($student['name']); ?></td>
            <td><?php echo htmlspecialchars($student['email']); ?></td>
            <td><?php echo htmlspecialchars($student['phone']); ?></td>
            <td><?php echo htmlspecialchars($student['student_id']); ?></td>
            <td><?php echo htmlspecialchars($student['group']); ?></td>
            <td><?php echo htmlspecialchars($student['gender']); ?></td>
            <td><?php echo htmlspecialchars($student['dob']); ?></td>
            <td><?php echo htmlspecialchars($student['address']); ?>
            </td>
            <td>
                <?php if(!empty($student['photo'])):?>
                <img src="upload/<?php echo htmlspecialchars($student['photo']);?>" alt="Student Photo" width="100">
                <?php else: ?>
                N/A
                <?php endif;?>
            </td>
            <td>
                <form method="POST" action="form.php">
                    <input type="hidden" name="edit_index" value="<?php echo $key; ?>">
                    <button type="submit" name="edit" class="action-btn edit-btn">Edit</button>
                </form>
                <form method="POST" action="" onsubmit="return confirm('Areyou sure want to delete?')">
                    <input type="hidden" name="delete_index" value="<?php echo $key; ?>">
                    <button type="submit" name="delete" class="action-btn  delete-btn">Delete</button>
                </form>
            </td>

        </tr>
        <?php endforeach; ?>
        <?php endif?>
    </tbody>
</table>