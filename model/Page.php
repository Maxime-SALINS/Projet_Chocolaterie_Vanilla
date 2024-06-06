<?php

namespace App\model;

class Page {

    private $title;
    private $first_title;
    private $image_1;
    private $image_2;
    private $image_3;
    private $image_4;
    private $image_5;
    private $image_6;
    private $image_7;
    private $image_8;
    private $image_9;
    private $second_title_1;
    private $second_title_2;
    private $second_title_3;
    private $third_title_1;
    private $third_title_2;
    private $third_title_3;
    private $third_title_4;
    private $text_1;
    private $text_2;
    private $text_3;
    private $text_4;
    private $text_5;
    private $text_6;
    private $meta_description;
    private $alt_1;
    private $alt_2;
    private $alt_3;
    private $alt_4;
    private $alt_5;
    private $alt_6;
    private $alt_7;
    private $alt_8;
    private $alt_9;

    public function __construct(array $elements)
    {
        foreach($elements as $element)
        {
            $this->setTitle($element['page_name']);
            
            if($element['element_type'] === 'h1') {
                $this->setFirstTitle($element['content']);
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 1) {
                $this->constructImage($element['content'], 'image_1');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 2){
                $this->constructImage($element['content'], 'image_2');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 3){
                $this->constructImage($element['content'], 'image_3');
            }  elseif ($element['element_type'] === 'image' && $element['element_position'] === 4){
                $this->constructImage($element['content'], 'image_4');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 5){
                $this->constructImage($element['content'], 'image_5');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 6){
                $this->constructImage($element['content'], 'image_6');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 7){
                $this->constructImage($element['content'], 'image_7');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 8){
                $this->constructImage($element['content'], 'image_8');
            } elseif ($element['element_type'] === 'image' && $element['element_position'] === 9){
                $this->constructImage($element['content'], 'image_9');
            } elseif ($element['element_type'] === 'h2' && $element['element_position'] === 1){
                $this->constructTitle($element['content'], 'second_title_1');
            } elseif ($element['element_type'] === 'h2' && $element['element_position'] === 2){
                $this->constructTitle($element['content'], 'second_title_2');
            } elseif ($element['element_type'] === 'h2' && $element['element_position'] === 3){
                $this->constructTitle($element['content'], 'second_title_3');
            } elseif ($element['element_type'] === 'h3' && $element['element_position'] === 1){
                $this->constructTitle($element['content'], 'third_title_1');
            } elseif ($element['element_type'] === 'h3' && $element['element_position'] === 2){
                $this->constructTitle($element['content'], 'third_title_2');
            } elseif ($element['element_type'] === 'h3' && $element['element_position'] === 3){
                $this->constructTitle($element['content'], 'third_title_3');
            } elseif ($element['element_type'] === 'h3' && $element['element_position'] === 4){
                $this->constructTitle($element['content'], 'third_title_4');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 1){
                $this->constructText($element['content'], 'text_1');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 2){
                $this->constructText($element['content'], 'text_2');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 3){
                $this->constructText($element['content'], 'text_3');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 4){
                $this->constructText($element['content'], 'text_4');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 5){
                $this->constructText($element['content'], 'text_5');
            } elseif ($element['element_type'] === 'text' && $element['element_position'] === 6){
                $this->constructText($element['content'], 'text_6');
            } elseif ($element['element_type'] === 'meta description' && $element['element_position'] === 1){
                $this->setMeta($element['content']);
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 1){
                $this->contructAlt($element['content'],'alt_1');
            }  elseif ($element['element_type'] === 'alt' && $element['element_position'] === 2){
                $this->contructAlt($element['content'],'alt_2');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 3){
                $this->contructAlt($element['content'],'alt_3');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 4){
                $this->contructAlt($element['content'],'alt_4');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 5){
                $this->contructAlt($element['content'],'alt_5');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 6){
                $this->contructAlt($element['content'],'alt_6');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 7){
                $this->contructAlt($element['content'],'alt_7');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 8){
                $this->contructAlt($element['content'],'alt_8');
            } elseif ($element['element_type'] === 'alt' && $element['element_position'] === 9){
                $this->contructAlt($element['content'],'alt_9');
            }
        }
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

    public function setMeta(string $meta):void
    {
        $this->meta_description = $meta;
    }

    public function setAlt(string $alt, string $name):void
    {
        $this->$name = $alt;
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

    public function contructAlt(string|null $alt, string|null $name):void
    {
        if ($alt !== null) {
            $this->setText($alt, $name);
        }
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getFristitle():string 
    {
        return $this->first_title;
    }

    public function getImage1():string
    {
        return $this->image_1;
    }

    public function getImage2():string
    {
        return $this->image_2;
    }

    public function getImage3():string
    {
        return $this->image_3;
    }

    public function getImage4():string
    {
        return $this->image_4;
    }

    public function getImage5():string
    {
        return $this->image_5;
    }

    public function getImage6():string
    {
        return $this->image_6;
    }

    public function getImage7():string
    {
        return $this->image_7;
    }

    public function getImage8():string
    {
        return $this->image_8;
    }

    public function getImage9():string
    {
        return $this->image_9;
    }

    public function getSecondTitle1():string
    {
        return $this->second_title_1;
    }

    public function getSecondTitle2():string
    {
        return $this->second_title_2;
    }

    public function getSecondTitle3():string
    {
        return $this->second_title_3;
    }

    public function getThirdTitle1():string
    {
        return $this->third_title_1;
    }

    public function getThirdTitle2():string
    {
        return $this->third_title_2;
    }

    public function getThirdTitle3():string
    {
        return $this->third_title_3;
    }

    public function getThirdTitle4():string
    {
        return $this->third_title_4;
    }

    public function getText1():string
    {
        return $this->text_1;
    }

    public function getText2():string
    {
        return $this->text_2;
    }

    public function getText3():string
    {
        return $this->text_3;
    }

    public function getText4():string
    {
        return $this->text_4;
    }

    public function getText5():string
    {
        return $this->text_5;
    }

    public function getText6():string
    {
        return $this->text_6;
    }

    public function getMeta():string
    {
        return $this->meta_description;
    }

    public function getAlt1():string
    {
        return $this->alt_1;
    }
    public function getAlt2():string
    {
        return $this->alt_2;
    }
    public function getAlt3():string
    {
        return $this->alt_3;
    }
    public function getAlt4():string
    {
        return $this->alt_4;
    }
    public function getAlt5():string
    {
        return $this->alt_5;
    }
    public function getAlt6():string
    {
        return $this->alt_6;
    }
    public function getAlt7():string
    {
        return $this->alt_7;
    }
    public function getAlt8():string
    {
        return $this->alt_8;
    }
    public function getAlt9():string
    {
        return $this->alt_9;
    }
}