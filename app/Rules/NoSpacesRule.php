<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NoSpacesRule implements Rule
{
    public function passes($attribute, $value)
    {
        return !preg_match('/\s/', $value); // Checks if there are no spaces in the value
    }

    public function message()
    {
        return 'The :attribute cannot contain spaces.';
    }
}
