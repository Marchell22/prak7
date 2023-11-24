<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Data Diri</h2>

    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <h2>Person List</h2>
    <?php include 'display.php'; ?>
</body>
</html>
