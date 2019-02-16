<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\GroupResource;
use App\Model\Group;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    protected $model;
    protected $resource;

    public function __construct(Group $group, GroupResource $groupResource)
    {
        $this->model = new Repository($group);
        $this->resource = $groupResource;
    }

    public function index()
    {
        return ($this->resource)::collection($this->model->all());
    }

    public function store(Request $request)
    {
        // create record and pass in only fields that are fillable
        return $this->model->create($request->only($this->model->getModel()->fillable));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
