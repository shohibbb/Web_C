<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller
{
    use ResponseFormatter;

    public function __construct()
    {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "GET";
    }

    public function getAllProduct()
    {
        $dumpyData = [
            "Air mineral",
            "Kebab",
            "Spaghetti",
            "Jus jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dumpyData
        ];

        return $this->responseFormatter(200, 'success', $response);
    }
}
