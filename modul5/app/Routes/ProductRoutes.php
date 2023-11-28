<?php

namespace app\Routes;

include "app/Controller/ProductsController.php";

use app\Controller\ProductController;
use app\Models\Product;
use Controller\Controller;

class ProductRoutes
{
    public function handle($method, $path)
    {
        if ($method == 'get' && $path == 'api/product') {
            $controller = new ProductController();
            echo $controller->index();
        }

        if ($method == 'get' && strpos($path, 'api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        if ($method == "post" && $path == 'api/product') {
            $controller = new ProductController();
            echo $controller->insert();
        }

        if ($method == "PUT" && strpos($path, 'api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController;
            echo $controller->update($id);
        }

        if ($method == "delete" && strpos($path, 'api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController;
            echo $controller->delete($id);
        }
    }
}
