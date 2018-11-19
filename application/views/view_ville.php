<?php

foreach($lesVilles as $ville)
{
    echo "<label>".$ville->nomVille." - ".$ville->scoreVille."</label><input type='radio' name='ville'>";
}

?>