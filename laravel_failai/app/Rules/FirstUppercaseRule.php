<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FirstUppercaseRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
      return ucfirst($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Laukelis :attribute nėra iš didžiosios raidės.';
    }
}
