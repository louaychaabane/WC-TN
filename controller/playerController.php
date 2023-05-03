<?php
include 'db.php';
$connexion1 = $conn;

function showBestPlayers($conn){
    $sql = "SELECT * FROM players ORDER BY Rating DESC LIMIT 3";
    $result = $conn->query($sql);
    $BestPlayer = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id_team"]. " - Name: " . $row["name_team"]."<br>";
        $BestPlayer[] = [
            "name" => $row["name_player"],
            "id" => $row["id_player"],
            "age" => $row["age"],
            "img" => $row["img"],
            "Rating" => $row["Rating"],
            
        ];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $BestPlayer;
}