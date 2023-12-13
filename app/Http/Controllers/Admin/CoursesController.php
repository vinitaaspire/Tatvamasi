<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\CourseCategory;
use App\Models\Trainer;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        $courses =  Courses::latest()->with('category', 'trainer')->get();
        return view('back.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CourseCategory::where('status', 1)->latest()->get();
        $trainer   = Trainer::latest()->get();

        return view('back.courses.create', compact('category', 'trainer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:course_categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'required|numeric',
            'no_of_lecture' => 'required|numeric',
            'price' => 'required|numeric',
            'desc' => 'required',
            'days' => 'required|array',
            'days.*' => 'integer|between:1,7',
            'start_times' => 'required|array',
            'start_times.*' => 'date_format:H:i',
            'end_times' => 'required|array',
            'end_times.*' => 'date_format:H:i|after_or_equal:start_times.*',
            'status' => 'required|in:0,1',
            'order' => 'nullable|numeric',
        ]);

        $course = new Courses();
        $imagePath = null;
        if ($request->hasFile('image')) {
            $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
            $course->image = $imagePath;
        }


        $course->name = $request->input('name');
        $course->category_id = $request->input('category_id');
        $course->trainer_id = $request->input('trainer_id');

        $course->duration = $request->input('duration');
        $course->no_of_lecture = $request->input('no_of_lecture');
        $course->price = $request->input('price');
        $course->desc = $request->input('desc');
        $course->days = implode(',', $request->input('days'));
        $course->timeing = $this->formatTimeRanges($request->input('start_times'), $request->input('end_times'));
        $course->status = $request->input('status');
        $course->order = $request->input('order');

        $course->save();

        return redirect()->back()->with('success', 'Course has been saved successfully!');
    }



    private function formatTimeRanges($startTimes, $endTimes)
    {
        $formattedTimeRanges = [];
        foreach ($startTimes as $key => $startTime) {
            $formattedTimeRanges[] = $startTime . ' - ' . $endTimes[$key];
        }
        return implode(', ', $formattedTimeRanges);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Banner = Courses::findOrFail($id);
        $Banner->status = $Banner->status == 1 ? 0 : 1;
        $Banner->update();



        // Redirect to a specific route or URL
        return redirect()->back()->with('success', 'Courses Status Updated Successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CourseCategory::where('status', 1)->latest()->get();
        $trainer   = Trainer::latest()->get();
        $courses = Courses::findorfail($id);

        return view('back.courses.edit', compact('courses' , 'category' , 'trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:course_categories,id',
            'trainer_id' => 'required|exists:trainers,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'duration' => 'required|numeric',
            'no_of_lecture' => 'required|numeric',
            'price' => 'required|numeric',
            'desc' => 'required',
            'days' => 'required|array',
            'days.*' => 'integer|between:1,7',
            'start_times' => 'required|array',
            'start_times.*' => 'date_format:H:i',
            'end_times' => 'required|array',
            'end_times.*' => 'date_format:H:i|after_or_equal:start_times.*',
            'status' => 'required|in:0,1',
            'order' => 'nullable|numeric',
        ]);

        $course =  Courses::findorfail($id);
     
        if ($request->hasFile('image')) {
            $uniqueFileName = md5(time() . $request->file('image')->getClientOriginalName());
            $imagePath = $request->file('image')->move('uploads', $uniqueFileName);
            $course->image = $imagePath;
        }


        $course->name = $request->input('name');
        $course->category_id = $request->input('category_id');
        $course->trainer_id = $request->input('trainer_id');

        $course->duration = $request->input('duration');
        $course->no_of_lecture = $request->input('no_of_lecture');
        $course->price = $request->input('price');
        $course->desc = $request->input('desc');
        $course->days = implode(',', $request->input('days'));
        $course->timeing = $this->formatTimeRanges($request->input('start_times'), $request->input('end_times'));
        $course->status = $request->input('status');
        $course->order = $request->input('order');

        $course->update();
        return redirect()->back()->with('success', 'Courses Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Courses::findorfail($id);
        $banner->delete();
        return redirect()->back()->with('success', 'Category Delete Successfull!');
    }
}
