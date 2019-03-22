<?php
namespace App\JapaneseEra;

interface EraInterface
{
    public function __construct(string $date);
    public function __toString(): string;
    public function isAvailable(): bool;
    public function getStartedAt(): string;
}
