<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ResourseController extends Controller
{
    public function index()
    {
        return "index method";
    }

    public function create()
    {
        return "create method";
    }

    public function store(Request $request)
    {
        return "store method";
    }

    public function show(string $id)
    {
        return "show method";
    }

    public function edit(string $id)
    {
        return "edit method";
    }

    public function update(Request $request, string $id)
    {
        return "update method";
    }

    public function destroy(string $id)
    {
        return "destroy method";
    }
}
