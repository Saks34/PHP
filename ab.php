<?php
$s = [
    "John" => [
        "Math" => 85,
        "Science" => 90,
        "History" => 75
    ],
    "Jon" => [
        "Math" => 5,
        "Science" => 9,
        "History" => 7
    ],
    "Joh" => [
        "Math" => 8,
        "Science" => 0,
        "History" => 5
    ]
];

echo "<table border='2px'>";
echo "<tr><th>Name</th><th>Subjects and Marks</th><th>Average Marks</th></tr>";

foreach ($s as $name => $subjects) {
    $totalMarks = array_sum($subjects);
    $averageMarks = $totalMarks / count($subjects);
    
    echo "<tr><td>$name</td><td>";
    foreach ($subjects as $subject => $marks) {
        echo "$subject: $marks<br>";
    }
    echo "</td><td>$averageMarks</td></tr>";
}

echo "</table>";
?>
