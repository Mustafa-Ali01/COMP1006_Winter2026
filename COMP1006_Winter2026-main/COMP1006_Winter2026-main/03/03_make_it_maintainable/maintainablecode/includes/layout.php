<?php include 'includes/header.php'; ?>

    <h1>Welcome</h1>

    <ul>
        <?php foreach ($items as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>

<?php include 'includes/footer.php'; ?>