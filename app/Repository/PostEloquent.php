<?php

namespace App\Repository;

use App\Models\Post;

class PostEloquent implements PostRepository
{
	
	public function getAll()
	{
       return Post::all(); 
	}

   public function filterAll($request)
    {  
         
      $post  = Post::query();
      
      if($request->get('order'))
        {
          	 $post->orderBy('id', $request->order ); 
        }

     return $post->get();

    }


	public function storeAll(array $data) 
	{
      Post::create($data);
	}


	public function showSelected(string $id)
	{
      return Post::findOrfail($id);
	}


	public function editSelected(string $id)
	{
      return Post::findOrfail($id);
	}


	public function updateAll($id,array $data)
	{
     $var = Post::findOrfail($id);
      $var->update($data);
	}


	public function deleteSelected(string $id)
	{
     $var = Post::findOrfail($id);
      $var->delete();
	}


}