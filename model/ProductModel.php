<?php
namespace App\model;


class ProductModel {

    private int $id;
    private string $product_name;
    private string $product_image;
    private string $description;
    private int $category_id;
    private string $category;

    /**
     * Get the value of id
     */ 
    public function getId():int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of product_name
     */ 
    public function getProduct_name():string
    {
        return $this->product_name;
    }

    /**
     * Set the value of product_name
     *
     * @return  self
     */ 
    public function setProduct_name(string $product_name)
    {
        $this->product_name = $product_name;

        return $this;
    }

    /**
     * Get the value of product_image
     */ 
    public function getProduct_image():string
    {
        return $this->product_image;
    }

    /**
     * Set the value of product_image
     *
     * @return  self
     */ 
    public function setProduct_image(string $product_image)
    {
        $this->product_image = $product_image;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory():string
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory(string $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id():int
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id(int $category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
}