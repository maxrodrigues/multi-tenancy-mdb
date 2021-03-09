<?php

declare(strict_types=1);

namespace App\Section;

class SectionManager
{
    private $section = 'app';

    /**
     * @return string
     */
    public function getSection(): string
    {
        //NULL or Company
        return $this->section;
    }

    /**
     * @param  Company $tenant
     * @return void
     */
    public function setSection(string $section): void
    {
        $this->section = $section;
    }

    public function get(string $key = null)
    {
        return $key ? config("sections.sections.{$this->section}.{$key}") : config("sections.sections.{$this->section}");
    }
}
