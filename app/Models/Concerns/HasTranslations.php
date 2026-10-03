<?php

namespace App\Models\Concerns;

trait HasTranslations
{
    public function getAttribute($key)
    {
        $value = parent::getAttribute($key);

        if (is_string($value) && $this->isTranslatable($key)) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                $locale = app()->getLocale();
                return $decoded[$locale] ?? $decoded['en'] ?? reset($decoded) ?: '';
            }
        }

        return $value;
    }

    public function setAttribute($key, $value)
    {
        if ($this->isTranslatable($key) && is_array($value)) {
            $filtered = array_filter($value, fn ($v) => $v !== null && $v !== '');
            $value = $filtered ? json_encode($filtered, JSON_UNESCAPED_UNICODE) : null;
        }

        return parent::setAttribute($key, $value);
    }

    public function trans(string $key, string $locale): string
    {
        return $this->translations($key)[$locale] ?? '';
    }

    public function translations(string $key): array
    {
        $raw = $this->getRawOriginal($key);
        $decoded = is_string($raw) ? json_decode($raw, true) : null;

        if (is_array($decoded)) {
            return $decoded;
        }

        return $raw ? ['en' => $raw] : [];
    }

    protected function isTranslatable(string $key): bool
    {
        return in_array($key, $this->translatable ?? [], true);
    }
}
