<?php

/**
 * Class for teams
 * This class represent a single team in a game
 *
 * PHP version 5
 *
 * @category 
 * @package  
 * @author    Ilya Rubinchik <ilfate@gmail.com>
 * @license   Proprietary license.
 */
class Team
{
    /**
     * @var Players[]
     */
    protected $players;

    protected $id;
    protected $type;

    protected $alivePlayers;

    const TYPE_HUMAN = 'human';
    const TYPE_AI    = 'AI';

    /**
     * @return mixed
     */
    public function getAlivePlayers()
    {
        return $this->alivePlayers;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}