<?php
namespace App\JapaneseEra\Presenter\Dynamic;

use App\JapaneseEra\EraInterface;

class HeiseiPresenter implements EraInterface
{
    private $startedAt = '1989-01-08';
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function __toString(): string
    {
        return '平成';
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
