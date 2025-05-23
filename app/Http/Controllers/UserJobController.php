<?php
namespace App\Http\Controllers;

use App\Models\UserJob; 
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser; 
use Laravel\Lumen\Routing\Controller as BaseController;

class UserJobController extends BaseController
{
    use ApiResponser;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $usersjob = UserJob::all();
        return $this->successResponse($usersjob);
    }

    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}