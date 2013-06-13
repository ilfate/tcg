<?php

/**
 * Main Game class
 * A class that handels everything about the game
 *
 * PHP version 5
 *
 * @category 
 * @package  
 * @author    Ilya Rubinchik <ilfate@gmail.com>
 * @license   Proprietary license.
 */
class Game
{
    protected $status;
    protected $startTime;
    protected $data;
    /**
     * @var Team[]
     */
    protected $teams;

    /**
     * @var Players[]
     */
    protected $players;

    protected $initialisationInformation;

    const DEFAULT_TEAMS_NUMBER = 2;

    public function __construct($data = array())
    {
        $this->startTime = date('d.m.Y H:i:s');
        $this->data      = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    public function init()
    {
        if (!empty($this->initialisationInformation['teams'])) {
            $teamsNumber = $this->initialisationInformation['teams'];
        } else {
            $teamsNumber = self::DEFAULT_TEAMS_NUMBER;
        }
    }


}