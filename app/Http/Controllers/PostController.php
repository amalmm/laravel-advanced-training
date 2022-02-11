<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repository\PostRepository;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    private $post;

    public function __construct(PostRepository $post)
    {
       $this->post = $post;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     
     // $data = $this->post->getAll($request);
     $data = $this->post->filterAll($request);

     return view('welcome',compact('data')) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $this->post->storeAll($request->validated());
        
        return back();
        
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      $data =  $this->post->showSelected($id);

        return view('show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  $this->post->editSelected($id);

        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id,PostRequest $request)
    {
        $this->post->updateAll($id,$request->validated());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->post->deleteSelected($id);
        return redirect('/');
    }
}
