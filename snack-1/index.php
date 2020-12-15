<?php
    // Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
    // ogni partita avrà le seguenti caratteristiche:
    // squadra di casa
    // squadra ospite
    // punti fatti dalla squadra di casa
    // punti fatti dalla squadra ospite
    // L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
    // [squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
    // ad esempio:
    // Olimpia Milano - Cantù | 55 - 60


    // we create an array $matches
    // an element of $matches is an associative array representing a basketball match
    // such an associative array has 2 keys:
    // - home_team
    // - visiting_team
    // both home_team and visiting_team are in turn associative arrays having two keys:
    // - name
    // - score
    $matches = [
        [
            'home_team' => [
                'name' => 'Atlanta Hawks',
                'score' => 75
            ],
            'visiting_team' => [
                'name' => 'Los Angeles Lakers',
                'score' => 84
            ]
        ],
        [
            'home_team' => [
                'name' => 'Boston Celtics',
                'score' => 81
            ],
            'visiting_team' => [
                'name' => 'Miami Heat',
                'score' => 78
            ]
        ],
        [
            'home_team' => [
                'name' => 'New York Knicks',
                'score' => 102
            ],
            'visiting_team' => [
                'name' => 'Orlando Magic',
                'score' => 97
            ]
        ],
        [
            'home_team' => [
                'name' => 'Washington Wizards',
                'score' => 75
            ],
            'visiting_team' => [
                'name' => 'Brooklyn Nets',
                'score' => 68
            ]
        ],
        [
            'home_team' => [
                'name' => 'Houston Rockets',
                'score' => 89
            ],
            'visiting_team' => [
                'name' => 'San Antonio Spurs',
                'score' => 94
            ]
        ]
    ];

    // we iterate over the array $matches
    for ($i = 0; $i < count($matches); $i++) {
        // for each match, we recover
        // the name of the home team
        $home_team_name = $matches[$i]['home_team']['name'];
        // the name of the visiting team
        $visiting_team_name = $matches[$i]['visiting_team']['name'];
        // the score of the home team
        $home_team_score = $matches[$i]['home_team']['score'];
        // the score of the visiting team
        $visiting_team_score = $matches[$i]['visiting_team']['score'];
        // we put together in a single string the teams' names
        $teams = $home_team_name . " - " . $visiting_team_name;
        // we put together in a single string the teams' scores
        $score = $home_team_score . " - " . $visiting_team_score;
        // then, we print all these informations regarding the current match
        echo $teams . " | " . $score . "<br>";
    }
?>
