<?php
include 'config.php'; // Include the database connection file

// Fetch artist data from the database
$sql = "SELECT * FROM artists";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Wrongmoon World - Artists</title>
</head>
<body>
    <h1>Featured Artists</h1>
    <div class="artists">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='artist-card'>";
                echo "<h2>" . $row["name"] . "</h2>";
                echo "<p>" . $row["bio"] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No artists found";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
