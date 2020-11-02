<?php

namespace App\Http\Controllers;

use App\Activity;
use carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{
    public $activity;
    public function __construct()
    {
        $this->activity = new Activity;
    }
    public function index()
    {
        $activitys = Activity::all();
        
        return view('backend.kegiatan.index', compact('activitys'));
        
    }

    public function create()
    {
        $getKode = $this->activity->generateCode();

        return view('backend.kegiatan.create' ,compact('getKode'));
        
    }

    public function edit($id)
    {
        $activitys = Activity::findOrFail($id);
        return view('backend.kegiatan.edit', compact('activitys'));
    }
    
    public function store()
    {
        $activity = Activity::create($this->validateRequest());
        $this->storeImage($activity);

        return redirect()->back()->with(['success' => 'Activity berhasil dibuat']);
        
    }

    public function update(Activity $activity)
    {
        $activity->update($this->validateRequest());
        $this->storeImage($activity);

        return redirect()->back()->with(['success' => 'Activity berhasil dibuat']);
        
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        if(\File::exists(public_path('storage/'. $activity->images)))
        {
            \File::delete(public_path('storage/'. $activity->images));
        }
        return redirect()->back()->with(['success' => 'Activity berhasil dihapus']);
    }

    private function validateRequest(){
        return tap(request()->validate([
            'code_activity' => 'required',
            'name'          => 'required',
            'date'          => 'required',
            'information'   => 'required',
            'status'        => 'required',
            'price'         => 'required',
            'images'        => 'file|image|max:5000',
            'capacity'      => 'required',
            
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        }); 
    }
    private function storeImage($activity){
        if(request()->has('images')){
            $activity->update([
                'images' => request()->images->store('uploads', 'public'),
            ]);
            $image = Image::make(public_path('storage/'. $activity->images))->fit(300,300,null, 'top-left');

            $image->save();
        }
    }
}