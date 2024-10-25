<?php
include('../includes/header.php');

/*
    CSCI 2170: Introduction to Server-Side Scripting
    (Fall Semester 2024)
    Lab 4 (index.php)
*/


// Base URL for the SWAPI API

$api_url = "https://swapi.dev/api/people/";


try {
    // Fetch the data from the SWAPI API
    $response = file_get_contents($api_url);
    
    // Decode the JSON response into an associative array
    $characters = json_decode($response, true)['results'];
} catch (Exception $e) {
    echo "Error fetching data: " . $e->getMessage();
    $characters = [];
}

?>

<h1>Star Wars Characters</h1>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Height</th>
            <th>Mass</th>
            <th>Birth Year</th>
        </tr>
    </thead>
    <tbody>
    <?php if (!empty($characters)): ?>
    <?php foreach ($characters as $character): ?>
        <tr>
            <td><?= htmlspecialchars($character['name']) ?></td>
            <td><?= htmlspecialchars($character['height']) ?></td>
            <td><?= htmlspecialchars($character['mass']) ?></td>
            <td><?= htmlspecialchars($character['birth_year']) ?></td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="4" class="text-center">No data available</td>
    </tr>
<?php endif; ?>

    </tbody>
</table>

<a href="search.php" class="btn btn-primary">Search Characters</a>

<?php include('../includes/footer.php'); ?>