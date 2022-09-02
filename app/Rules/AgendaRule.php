<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Agenda;

class AgendaRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(public string $end)
    {
        
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
        $start = str_replace('T', ' ', $value);
        $end = str_replace('T', ' ', $this->end);
        $agendas = Agenda::where('start', '<=', $start)->Where('end', '=>', $end)->count();
       
        return $agendas == 0 ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Data e horário não disponível para agendamento';
    }
}
