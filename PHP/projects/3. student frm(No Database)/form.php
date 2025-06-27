<?php include_once('header.php')?>
<div class="container">
    <div class="header">
        <h2>Student Information</h2>
    </div>

    <?php
     if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

        $name = $email = $phone = $student_id = $group = $gender = $address = $dob = $photo = $success = $tmp_photo = '';
        $students = [];
        $errors = [];
        $edit_index = -1;

        // edit server
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_index'])) {
            $edit_index = $_POST['edit_index'];
            if (isset($_SESSION['students'][$edit_index])) {
                $student = $_SESSION['students'][$edit_index];
                $name  = $student['name'];
                $email = $student['email'];
                $phone = $student['phone'];
                $student_id = $student['student_id'];
                $group = $student['group'];
                $gender = $student['gender'] ?? '';
                $address = $student['address'];
                $dob = $student['dob'];
                $photo = $student['photo'];
            }
        }

        // submit button
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $name  = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $student_id = $_POST['student_id'];
            $group = $_POST['group'];
            $gender = $_POST['gender'] ?? '';
            $address = $_POST['address'];
            $dob = $_POST['dob'];
            $photo = $_FILES['photo']['name'] ?? '';
            $tmp_photo = $_FILES['photo']['tmp_name'] ?? '';
            $edit_index = $_POST['edit_index'] ?? -1;

            if (!isset($_SESSION['students'])) {
                $_SESSION['students'] = [];
            }

        
            if (!empty($name) && !empty($email) && !empty($phone)) {
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

                // ✅ যদি edit হয়
                if ($edit_index !== -1 && isset($_SESSION['students'][$edit_index])) {
                    $_SESSION['students'][$edit_index] = $newStudents;
                    $success = "Student updated successfully!";
                } else {
                    $_SESSION['students'][] = $newStudents;
                    $success = "New Student Add successfully!";
                }

                $upload_dir = 'upload/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                if (!empty($photo)) {
                    $target_file = $upload_dir . basename($photo);
                    move_uploaded_file($tmp_photo, $target_file);
                }
            }

            // Error messages
            if (empty($name)) {
                $errors['name'] = "Name is required";
            }
            if (empty($email)) {
                $errors['email'] = "email is required";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email format";
            }
            if (empty($phone)) {
                $errors['phone'] = "phone is required";
            }
        }

        if (isset($_SESSION['students'])) {
            $students = $_SESSION['students'];
        }
    ?>
    <div class="form-container">
        <?php if(isset($success)): ?>
        <p style="color: green;"><?php echo $success;?></p>

        <?php endif; ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <?php if($edit_index !== -1):?>
            <input type="hidden" name="edit_index" value="<?php echo $edit_index ?>">
            <?php endif; ?>
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
                <input type="email" id="email" name="email" value="<?php echo  htmlspecialchars($email); ?>" required>
            </div>
            <?php if(isset($errors['email'])): ?>
            <p style="color: red;"><?php echo $errors['email'];?></p>

            <?php endif; ?>
            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" value=" <?php echo htmlspecialchars($phone); ?>" required>
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


            <button type=" submit" name="submit" class="submit-btn">
                <?php echo ($edit_index !== -1) ? 'Update' : 'Submit'; ?>
            </button>
        </form>
    </div>



</div>
</body>

</html>