<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidacaoPeriodo implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(public string $start)
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
        $start=strtotime($this->start);
        $end=strtotime($value);
        return $end > $start;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'A data de término deve ser maior ou igual a data de inicio e o horário final deve ser maior que o 
        horário inicial.';
    }
}
