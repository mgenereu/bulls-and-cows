<?php

namespace BullsAndCows;

use BullsAndCows\Exceptions\InvalidArgumentException;

class Guess 
{
    private $value;

    /**
     * Constructor
     */
    public function __construct($guess_string)
    {
        try {
            $matches = preg_match('/^\d{4}$/', $guess_string);
            if (!$matches)
            {
                throw new InvalidArgumentException('Guesses can only contain 4 digits.');
            }
        }
        catch(InvalidArgumentException $e){
            echo "\n" . $e->getMessage() . "\n";
        }
        $this->value = $guess_string;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}

