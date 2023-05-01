<?php

namespace App\Repositories\Contracts;

interface BlogRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function updateStatus(array $id, $data);
}