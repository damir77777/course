<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\Timer\Duration;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(4);
        return view("index", ["courses" => $courses]);
    }
    public function create(Request $request)
    {
        $request->validate(
            [
                "title" => "required|max:50",
                "description" => "required",
                "duration" => "numeric|required",
                "cost" => "numeric",
                "image" => "file|max:100|nullable",
            ]
            ,
            [

                "title.required" => "поле наименование не заполнено!",
                "title.max" => "наименование не должно быть более 50 символов",
                "description.required" => "поле описание не заполнено",
                "duration.numeric" => "ввод только цифр",
                "duration.required" => "поле длительность не заполнено",
                "cost.numeric" => "ввод только цифр",
                "image.file" => "не правильная конструкция файла",
                "image.max" => "название файла не должно быть более 100 символов",

            ]

        );
        $course_info = $request->all();
        // $course_info = Course::paginate(4);

        $file = $request->file("image");
        if (!empty($file)) {

            $file_name = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            Storage::putFileAs("public/image", $file, $file_name);
            Course::create([
                "title" => $course_info["title"],
                "description" => $course_info["description"],
                "duration" => $course_info["duration"],
                "cost" => $course_info["cost"],
                "image" => $file_name,
                "category_id" => $course_info["category_id"],
            ]);
        } else {
            Course::create([
                "title" => $course_info["title"],
                "description" => $course_info["description"],
                "duration" => $course_info["duration"],
                "cost" => $course_info["cost"],
                "category_id" => $course_info["category_id"],
            ]);
        }




        return redirect("/admin")->with([
            "alert" => "Заявка успешно создана"
        ]);
    }
}
