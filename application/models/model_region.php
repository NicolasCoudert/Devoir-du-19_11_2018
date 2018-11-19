<?php

    class model_region extends CI_Model
    {
        public function GetAllRegion()
        {
            $sql = $this->db->query("SELECT nomRegion, scoreRegion FROM region");
            return $sql->result();
        }
    }

?>