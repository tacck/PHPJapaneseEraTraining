<?php
namespace App\JapaneseEra\Presenter\Dynamic;

use App\JapaneseEra\EraInterface;

class MeijiPresenter implements EraInterface
{
    private $startedAt = '1868-01-01';
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function __toString(): string
    {
        return '明治';
    }

    public function isAvailable(): bool
    {
        return ($this->date >= $this->startedAt);
    }

    public function getStartedAt(): string
    {
        return $this->startedAt;
    }
}
