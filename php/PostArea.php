<!-- code that gets info from the database and turns it into an individual post -->
<?php
    // Replace database_name, database_username, and database_password with your database information
$host = 'localhost';
$dbname = 'forum-php';
$username = 'root';
$password = '';

// Establish a database connection
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Prepare a query to get all the posts
$query = "SELECT * FROM posts";

// Execute the query and get all the posts
try {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query execution failed: " . $e->getMessage());
}

// Print out the posts
foreach ($posts as $post) {
    echo "<div class='post'>";
    echo "<div class='postUser'>" . $post['UserID'] . "</div>";
    echo "<div class='postContent'>" . $post['Message'] . "</div>";
    echo "</div>";
}

?>