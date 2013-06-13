<?php

/**
 * Class for building the Game
 * This class represent a single team in a game
 *
 * PHP version 5
 *
 * @category 
 * @package  
 * @author    Ilya Rubinchik <ilfate@gmail.com>
 * @license   Proprietary license.
 */
class GameBuilder
{

    public function build($data)
    {
        $gameData = array(
            'teams' => array()
        );

        foreach ($data['teams'] as $teamId => $team) {
            $team = new Team();
            $team->setId($teamId);
            $team->setType($team['type']);
            $gameData['teams'][$teamId] = $team;
        }
        $game = new Game($gameData);
    }

}