<?php
    function showMessage(){
        echo"Hello World!";
        echo"<br/>";
    }

    function showImage($weather){
        echo"Today is a ".$weather." day<br/>";

        if($weather == "freezing"){
            $image= "https://upload.wikimedia.org/wikipedia/commons/b/bf/Ch%C3%A2teau_Frontenac_after_a_freezing_rain_day_in_Quebec_city.jpg";
        }elseif($weather=="cold"){
            $image="https://upload.wikimedia.org/wikipedia/commons/5/57/Cold%2C_wet%2C_gloomy.jpg";
        }elseif($weather=="hot"){
            $image="https://upload.wikimedia.org/wikipedia/commons/5/5e/Heat_wave_refresh_it_with_water.jpg";
        }else{
            $image= "/Image/warm.jpeg";
        }

        echo"<img src='".$image."' width='400px'>";
    }


?>