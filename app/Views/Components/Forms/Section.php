<?php

declare(strict_types=1);

namespace App\Views\Components\Forms;

use ViewComponents\Component;

class Section extends Component
{
    protected string $title = '';

    protected ?string $subtitle = null;

    protected string $subtitleClass = '';

    public function render(): string
    {
        $subtitle = $this->subtitle === null ? '' : '<p class="text-sm text-skin-muted ' . $this->subtitleClass . '">' . $this->subtitle . '</p>';

        return <<<HTML
            <fieldset class="w-full p-8 bg-elevated border-3 flex flex-col items-start border-subtle rounded-xl {$this->class}">
                <Heading tagName="legend" class="float-left">{$this->title}</Heading>
                {$subtitle}
                <div class="flex flex-col w-0 min-w-full gap-4 py-4">{$this->slot}</div>
            </fieldset>
        HTML;
    }
}
