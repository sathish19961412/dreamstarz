<?php
/**
 * Created by PhpStorm.
 * User: Ankit
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common {
    public function getCountries($conn){
        $query = "SELECT * FROM bird_countries";
        $result = $conn->query($query);
        return $result;
    }

    public function getStatesByCountry($conn,$countryId) {
        $query = "SELECT * FROM bird_states WHERE countryId='$countryId'";
        $result = $conn->query($query);
        return $result;
    }

    public function getCityByState($conn,$stateId)
    {
        $query = "SELECT * FROM bird_cities WHERE state_id='$stateId'";
        $result = $conn->query($query);
        return $result;
    }
}
