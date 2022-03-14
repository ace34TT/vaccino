<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PersonsMod extends CI_Model
{
    public  function getVaccinePresence()
    {
        $query = $this->db->query('select * from viewVaccinePresence ');
        return $query->result_array();
    }
    public  function insertPersons($data)
    {
        $this->db->insert("persons", $data);
    }
    public  function insertRappel($data)
    {
        $this->db->insert("rappel", $data);
    }
}