<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index(){
    $jobs = Job::alljobs();
    return view("job/index", ["jobs"=> $jobs]);
    }
}
