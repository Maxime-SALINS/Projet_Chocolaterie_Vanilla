<?php
namespace App\controller;

use App\model\ProductModel;
use App\manager\ProductManager;
use App\manager\PageManager;
use App\service\NewsletterService;
use App\Model\PageModel;
use Utils\UtilsController\AbstractController;

class ProductController extends AbstractController {

    public function index()
    {
        $newProduct = new ProductModel;
        $tableSql = new ProductManager;
        $productPage = new PageManager;
        $newsQuery = new NewsletterService;
        
        $product_elements = $tableSql->findAll();
        $elements = $productPage->findElements('Produits');
        $newsletterStatus = $newsQuery->newsletterSubscription();
        
        $newPage = new PageModel($elements);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            if(isset($_POST['filter_chocolate'])){

                $newProduct->setCategory($_POST['filter_chocolate']);
                $category_name = $newProduct->getCategory();
                $product_elements = $tableSql->findByCategory($category_name);

            } elseif(isset($_POST['filter_cafe'])){

                $newProduct->setCategory($_POST['filter_cafe']);
                $category_name = $newProduct->getCategory();
                $product_elements = $tableSql->findByCategory($category_name);

            } elseif(isset($_POST['filter_the'])){

                $newProduct->setCategory($_POST['filter_the']);
                $category_name = $newProduct->getCategory();
                $product_elements = $tableSql->findByCategory($category_name);

            } elseif(isset($_POST['filter_glace'])){

                $newProduct->setCategory($_POST['filter_glace']);
                $category_name = $newProduct->getCategory();
                $product_elements = $tableSql->findByCategory($category_name);
            }
        }

        $this->render('/product/product-list.html.php', array_merge([
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'product_elements' => $product_elements,
            'name' => 'product'
        ], $newsletterStatus));

    }

    public function show(int $product_id)
    {
        $newProduct = new ProductModel;
        $tableSql = new ProductManager;
        $productPage = new PageManager;
        $newsQuery = new NewsletterService;
        
        $newProduct->setId($product_id);
        $product_element = $tableSql->findById($newProduct->getId());
        $elements = $productPage->findElements('Produits');
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $newPage = new PageModel($elements);

        $this->render('/product/product-detail.html.php', array_merge([
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'product_element' => $product_element,
            'name' => 'product'
        ], $newsletterStatus));
    }

    public function viewDashboard()
    {
        $dashboardPage = new PageManager;
        $elements = $dashboardPage->findAllPage();
        
        $limit = 4;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $tableSql = new ProductManager;
        $product_elements = $tableSql->findAllPagination($limit, $offset);
    
        $totalProducts = $tableSql->countAll();
        $totalPages = ceil($totalProducts / $limit);
    
        $this->render('/product/product-dashboard.html.php', [
            'title' => 'Dashboard',
            'first_title' => 'Dashboard administrateur',
            'name' => 'dashboard',
            'elements' => $elements,
            'product_elements' => $product_elements,
            'current_page' => $page,
            'total_pages' => $totalPages
        ], 'dashboard.html.php');
    }

    public function getCategory():array 
    {
        $tableSql = new ProductManager;
        
        return $tableSql->findCategory();
    }

    public function new()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!empty($_POST['product_name']) && !empty($_POST['description']) && !empty($_POST['category']) && !empty($_FILES['image_product']['name'])){
    
                $newProduct = new ProductModel;
    
                $newProduct->setProduct_name($_POST['product_name']);
                $newProduct->setProduct_image($_FILES['image_product']['name']);
                $newProduct->setDescription($_POST['description']);
                $newProduct->setCategory_id($_POST['category']);
    
                $product_name = $newProduct->getProduct_name();
                $image_product = $newProduct->getProduct_image();
                $description = $newProduct->getDescription();
                $category_id = $newProduct->getCategory_id();
    
                //Check if product exist already on bdd :
                $newQuery = new ProductManager;
                $table_product= $newQuery->findAll();
    
                if(!in_array($product_name, array_column($table_product, "product_name"))){
                    
                    //image infos :
                    $tmpName = $_FILES['image_product']['tmp_name'];
        
                    //Get extension of image :
                    $imgExtension = pathinfo($image_product, PATHINFO_EXTENSION);
        
                    //Regex for extension valid :
                    $extensionValid = ['jpg', 'jpeg','gif','png','webp'];
        
                    //Test if extension is valid or not :
                    if (!in_array(strtolower($imgExtension),$extensionValid)){

                        $msg_error = "l'extention de l'image n'est pas valide";
                        
                        $dashboardPage = new PageManager;
                        $elements = $dashboardPage->findAllPage();

                        $this->render('/product/new.html.php', [
                            'title' => 'Dashboard',
                            'first_title' => 'Dashboard administrateur',
                            'name' => 'dashboard',
                            'elements' => $elements,
                            'categorys' => $this->getCategory(),
                            'msg_error' => $msg_error
                        ], 'dashboard.html.php');

                    } else {
                        
                        move_uploaded_file($tmpName, 'assets/images/produits/'. $image_product);
                        
                        $image_product = "/assets/images/produits/" . $image_product;

                        $newQuery->create($product_name, $image_product, $description, $category_id);
                        
                        $this->redirect('/dashboard/produits');
                    }
                } else{
                    $msg_error = "le produit existe déjà";

                    $dashboardPage = new PageManager;
                    $elements = $dashboardPage->findAllPage();

                    $this->render('/product/new.html.php', [
                        'title' => 'Dashboard',
                        'first_title' => 'Dashboard administrateur',
                        'name' => 'dashboard',
                        'elements' => $elements,
                        'categorys' => $this->getCategory(),
                        'msg_error' => $msg_error
                    ], 'dashboard.html.php');
                }
            } else {
                $msg_error = "Vueillez remplir tous les champs";

                $dashboardPage = new PageManager;
                $elements = $dashboardPage->findAllPage();

                $this->render('/product/new.html.php', [
                    'title' => 'Dashboard',
                    'first_title' => 'Dashboard administrateur',
                    'name' => 'dashboard',
                    'elements' => $elements,
                    'categorys' => $this->getCategory(),
                    'msg_error' => $msg_error
                ], 'dashboard.html.php');
            }
        }

        $dashboardPage = new PageManager;
        $elements = $dashboardPage->findAllPage();

        $this->render('/product/new.html.php', [
            'title' => 'Dashboard',
            'first_title' => 'Dashboard administrateur',
            'name' => 'dashboard',
            'elements' => $elements,
            'categorys' => $this->getCategory()
        ], 'dashboard.html.php');
    }

    public function update($params)
    {
        $idProduct = $params['idProduct'] ?? null;

        $productManager = new ProductManager();
        $product = $productManager->findById($idProduct);
        if (!$product) {
            die("Produit non trouvé.");
        }

        $categoryManager = new ProductManager();
        $categorys = $categoryManager->findCategory();
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $product_name = $_POST['product_name'] ?? $product['product_name'];
            $description = $_POST['description'] ?? $product['description'];
    
            $category_id = $_POST['category'] ?? $product['category_id'];
    
            if (!empty($_FILES['image_product']['name'])) {
                $image_product = $_FILES['image_product']['name'];
                $tmpName = $_FILES['image_product']['tmp_name'];
    
                $imgExtension = pathinfo($image_product, PATHINFO_EXTENSION);
                $extensionValid = ['jpg', 'jpeg', 'gif', 'png', 'webp'];
    
                if (!in_array(strtolower($imgExtension), $extensionValid)) {
                    $msg_error = "L'extension de l'image n'est pas valide";
                } else {
                    move_uploaded_file($tmpName, 'assets/images/produits/' . $image_product);
                    $image_product = "/assets/images/produits/" . $image_product;
                }
            } else {
                $image_product = $product['image_product'];
            }
    
            $productManager->update($idProduct, $product_name, $image_product, $description, $category_id);

            $this->redirect('/dashboard/produits');
        }

        $this->render('/product/update.html.php', [
            'title' => 'Dashboard',
            'first_title' => 'Dashboard administrateur',
            'name' => 'dashboard',
            'product' => $product,
            'categorys' => $categorys,
            'idProduct' => $idProduct,
            'msg_error' => $msg_error ?? null
        ], 'dashboard.html.php');
    }

    public function delete(int $product_id)
    {
        $newQuery = new ProductManager;
        $newQuery->delete($product_id);

        $this->redirect('/dashboard/produits');
    }
}