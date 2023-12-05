<?php

namespace app\Routes;

include "app/Controller/ProductController.php";

use app\Controller\ProductController;

class ProductRoutes
{
    public function handle($method, $path)
    {
        if ($method == 'GET' && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->index();
        }

        if ($method == 'GET' && strpos($path, '/api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        if ($method == 'POST' && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->insert();
        }

        if ($method == 'PUT' && strpos($path, '/api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
        }
        if ($method == 'DELETE' && strpos($path, '/api/product') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }

        //get all pake deskripsi
        if ($method == 'GET' && $path == '/api/productwithdescription') {
            $controller = new ProductController();
            echo $controller->getAllWithDescription();
        }

        //update description
        if ($method == 'PUT' && strpos($path, '/api/productwithdescription') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->updateDescription($id);
        }

        //hapus deskripsi
        if ($method == 'DELETE' && strpos($path, '/api/productdescription') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->deleteDescription($id);
        }

        if ($method == 'POST' && $path == '/api/productdescription') {
            $controller = new ProductController();
            echo $controller->insertDescriptionFromJson();
        }

        if ($method == 'GET' && strpos($path, '/api/productdescription') == 0) {
            $pathParts = explode('/', $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getProductWithDescriptionById($id);
        }
    }
}
