<?php
class Core
{
    public function start($urlGet)
    {
        $acao = "index";
        if ($urlGet == null) {
            $controller = "Home";
        } else {
            $controller = $urlGet['p'];
            if (!class_exists($controller)) {
                $controller = "Erro";
            }
        }
        call_user_func(array(new $controller, $acao), array()); 
        // chama métodos dinamicamente
    }
}