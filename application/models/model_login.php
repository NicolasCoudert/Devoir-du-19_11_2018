<?php

    class model_login extends CI_Model
    {
        public function seConnecter($login)
        {
            $sql = $this->db->query("SELECT region.nomRegion, FROM region, user WHERE '".$login."' = user.nomUser");
            return $sql->result();
        }
    }

?>