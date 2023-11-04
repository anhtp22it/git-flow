<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedJobsController extends Controller
{
    //

    public function index() {
        $savedJobs = SavedJob::where('user_id', Auth::user()->id)->paginate(6);
        return view('admin.bookmark-jobs')
            ->with('savedJobs', $savedJobs);
    }

    public function delete($id) {
        $savedJobs = SavedJob::where('id', $id);
        $savedJobs->delete();

        return redirect()->back()->with('delete', 'Delete Success.');
    }
}
