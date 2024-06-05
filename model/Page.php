<?php

namespace App\model;

class Page {

    private $title;
    private $first_title;
    private $second_title_1;
    private $second_title_2;
    private $second_title_3;
    private $third_title_1;
    private $third_title_2;
    private $third_title_3;
    private $third_title_4;
    private $image_1;
    private $image_2;
    private $image_3;
    private $image_4;
    private $image_5;
    private $image_6;
    private $image_7;
    private $image_8;
    private $image_9;
    private $text_1;
    private $text_2;
    private $text_3;
    private $text_4;
    private $text_5;
    private $text_6;

    public function __construct(string $title, string $first_title, string|null $second_title_1 = null, string|null $second_title_2 = null,string|null $second_title_3 = null, string|null $third_title_1 = null,string|null $third_title_2 = null, string|null $third_title_3 = null, string|null $third_title_4 = null, string|null $image_1 = null, string|null $image_2 = null, string|null $image_3 = null, string|null $image_4 = null, string|null $image_5 = null, string|null $image_6 = null, string|null $image_7 = null, string|null $image_8 = null, string|null $image_9 = null, string|null $text_1 = null, string|null $text_2 = null, string|null $text_3 = null, string|null $text_4 = null, string|null $text_5 = null, string|null $text_6 = null)
    {
        $this->setTitle($title);
        $this->setFirstTitle($first_title);
        $this->constructTitle($second_title_1, 'second_title_1');
        $this->constructTitle($second_title_2, 'second_title_2');
        $this->constructTitle($second_title_3, 'second_title_3');
        $this->constructTitle($third_title_1, 'third_title_1');
        $this->constructTitle($third_title_2, 'third_title_2');
        $this->constructTitle($third_title_3, 'third_title_3');
        $this->constructTitle($third_title_4, 'third_title_4');
        $this->constructImage($image_1, 'image_1');
        $this->constructImage($image_2, 'image_2');
        $this->constructImage($image_3, 'image_3');
        $this->constructImage($image_4, 'image_4');
        $this->constructImage($image_5, 'image_5');
        $this->constructImage($image_6, 'image_6');
        $this->constructImage($image_7, 'image_7');
        $this->constructImage($image_8, 'image_8');
        $this->constructImage($image_9, 'image_9');
        $this->constructText($text_1, 'text_1');
        $this->constructText($text_2, 'text_2');
        $this->constructText($text_3, 'text_3');
        $this->constructText($text_4, 'text_4');
        $this->constructText($text_5, 'text_5');
        $this->constructText($text_6, 'text_6');
    }

    public function setTitle(string $title):void
    {
        $this->title = $title;
    }
    
    public function setFirstTitle(string $first_title):void
    {
        $this->first_title = $first_title;
    }

    public function setOtherTitle(string $title, string $name):void
    {
        $this->$name = $title;
    }

    public function setImage(string $image , string $name):void
    {
        $this->$name = $image;
    }

    public function setText(string $text, string $name):void
    {
        $this->$name = $text;
    }

    public function constructTitle(string|null $title, string|null $name):void 
    {
        if($title !== null) {
            $this->setOtherTitle($title, $name);
        }
    }

    public function constructImage(string|null $image, string|null $name):void 
    {
        if ($image !== null) {
            $this->setImage($image, $name);
        }
    }

    public function constructText(string|null $text, string|null $name):void
    {
        if ($text !== null) {
            $this->setText($text, $name);
        }
    }
}