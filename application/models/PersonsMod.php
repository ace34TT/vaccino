<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PersonsMod extends CI_Model
{
    public  function getNonVaccine()
    {
        $query = $this->db->query('select * from viewReponseVaccin Group by dose_rquestsId');
        return $query->result_array();
    }


   /* public  function getFicheDevis($idPreavis)
    {   $where ="";
        if ($idPreavis!="") {
            $where=" where devisId =".$idPreavis;
        }
        $query = $this->db->query('select * from viewFicheDevis'.$where);
        return $query->result_array();
    }
    public  function insert($data)
    {
        $this->db->insert("devis", $data);
    }

    public  function insertDetails($data)
    {
        $this->db->insert("detailDevis", $data);
    }
*/
}