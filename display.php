<?php
include_once 'Person.php';

$person = new Person();
$persons = $person->getAllPersons();

if (!empty($persons)) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th></tr>";

    foreach ($persons as $index => $row) {
        $name = $row['name'];

        // Menggunakan regex untuk memeriksa apakah kolom 'name' mengandung huruf 'a'.
        $containsA = preg_match('/a/i', $name);

        // Menerapkan kelas yang berbeda berdasarkan hasil dari ekspresi reguler (regex).
        $rowClass = $containsA ? 'containsA' : 'doesNotContainA';

        echo "<tr class='" . $rowClass . "'>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No data available.";
}
?>
