<?php

namespace App\Services;

class PostService extends BaseService
{
    public $posts;
    public function __construct()
    {
        $this->filename = "post";
        $this->posts = $this->loadData();
    }

    public function getAll()
    {
        return $this->posts;
    }

    public function create($data)
    {
        $post = [
            "title" => $data["title"],
            "content" => $data["content"],
        ];
        $this->posts[] = $post;
        $this->saveData($this->posts);
    }

    public function delete($id)
    {
        array_splice($this->posts,$id,1);
        $this->saveData($this->posts);
    }


}