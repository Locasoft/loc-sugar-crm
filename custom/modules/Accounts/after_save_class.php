<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class after_save_class
{
    function after_save_method($bean, $event, $arguments)
    {


        $client = array (
            "responsable" => $bean->responsable_c,
            "raison_sociale" => $bean->raison_sociale_c,
            "libelle_interne" => $bean->libelle_interne_c,
            "telephone" => $bean->telephone_c,
            "fax" => $bean->fax_c,
            "mail" => $bean->mail_c,
            "adresse" => $bean->adresse_c,
            "ville" => $bean->ville_c,
            "cp" => $bean->cp_c,

        );

        $ch = curl_init("http://localhost:8085/client");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($client));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        // Download the given URL, and return output
        $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
        curl_close($ch);
        error_log($client, 3, "testtt.log");




    }
}

?>