<?php

    class model_score extends CI_Model
    {
        public function AjoutScore()
        {
            $sql = $this->db->query("UPDATE ville, region
            SET ville.scoreVille = ville.scoreVille + 5
            region.scoreRegion = region.scoreRegion + 5 ");
            return $sql->result();
        }
    }

?>