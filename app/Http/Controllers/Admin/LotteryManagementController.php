<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LotteryManagementController extends Controller
{
    public function edit(Project $project)
    {
        return view('admin.projectmgt.lottery.edit', compact('project'));
    }
}
