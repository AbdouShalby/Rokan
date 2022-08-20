<?php

namespace Models;

use \Models\Database;

class Events
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * CREATE
     * @param $artist
     * @param $venue
     * @param $location
     * @param $session
     * @param $duration
     * @param $price
     * @param $stock
     * @param $image
     * @param $date
     * @param $start
     * @param $end
     * @return bool
     */
    public function add_event($artist, $venue, $location, $session, $duration, $price, $stock, $image, $date, $start, $end): bool
    {
        $this->db->query("INSERT INTO events (`Event_Artist`, `Event_Venue`, `Event_Location`, `Event_Session`,`Event_Duration`, `Event_Price`, `Event_Stock`, `Event_Image`, `Event_Date`, `Event_Start`, `Event_End`) VALUES (:artist, :venue, :location, :session, :duration, :price, :stock, :image, :date, :start, :end)");
        $this->db->bind(':artist', $artist);
        $this->db->bind(':venue', $venue);
        $this->db->bind(':location', $location);
        $this->db->bind(':session', ($session));
        $this->db->bind(':duration', $duration);
        $this->db->bind(':price', $price);
        $this->db->bind(':stock', $stock);
        $this->db->bind(':image', $image);
        $this->db->bind(':date', $date);
        $this->db->bind(':start', $start);
        $this->db->bind(':end', $end);
        if ($this->db->execute())
            return true;
        return false;
    }

    /**
     * READ
     * @return array
     */
    public function selectAll() : array
    {
        $this->db->query("SELECT * FROM events ORDER BY Event_Date DESC");
        return $this->db->resultSet();
    }

//    /**
//     * READ
//     * @return array
//     */
//    public function selectLastProducts() : array
//    {
//        $this->db->query("SELECT * FROM events ORDER BY id DESC LIMIT 8");
//        return $this->db->resultSet();
//    }
}