<?php
namespace App\JapaneseEra\Presenter\Dynamic;

use App\JapaneseEra\EraInterface;

class ShowaPresenter implements EraInterface
{
    private $startedAt = '1926-12-25';
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function __toString(): string
    {
        return '昭和';
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
