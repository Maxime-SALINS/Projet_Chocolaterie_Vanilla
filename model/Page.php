<?php

namespace App\Model;

class Page {

    private $title;
    private $firstTitle;
    private $images = [];
    private $secondTitles = [];
    private $thirdTitles = [];
    private $texts = [];
    private $metaDescription;
    private $alts = [];

    public function __construct(array $elements)
    {
        foreach ($elements as $element) {
            if (isset($element['page_name'])) {
                $this->setTitle($element['page_name']);
            }

            switch ($element['element_type']) {
                case 'h1':
                    $this->setFirstTitle($element['content']);
                    break;
                case 'image':
                    $this->setElement($this->images, $element['content'], $element['element_position']);
                    break;
                case 'h2':
                    $this->setElement($this->secondTitles, $element['content'], $element['element_position']);
                    break;
                case 'h3':
                    $this->setElement($this->thirdTitles, $element['content'], $element['element_position']);
                    break;
                case 'text':
                    $this->setElement($this->texts, $element['content'], $element['element_position']);
                    break;
                case 'meta description':
                    $this->setMetaDescription($element['content']);
                    break;
                case 'alt':
                    $this->setElement($this->alts, $element['content'], $element['element_position']);
                    break;
            }
        }
    }

    private function setElement(array &$array, string $content, int $position): void
    {
        $array[$position] = $content;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setFirstTitle(string $firstTitle): void
    {
        $this->firstTitle = $firstTitle;
    }

    public function setMetaDescription(string $metaDescription): void
    {
        $metaDescription = htmlspecialchars($metaDescription);
        $this->metaDescription = $metaDescription;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getFirstTitle(): string
    {
        return $this->firstTitle;
    }

    public function getImage(int $position): ?string
    {
        return $this->images[$position] ?? null;
    }

    public function getSecondTitle(int $position): ?string
    {
        return $this->secondTitles[$position] ?? null;
    }

    public function getThirdTitle(int $position): ?string
    {
        return $this->thirdTitles[$position] ?? null;
    }

    public function getText(int $position): ?string
    {
        return $this->texts[$position] ?? null;
    }

    public function getMetaDescription(): string
    {
        return $this->metaDescription;
    }

    public function getAlt(int $position): ?string
    {
        return $this->alts[$position] ?? null;
    }
}
