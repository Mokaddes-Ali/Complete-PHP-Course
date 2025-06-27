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
            $name = $email = $phone = $student_id = $group = $gender = $address = $dob = $photo =  $success = $tmp_photo = '';
            $students = [];
            $errors = [];
            
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $student_id = $_POST['student_id'];
                $group = $_POST['group'];
                $gender = $_POST['gender'] ?? '';
                $address = $_POST['address'];
                $dob = $_POST['dob'];
                $photo = $_FILES['photo']['name'];
                $tmp_photo = $_FILES['photo']['tmp_name'];

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
                    'phone' => $phone,
                    'student_id' => $student_id,
                    'group' => $group,
                    'gender' => $gender,
                    'dob' => $dob,
                    'address' => $address,
                    'photo' => $photo,
                        
                    ];

                    array_push($_SESSION['students'], $newStudents);

                }
                
                
                if(isset($_SESSION['students']))$students  = $_SESSION['students']; 
                
                
                // show error and fill required
               if(empty($name))
               $errors['name'] = "Name is required";
    

               if(empty($email)){
                 $errors['email'] = "email is required";
               }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Invalid email format";
                
               }

               if(empty($phone))
               $errors['phone'] = "phone is required";
               
             
               if(empty($errors) && !empty($name) && !empty($email)&& !empty($phone))
               $success = "New Student Add successfully!";
               
            $upload_dir = 'upload/';

            if(!is_dir($upload_dir)){
                mkdir($upload_dir, 0777, true);
            }

            $target_file = $upload_dir . basename($photo);
            move_uploaded_file($tmp_photo,$target_file);
            }

        ?>
        <div class="form-container">
            <?php if(isset($success)): ?>
            <p style="color: green;"><?php echo $success;?></p>

            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
                <?php if(isset($errors['name'])): ?>
                <p style=" color: red;"><?php echo $errors['name'];?></p>

                <?php endif; ?>
                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo  htmlspecialchars($email); ?>"
                        required>
                </div>
                <?php if(isset($errors['email'])): ?>
                <p style="color: red;"><?php echo $errors['email'];?></p>

                <?php endif; ?>
                <!-- Phone -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" value=" <?php echo htmlspecialchars($phone); ?>"
                        required>
                </div>
                <?php if(isset($errors['phone'])): ?>
                <p style="color: red;"><?php echo $errors['phone'];?></p>

                <?php endif; ?>

                <!-- Student id -->
                <div class="form-group">
                    <label for="student_id">Student Id</label>
                    <input type="text" id="student_id" name="student_id"
                        value=" <?php echo htmlspecialchars($student_id); ?>" required>
                </div>
                <!-- Group -->
                <!-- Group -->
                <div class="form-group">
                    <label for="group">Group</label>
                    <select id="group" name="group">
                        <option value="">-- Select Group --</option>
                        <option value="science" <?php if($group == 'science') echo 'selected'; ?>>Science</option>
                        <option value="humanities" <?php if($group == 'humanities') echo 'selected'; ?>>Humanities
                        </option>
                        <option value="commerce" <?php if($group == 'commerce') echo 'selected'; ?>>Commerce</option>
                    </select>
                </div>
                <!-- Date of birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value=" <?php echo htmlspecialchars($dob); ?>">
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="group">Gender</label>
                    <div class="inline-group">
                        <div class="inline-option">
                            <input type="radio" id="male" name="gender" value="male"
                                <?php if($gender == 'male') echo 'checked' ?>>
                            <label for="male">Male</label>
                        </div>

                        <div class="inline-option">
                            <input type="radio" id="female" name="gender" value="female"
                                <?php if($gender == 'female') echo 'checked' ?>>
                            <label for="female">Female</label>
                        </div>
                    </div>
                </div>
                <!--Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value=" <?php echo htmlspecialchars($address); ?>">
                </div>
                <!-- Photo -->
                <div class="form-group">
                    <label for="photo">Photo Id</label>
                    <input type="file" id="photo" name="photo">
                </div>


                <button type=" submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>


        <h3>Submitted Data:</h3>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Student Id</th>
                    <th>Group</th>
                    <th>Gender</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Photo</th>
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
                    <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                    <td><?php echo htmlspecialchars($student['group']); ?></td>
                    <td><?php echo htmlspecialchars($student['gender']); ?></td>
                    <td><?php echo htmlspecialchars($student['dob']); ?></td>
                    <td><?php echo htmlspecialchars($student['address']); ?>
                    </td>
                    <td>
                        <?php if(!empty($student['photo'])):?>
                        <img src="upload/<?php echo htmlspecialchars($student['photo']);?>" alt="Student Photo"
                            width="50">
                        <?php else: ?>
                        N/A
                        <?php endif;?>
                    </td>

                </tr>
                <?php endforeach; ?>
                <?php endif?>
            </tbody>
        </table>
    </div>
</body>

</html>