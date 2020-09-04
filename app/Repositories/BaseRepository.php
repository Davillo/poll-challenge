<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function __call($name, $arguments)
    {
        return $this->model->{$name}(...$arguments);
    }

    function create(array $data) : Model
    {
        return $this->model->create($data);
    }

    function index() : Collection
    {
        return $this->model->all();
    }

    function update(int $id, array $data) : Model
    {
        $model = $this->getById($id);
        $model->fill($data);
        $model->update();
        return $model;
    }

    function destroy(int $id) : void
    {
        $model = $this->getById($id);
        $model->delete();
    }

    public function getById(int $id): ?Model
    {
        return $this->model->find($id);
    }

    public function exists(int $id): bool
    {
        return !!$this->getById($id);
    }
}
