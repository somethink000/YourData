<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Objection;
use App\Http\Controllers\Services\ObjectionService;

class ObjectionController extends Controller
{
    
    public function __construct()
    {
      $this->ObjectionService = app(ObjectionService::class);
    }

    public function index()
    {
        return $this->ObjectionService->All();
        
    }
}
