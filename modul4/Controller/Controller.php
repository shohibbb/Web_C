<?php

namespace Controller;

class Controller
{
    var $controllerName;
    var $controllerMethod;

    public function getControllerAttribute()
    {
        return [
            "controllerName" => $this->controllerName,
            "method" => $this->controllerMethod
        ];
    }
}
