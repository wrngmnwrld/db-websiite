<?php
include 'config.php'; // Include the database connection file

// Fetch blog posts from the database
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Wrongmoon World - Blog</title>
</head>
<body>
    <h1>Latest Blog Posts</h1>
    <div class="blog-posts">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog-post'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>" . $row["content"] . "</p>";
                echo "<small>Published on: " . $row["date"] . "</small>";
                echo "</div>";
            }
        } else {
            echo "No blog posts found";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
