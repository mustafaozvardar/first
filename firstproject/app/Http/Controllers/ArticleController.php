<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    
    public function index() 
    { 
          
        $articles = Article::all(); 
  
        return view('gfg')->with('articles', $articles); 
  
    } 

  
    public function insert() { 
  
        $article = new Article; 
      
        $article->topic = "View in Laravel"; 
        $article->content = "View is the data display at the user end."; 
      
        $article->save(); 
      
        echo "Insert Successful!"; 
      
        } 
          
        // Update function 
        public function update() { 
      
            $article = Article::find(1); 
      
            $article->topic = "deneme"; 
      
            $article->save(); 
      
            echo "Update Successful!"; 
      
        } 
          
        // Delete function 
        public function delete() { 
      
            $article = Article::find(1); 
      
            $article->delete(); 
      
            echo "Delete Successful!"; 
      
        } 
    
}
