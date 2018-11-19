<?php

foreach($lesRegions as $region)
{
    echo "<label>".$region->nomRegion." - ".$region->scoreRegion."</label><input type='radio' name='region'>";
}

?>