<?php

declare(strict_types=1);

namespace App\Views\Components;

use ViewComponents\Component;

class Alert extends Component
{
    protected ?string $glyph = null;

    protected ?string $title = null;

    /**
     * @var 'default'|'success'|'danger'|'warning'
     */
    protected string $variant = 'default';

    public function render(): string
    {
        $variants = [
            'success' => [
                'class' => 'text-pine-900 bg-pine-100 border-pine-300',
                'glyph' => 'check',
            ],
            'danger' => [
                'class' => 'text-red-900 bg-red-100 border-red-300',
                'glyph' => 'close',
            ],
            'warning' => [
                'class' => 'text-yellow-900 bg-yellow-100 border-yellow-300',
                'glyph' => 'alert',
            ],
        ];

        $glyph = '<Icon glyph="' . ($this->glyph === null ? $variants[$this->variant]['glyph'] : $this->glyph) . '" class="flex-shrink-0 mr-2 text-lg" />';
        $title = $this->title === null ? '' : '<div class="font-semibold">' . $this->title . '</div>';
        $class = 'inline-flex w-full p-2 text-sm border rounded ' . $variants[$this->variant]['class'] . ' ' . $this->class;

        unset($this->attributes['slot']);
        unset($this->attributes['variant']);
        $attributes = stringify_attributes($this->attributes);

        return <<<HTML
            <div class="{$class}" role="alert" {$attributes}>{$glyph}<div>{$title}<p>{$this->slot}</p></div></div>
        HTML;
    }
}
