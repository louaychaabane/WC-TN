<?php
include 'db.php';
$connexion2 = $conn;
function showScorers($conn){
    $sql = "SELECT * from scorers ORDER BY goals DESC";
    $result = $conn->query($sql);
    $scorers = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {    
        $scorers[] = [
            "name" => $row["name"],
            "nationality" => $row["nationality"],
            "goals" => $row["goals"],
            
        ];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $scorers;
}
