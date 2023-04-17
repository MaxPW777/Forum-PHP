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

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the post from the form input
    $post = $_POST['post'];

    // Prepare a query to insert the post into the database
    $query = "INSERT INTO posts (post) VALUES (:post)";

    // Execute the query and insert the post into the database
    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(':post', $post);
        $stmt->execute();
        echo "post inserted successfully!";
    } catch (PDOException $e) {
        die("Query execution failed: " . $e->getMessage());
    }
}

?>
