<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Model\ResponseModel;
use App\Service\Calculator;
//Le routing est en place et ne prends en compte que les appel en méthode POST et vérifie la présence de chaque paramètres
final class CalculatorController extends AbstractController{
    #[Route('/calculator', name: 'app_calculator', methods : ['POST'])]
    public function calculator( Request $request ): JsonResponse
    {
        $num1 = (int) $request->getPayload()->get('nombre1');
        if(is_null($num1)){
            $response = new ResponseModel(1, "le paramètre number1 est manquant.");
            return $this->json($response);
        }
        if($num1 === 0 && strlen($request->getPayload()->get('nombre1')) > 1 ){
            $response = new ResponseModel(1, "le paramètre number1 n'est pas un integer");
            return $this->json($response);
        }
        $num2 = (int) $request->getPayload()->get('nombre2');
        if(is_null($num2)){
            $response = new ResponseModel(1, "le paramètre nombre2 est manquant.");
            return $this->json($response);
        }
        if($num2 === 0 && strlen($request->getPayload()->get('nombre2')) > 1 ){
            $response = new ResponseModel(1, "le paramètre nombre2 n'est pas un integer");
            return $this->json($response);
        }
        $operation = $request->getPayload()->get('operation');
        if(is_null($operation)){
            $response = new ResponseModel(1, "le paramètre operation est manquant.");
            return $this->json($response);
        }
        if($operation === "+" || $operation === "-" ||$operation === "*" ||$operation === "/"){
            $calculator = new Calculator($num1, $num2, $operation);
            $response = new ResponseModel(0, $calculator->getResult());
            return $this->json($response);
        } else {
            $response = new ResponseModel(1, "le paramètre operation ne possède pas une des valeur possible parmis +,-,* ou /");
            return $this->json($response);
        }
    }
}
