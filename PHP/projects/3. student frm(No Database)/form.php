<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <title>Basic Form with Table Output</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>
        <div class="form-container">
            <form method="GET" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" required>
                </div>


                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>


        <h3>Submitted Data:</h3>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php if (isset($_POST['name'])): ?>
                    <td><?php echo $_POST['name']; ?></td>
                    <?php endif?>
                    <?php if (isset($_POST['name'])): ?>
                    <td><?php echo $_POST['email']; ?></td>
                    <?php endif?>
                    <?php if (isset($_POST['name'])): ?>
                    <td><?php echo $_POST['phone']; ?></td>
                    <?php endif?>
                </tr>
                <tr>
                    <td>Student Name 2</td>
                    <td>student2@example.com</td>
                    <td>234-567-8901</td>
                </tr>
                <tr>
                    <td>Student Name 3</td>
                    <td>student3@example.com</td>
                    <td>345-678-9012</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <title>Basic Form with Table Output</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>

        <?php
            $name = $email = $phone = '';
            $students = [];
            $errors = [];
            $success = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                
                if( !isset($_SESSION['students'])){
                    $_SESSION['students'] = [];
                }
                
                if(!empty(['name']) && !empty(['email'])&& !empty(['phone'])){
                    $newStudents = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                        
                    ];

                    array_push($_SESSION['students'], $newStudents);

                }
                
                
                if(isset($_SESSION['students'])){
                    $students  = $_SESSION['students']; 
                }
                
                // show error and fill required
               if(empty($name)){
                 $errors['name'] = "Name is required";
               }

               if(empty($email)){
                 $errors['email'] = "email is required";
               }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid email format";
                
               }

               if(empty($phone)){
                 $errors['phone'] = "phone is required";
               }
             
               if(empty($errors) && !empty($name) && !empty($email)&& !empty($phone)){
                 $success = "New Student Add successfully!";
               }
            }

        ?>
        <div class="form-container">
            <?php if(isset($success)): ?>
            <p style="color: green;"><?php echo $success;?></p>

            <?php endif; ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
                <?php if(isset($errors['name'])): ?>
                <p style=" color: red;"><?php echo $errors['name'];?></p>

                <?php endif; ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo  htmlspecialchars($email); ?>"
                        required>
                </div>
                <?php if(isset($errors['email'])): ?>
                <p style="color: red;"><?php echo $errors['email'];?></p>

                <?php endif; ?>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value=" <?php echo htmlspecialchars($phone); ?>"
                        required>
                </div>
                <?php if(isset($errors['phone'])): ?>
                <p style="color: red;"><?php echo $errors['phone'];?></p>

                <?php endif; ?>


                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>


        <h3>Submitted Data:</h3>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php if ( empty($students)): ?>
                <tr>
                    <td>Student Name 2</td>
                    <td>student2@example.com</td>
                    <td>234-567-8901</td>
                </tr>
                <tr>
                    <td>Student Name 3</td>
                    <td>student3@example.com</td>
                    <td>345-678-9012</td>
                </tr>

                <?php else: ?>
                <tr>
                    <?php foreach ( $students as $student) : ?>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['email']); ?></td>
                    <td><?php echo htmlspecialchars($student['phone']); ?></td>

                </tr>
                <?php endforeach; ?>
                <?php endif?>
            </tbody>
        </table>
    </div>
</body>

</html>