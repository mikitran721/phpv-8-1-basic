<?php
require 'components/header.php';

echo "<h2>List of feedbacks here.</h2>";

if ($connection != null) {
    try {

        $sql = "SELECT name, email, body from feedback;";

        $statement = $connection->prepare($sql);
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);

        $feedbacks = $statement->fetchAll();

        echo "<ul class='list-group'>";
        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';

            echo "<li class='list-group-item'>$name, $email, $body</li>";
            // echo "<h3>$name, $email, $body </h3>";
        }
        echo "</ul>";
    } catch (PDOException $e) {
        echo "Cannot query data. Error: " . $e->getMessage();
    }
}


include 'components/footer.php';
