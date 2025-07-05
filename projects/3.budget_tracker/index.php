<?php
include 'config.php';
include 'classes.php';

$income = new Income($pdo);
$expense = new Expense($pdo);

$totalIncome = $income->getTotalIncome();
$totalExpense = $expense->getTotalExpense();
$savings = calculateSavings($totalIncome, $totalExpense);

$stmt = $pdo->query("SELECT * FROM entries ORDER BY id DESC");
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Income Expense Tracker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
        background: #f8f9fa;
    }
    .form-section, .summary-section {
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    h2 {
        color: #343a40;
    }
  </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-4">Income, Expense & Saving Tracker</h2>
    
    <div class="row justify-content-center">
        <!-- Income Form -->
        <div class="col-md-5 form-section">
            <h4>Add Income</h4>
            <form method="POST" id="incomeForm">
                <div class="mb-3">
                    <label for="income_source" class="form-label">Income Source</label>
                    <input type="text" class="form-control" name="income_source" required>
                </div>
                <div class="mb-3">
                    <label for="income_amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" name="income_amount" required>
                </div>
                <button type="submit" name="add_income" class="btn btn-success w-100">Add Income</button>
            </form>
        </div>

        <!-- Expense Form -->
        <div class="col-md-5 form-section ms-md-4 mt-4 mt-md-0">
            <h4>Add Expense</h4>
            <form method="POST"  id="expenseForm">
                <div class="mb-3">
                    <label for="expense_category" class="form-label">Expense Category</label>
                    <input type="text" class="form-control" name="expense_category" required>
                </div>
                <div class="mb-3">
                    <label for="expense_amount" class="form-label">Amount</label>
                    <input type="number" class="form-control" name="expense_amount" required>
                </div>
                <button type="submit" name="add_expense" class="btn btn-danger w-100">Add Expense</button>
            </form>
        </div>
    </div>

    <!-- Summary -->
    <div class="row justify-content-center">
        <div class="col-md-10 summary-section text-center">
            <h4 class="mb-4">Summary</h4>
            <div class="row">
                <div class="col-md-4">
                    <h5>Total Income</h5>
                    <p class="fs-4 text-success">$<?= number_format($totalIncome, 2) ?></p>
                </div>
                <div class="col-md-4">
                    <h5>Total Expense</h5>
                    <p class="fs-4 text-danger">$<?= number_format($totalExpense, 2) ?></p>
                </div>
                <div class="col-md-4">
                    <h5>Savings</h5>
                    <p class="fs-4 text-primary">$<?= number_format($savings, 2) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10 summary-section">
            <h4 class="text-center mb-4">All Income & Expense Entries</h4>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($entries as $index => $entry): ?>
                        <tr>
                            <td><?= $entry['id']; ?></td>
                            <td><?= htmlspecialchars($entry['entry_date']) ?></td>
                            <td><?= htmlspecialchars($entry['category']) ?></td>
                            <td><?= htmlspecialchars($entry['description'] ?? 'N/A') ?></td>
                            <td>
                                <?php if ($entry['type'] === 'income'): ?>
                                    <span class="text-success fw-bold">Income</span>
                                <?php else: ?>
                                    <span class="text-danger fw-bold">Expense</span>
                                <?php endif; ?>
                            </td>
                            <td>$<?= number_format($entry['amount'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    // Income Form Submission
    document.getElementById('incomeForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent default page reload

        const formData = new FormData(this);

        fetch('add_income.php', {
            method: 'POST',
            body: formData
        }).then(res => res.text()).then(data => {
            alert('Income added successfully');
            location.reload(); // Data reload without manual refresh
        });
    });

    // Expense Form Submission
    document.getElementById('expenseForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('add_expense.php', {
            method: 'POST',
            body: formData
        }).then(res => res.text()).then(data => {
            alert('Expense added successfully');
            location.reload();
        });
    });
});
</script>


</body>
</html>





