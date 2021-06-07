<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Mark implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        preg_match('/(^([0-8]{1}+(\.[0|5]))$)|9.0/', $value, $matches);
        return count($matches) > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Điểm không hợp lệ';
    }
}
