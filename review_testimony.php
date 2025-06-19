<?php
include("config.php"); // use shared connection

// Approve or Reject Testimony
if (isset($_GET['action']) && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $action = $_GET['action'];

    if ($action === 'approve') {
        $conn->query("UPDATE testimonies SET status = 'approved' WHERE id = $id");
    } elseif ($action === 'reject') {
        $conn->query("UPDATE testimonies SET status = 'rejected' WHERE id = $id");
    } elseif ($action === 'delete') {
        $conn->query("DELETE FROM testimonies WHERE id = $id");
    }

    header("Location: review_testimonies.php");
    exit();
}

// Fetch pending
$result = $conn->query("SELECT * FROM testimonies WHERE status = 'pending' ORDER BY submitted_at DESC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – Review Testimonies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4">📝 Pending Testimonies</h2>

    <?php if ($result->num_rows > 0): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover bg-white">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email / Phone</th>
                        <th>Live?</th>
                        <th>Prayer Date</th>
                        <th>Summary</th>
                        <th>Attachment</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['name']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?><br><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= $row['share_live'] ?></td>
                            <td><?= $row['prayer_date'] ?></td>
                            <td><?= nl2br(htmlspecialchars($row['summary'])) ?></td>
                            <td>
                                <?php if (!empty($row['attachment'])): ?>
                                    <a href="<?= $row['attachment'] ?>" target="_blank">View</a>
                                <?php else: ?>
                                    None
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="?action=approve&id=<?= $row['id'] ?>" class="btn btn-success btn-sm mb-1">✅ Approve</a><br>
                                <a href="?action=reject&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm mb-1">❌ Reject</a><br>
                                <a href="?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">🗑️ Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center">No pending testimonies at the moment.</div>
    <?php endif; ?>
</div>
</body>
</html>

<?php $conn->close(); ?>
