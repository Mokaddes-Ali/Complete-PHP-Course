<?php 
include(__DIR__ ."/db_connect.php");


try{
    $check = $conn->prepare("SELECT COUNT(*) FROM users WHERE role = 2");
    $check->execute();
    $adminCount =  $check->fetchColumn();

    if($adminCount >= 2){
        echo "Seeder already ran: 2 or more admins exist.\n";
         exit;
    }

    $admins =[
        [
            'name' => 'Super Admin',
            'email' => 'admin1@example.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'phone' => '01711111111',
            'address' => 'Admin Office 1',
            'photo' => '',
            'role' => 2,
            'status' => 1,
            'votes' => 0
        ],
        [
             'name' => 'Second Admin',
            'email' => 'admin2@example.com',
            'password' => password_hash('admin456', PASSWORD_DEFAULT),
            'phone' => '01722222222',
            'address' => 'Admin Office 2',
            'photo' => '',
            'role' => 2,
            'status' => 1,
            'votes' => 0
        ]
        ];

        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone,address, photo, role, status, votes) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?) ");

        foreach($admins as $admin){
            $stmt->execute([
                $admin['name'],
            $admin['email'],
            $admin['password'],
            $admin['phone'],
            $admin['address'],
            $admin['photo'],
            $admin['role'],
            $admin['status'],
            $admin['votes']
            ]);
        }

        echo "admin users seeded succefullt.\n";
} catch(PDOException $e) {
    echo"Seeder failed:" . $e->getMessage();
}
?>