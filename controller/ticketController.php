<?php
include 'db.php';
$connexion4 = $conn;
function showTickets($conn){
    $sql = "SELECT * from tickets";
    $result = $conn->query($sql);
    $tickets = [];
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {    
        $tickets[] = [
            "id_ticket" =>$row["id_ticket"],
            "matches" => $row["matches"],
            "prices" => $row["prices"],
            ];
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $tickets;
}

