<?php
namespace App\JapaneseEra\Presenter\Dynamic;

use App\JapaneseEra\EraInterface;

class TaishoPresenter implements EraInterface
{
    private $startedAt = '1912-07-30';
    private $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function __toString(): string
    {
        return '大正';
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
