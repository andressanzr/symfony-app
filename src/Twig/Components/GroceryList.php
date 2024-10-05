<?php

declare(strict_types=1);

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
class GroceryList
{

    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public array $items = [];

    #[LiveProp(writable: true)]
    public string $name = '';

    #[LiveProp(writable: true)]
    public int $amount = 1;

    #[LiveAction]
    public function addItem()
    {
        if ($this->name) {
            $this->items[] = [$this->amount, $this->name];
            $this->name = '';
            $this->amount = 1;
        }
    }

    #[LiveAction]
    public function removeItem(#[LiveArg] int $key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        }
    }
}
