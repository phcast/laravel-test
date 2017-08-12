<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Session\Store;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * @var Store
     */
    private $store;
    
    /**
     * Controller constructor.
     * @param Store $store
     */
    public function __construct(Store $store)
    {
        $this->store = $store;
    }
    
    
    protected function getTest()
    {
        $name = 'logout';
        
        $this->middleware('guest')->except($name);
    }
}
