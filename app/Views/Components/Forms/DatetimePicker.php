<?php

declare(strict_types=1);

namespace App\Views\Components\Forms;

class DatetimePicker extends FormComponent
{
    public function render(): string
    {
        $this->attributes['class'] = 'rounded-l-lg border-0 border-rounded-r-none flex-1 focus:ring-0';
        $this->attributes['data-input'] = '';
        $dateInput = form_input($this->attributes, old($this->name, $this->value));

        $clearLabel = lang(
            'Episode.publish_form.scheduled_publication_date_clear',
        );
        $closeIcon = icon('close');

        return <<<HTML
            <div class="flex border-3 rounded-lg border-contrast focus-within:ring-accent {$this->class}" data-picker="datetime">
                {$dateInput}
                <button class="p-3 bg-elevated hover:bg-base rounded-r-md focus:ring-inset focus:ring-accent" type="button" aria-label="{$clearLabel}" title="{$clearLabel}" data-clear="">
                    {$closeIcon}
                </button>
            </div>
        HTML;
    }
}
