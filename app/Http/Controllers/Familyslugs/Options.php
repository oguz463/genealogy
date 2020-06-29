<?php

namespace App\Http\Controllers\Familyslugs;

use App\FamilySlgs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = FamilySlgs::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return FamilySlgs::query();
    //}
}