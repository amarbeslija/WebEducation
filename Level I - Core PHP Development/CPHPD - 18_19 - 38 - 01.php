<?php

#Gallery (Rješenje istog zadatka sa array_map funkcijom nad nizovima)

$images = array(
            "https://images-na.ssl-images-amazon.com/images/S/cmx-images-prod/StoryArc/235/235._SX400_QL80_TTD_.jpg",
            "https://pbs.twimg.com/profile_images/1057808441685741568/unui_Ryh_400x400.jpg",
            "https://pbs.twimg.com/profile_images/1028054175576477696/rzvDefkL_400x400.jpg"
          );

$titles = array("Batman", "Superman", "Flash");

array_map(function($images, $titles){
    echo "<div style='padding: 20px; border: 1px solid red; display: inline-block; margin: 10px;'>";
    echo "<img src='" . $images . "' alt='" . $titles . "'>";
    echo "<h2 style='text-align: center;'> $titles </h2>";
    echo "</div>";
}, $images, $titles);

?>