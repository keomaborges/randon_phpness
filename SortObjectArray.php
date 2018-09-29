<?php
	protected function sortPositionsArray(
        array $array,
        array $options
    ) {
        $prop = key($options);
        $direction = $options[$prop];

        usort($array, function ($a, $b) use ($direction, $prop) {
            if ($direction === 'ASC') {
                return strcmp($a->$prop, $b->$prop);
            }
            return strcmp($b->$prop, $a->$prop);
        });

        return $array;
    } 
