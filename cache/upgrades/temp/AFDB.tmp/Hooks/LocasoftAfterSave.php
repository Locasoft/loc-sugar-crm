<?php

/*************************************
Project: Sample Hook to Proper Case a Field's Value
Original Dev: Angel Magaña, February 2010
cheleguanaco[at]gmail.com

Desc: Logic Hook Code for Proper Case Update

The contents of this file are governed by the GNU General Public License (GPL).
A copy of said license is available here: http://www.gnu.org/copyleft/gpl.html
This code is provided AS IS and WITHOUT WARRANTY OF ANY KIND.

 *************************************/

class LocasoftAfterSave {

    function locasoft_after_save($bean, $event, $arguments)
    {
        $input = "test";

        $ch = curl_init("http://localhost:8080/client");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($input));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        // Download the given URL, and return output
        $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
        curl_close($ch);
        error_log("You messed up!", 3, "testtt.log");

    }

}

?>