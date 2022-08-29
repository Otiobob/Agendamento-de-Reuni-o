<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordConfirmation implements Rule
{
  
  
    /**
     * Create a new rule instance.
     *
     * __CONSTRUCT = PADRÃO PHP 8
     * @return void
     */ 
    public function __construct(
        public string $password)
    {}

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
        return $this->password === $value ?  true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A senha digitada não confere.';
    }
}
