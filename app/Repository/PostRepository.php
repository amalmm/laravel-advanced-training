<?php

namespace App\Repository;

interface PostRepository
{

public function getAll();

public function filterAll($request);

public function storeAll(array $data) ;

public function showSelected(string $id) ;

public function editSelected(string $id) ;

public function updateAll($id,array $data) ;

public function deleteSelected(string $id) ;




}