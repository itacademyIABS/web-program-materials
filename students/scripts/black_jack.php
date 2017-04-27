<?php
define("ROUNDS", 3);
define("MAX_CARDS", 4);
define("MAX_VALID_POINTS", 21);

$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);

$faces = array (
    array("name"=>"Two", "point" => 2),
    array("name"=>"Three", "point" => 3 ),
    array("name"=>"Four", "point" => 4 ),
    array("name"=>"Five", "point" => 5 ),
    array("name"=>"Six", "point" => 6 ),
    array("name"=>"Seven", "point" => 7 ),
    array("name"=>"Eight", "point" => 8 ),
    array("name"=>"Nine", "point" => 9 ),
    array("name"=>"Ten", "point" => 10 ),
    array("name"=>"Jack", "point" => 10 ),
    array("name"=>"Queen", "point" => 10 ),
    array("name"=>"King", "point" => 10 ),
    array("name"=>"Ace", "point" => 11 )
);

$players = array(    
    array("name" => 'Игрок1', 'last_tour_points' => 0 , 'won_tours' => 0),
    array("name" => 'Игрок2', 'last_tour_points' => 0 , 'won_tours' => 0),
    array("name" => 'Игрок3', 'last_tour_points' => 0 , 'won_tours' => 0)
);


for ($tour = 1; $tour <= ROUNDS; $tour++) {
    echo "{$tour}й тур\n";
    $cards = generate_cards($suits, $faces);
    shuffle($cards);
    
    foreach ($players as $playerIndex => $player) {
        echo "Играет игрок {$player["name"]} \n";
        $playerPoints = 0;
        for($i = 0; $i < MAX_CARDS; $i++) {
            if ($playerPoints <= 16) {
                $card = array_shift($cards);
                echo "Игрок {$player["name"]} берет карту {$card["name"]} по масти {$card["suit"]} очков {$card['point']}\n";
                $playerPoints += $card['point'];
            }
        }
        echo "Игрок {$player["name"]} набрал {$playerPoints} \n";
        $players[$playerIndex]['last_tour_points'] = $playerPoints;
    }
    
    $max_points = get_max_round_points($players);

    foreach ($players as $key => $player) {
        if ($player['last_tour_points'] == $max_points) {
            echo "В туре {$tour} победил игрок {$player["name"]} \n";
            $players[$key]['won_tours'] = $players[$key]['won_tours'] + 1;
        }
    }
    
}

$won_tours = array_column($players, "won_tours");
$max_won_tours = max($won_tours);

foreach ($players as $player) {
    if ($player["won_tours"] == $max_won_tours) {
        echo "\n\n\nПобедил в игре {$player["name"]}!!\n";
    }
}

function get_max_round_points($players) {
    $points = array_column($players, "last_tour_points");
    
    $filtered_valid_points = array();
    
    foreach ($points as $point) {
        if ($point <= MAX_VALID_POINTS) {
            $filtered_valid_points[] = $point;
        }
    }
    return (count($filtered_valid_points) > 0) ? max($filtered_valid_points) : false;
}

function generate_cards($suits, $faces){
    $result = array();
    foreach ($suits as  $suit) {
        foreach ($faces as $face) {
            $face["suit"] = $suit;
            $result[] = $face;
        }
    }
    return $result;
}

?>