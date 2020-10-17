<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
Route::get('/posts/{id}/show',function($id){
  
  $post = Post::find($id);
  return $post->user->name;
  
});

Route::get('user/{id}/posts',function ($id){
  
  $user = User::where('id',$id)->firstOrFail();
   foreach ($user->posts as $post){
     echo $post->title;
   }


});