<?php 

class Url{
    public function switch($case, $switchRules = []){
        $found = false;

        foreach ($switchRules as $switchRule => $switchValue) {
            if ($case == $switchRule) {
                $found = true;

                include $switchValue;
                break;
            }
        }

        if (!$found) {
            echo 'Default 404 page';
        }
    }

}

?>