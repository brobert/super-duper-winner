<?php

namespace App\Resources;


class Resource {

    public function get_by($type)
    {
        $action = "get_by_$type";

        if ( method_exists( $this, $action ) )
        {
            return $this->$action();
        }

        return null;
    }
}