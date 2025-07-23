<?php include('auth_middleware.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 4 CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <style>
    .dashboard-header {
      background-color: #343a40;
      color: white;
      padding: 15px 20px;
    }
    .left-card {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 5px;
    }
    .user-img {
      width: 100%;
      max-width: 200px;
      border-radius: 10px;
      margin-bottom: 15px;
    }
    .table img {
      height: 60px;
      width: 60px;
      border-radius: 50%;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Welcome <?= $_SESSION['user']['name']; ?> 👋</h2>
<p>Your role is: <?= $_SESSION['user']['role']; ?></p>
  <!-- Topbar -->
  <div class="dashboard-header d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Welcome, Mokaddes Ali</h5>
    <div>
      <a href="#" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>

  <!-- Main Dashboard -->
  <div class="container-fluid mt-4">
    <div class="row">

      <!-- Left Sidebar -->
      <div class="col-md-3">
        <div class="left-card text-center">
          <img src="https://via.placeholder.com/200" alt="User" class="user-img">
          <h5 class="mb-2">Mokaddes Ali</h5>
          <p class="mb-1"><strong>Email:</strong> mokaddes@example.com</p>
          <p class="mb-1"><strong>Address:</strong> Rajshahi, Bangladesh</p>
          <p class="mb-0"><strong>Status:</strong> <span class="badge badge-success">Active</span></p>
        </div>
      </div>

      <!-- Right Table Section -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h6 class="mb-0">Voting Table</h6>
          </div>
          <div class="card-body p-0">
            <table class="table table-bordered text-center mb-0">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <strong>Candidate 1</strong><br>
                    <span class="text-muted small">Vote</span>
                  </td>
                  <td><img src="https://via.placeholder.com/60" alt="Candidate 1"></td>
                </tr>
                <tr>
                  <td>
                    <strong>Candidate 2</strong><br>
                    <span class="text-muted small">Vote</span>
                  </td>
                  <td><img src="https://via.placeholder.com/60" alt="Candidate 2"></td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</body>
</html>
