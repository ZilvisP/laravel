<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalIdTypeLT implements Rule
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
        return (preg_match('/^[3-6][0-9][0-9](0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9][0-9][0-9][0-9]$/', $value));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Personal Number is not valid.';
    }
}
