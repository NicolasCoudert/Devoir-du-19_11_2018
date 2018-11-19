<?php

    class model_ville extends CI_Model
    {
        public function GetAllVille($idRegion)
        {
            $sql = $this->db->query("SELECT ville.nomVille, ville.scoreVille
                                    FROM ville, region
                                    WHERE region.idRegion = ville.numRegion
                                    AND ville.numRegion = '".$idRegion."'");
            return $sql->result();
        }
    }

?>