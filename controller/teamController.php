<?php
include 'db.php';
$connexion = $conn;
function showTeams($conn){
    $sql = "SELECT * from teams ORDER BY win DESC,draw DESC";
    $result = $conn->query($sql);
    $teams = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id_team"]. " - Name: " . $row["name_team"]."<br>";
        $points = $row["win"] * 3 + $row["draw"];
        $teams[] = [
            "name" => $row["name_team"],
            "win" => $row["win"],
            "draw" => $row["draw"],
            "loss" => $row["loss"],
            "points" => $points,
        ];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $teams;
}


function showPlayers($conn){
    $sql = "SELECT * from players";
    $result = $conn->query($sql);
    $players = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id_team"]. " - Name: " . $row["name_team"]."<br>";
        $players[] = [
            "name" => $row["name_player"],
            "id" => $row["id_player"],
            "age" => $row["age"],
            "img" => $row["img"],
            
        ];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $players;
}



/*$teams = showTeams($conn);
echo '<pre>';
print_r($teams);
echo '</pre>';*/