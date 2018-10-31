<?php
namespace App\Containers\Application\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends APIController
{

    public function mvc_api()
    {
        $message = Apiato::call('Welcome@FindMessageForApiRootVisitorAction');

        return response()->json($message);
    }
}