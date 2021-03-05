<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestController extends Controller {
    // Metode request Http GET
    public function postsListing() {
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");
        $response = $response->json();
        return response()->json(["status" => 200, "count" => count($response), "data" => $response]);
    }

    // Metode request Http POST
    public function createPost(Request $request) {
        $dataArray = array(
            "userId" => $request->userId,
            "title" => $request->title,
            "body" => $request->body
        );
        $response = Http::post("https://jsonplaceholder.typicode.com/posts", $dataArray);
        $response = $response->body();
        print_r($response);
    }

    // Metode request Http PUT
    public function updatePost()
    {
        $response = Http::put("https://jsonplaceholder.typicode.com/posts/1", [
            "userId" => 1,
            "title" => "Laravel 8 Request Http with Guzzle",
            "body" => "Ini adalah post update Laravel 8 Request Http with Guzzle"
        ]);
        $response = $response->json();
        return response()->json(["status" => 200, "data" => $response]);
    }

    // Metode request Http DELETE 
    public function deletePost() {
        $response = Http::delete("https://jsonplaceholder.typicode.com/posts/1");
        $response = $response->body();
        print_r($response);
    }
}
