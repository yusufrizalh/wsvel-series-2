<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class UserController extends Controller {
    public function index() {
        // return "API data will be here";
        // return Http::get("https://reqres.in/api/users?page=1​");
        $collection = Http::get("https://reqres.in/api/users?page=1");
        return view('users', ['collection' => $collection['data']]);
    }
}
