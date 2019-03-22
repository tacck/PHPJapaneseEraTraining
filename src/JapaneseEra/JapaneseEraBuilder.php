<?php
namespace App\JapaneseEra;

class JapaneseEraBuilder
{
    public static function build(string $date): EraInterface
    {
        $japaneseEras = [];
        foreach (glob(__DIR__ . '/Presenter/Dynamic/*.php') as $file) {
            require_once $file;
            $class = '\App\JapaneseEra\Presenter\Dynamic\\' . basename($file, '.php');
            $presenter = new $class($date);
            $japaneseEras[$presenter->getStartedAt()] = $presenter;
        }
        krsort($japaneseEras);

        foreach ($japaneseEras as $era) {
            if ($era->isAvailable()) {
                return $era;
            }
        }

        throw new \InvalidArgumentException('Invalit Date');
    }
}
