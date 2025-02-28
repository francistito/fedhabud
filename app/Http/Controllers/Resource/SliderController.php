<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Models\Resource\Slider;
use App\Models\Resource\Training;
use App\Repositories\Resource\SliderRepository;
use App\Repositories\Resource\TrainingRepository;
use App\Repositories\System\CodeValueRepository;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{

    protected $slider_repo;

    public function __construct()
    {
        $this->slider_repo = new SliderRepository();
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('cms.sliders.index');
    }

    public function create()
    {

        return view('cms.sliders.create.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $training = $this->slider_repo->store($input);
        return redirect()->route('cms.slider.index');
    }


    public function display(Training $training)
    {
        return view('system.training.training')
            ->with('training',$training);
    }

    public function profile(Slider $slider)
    {
        $image = $slider->getImageAttribute();
        return view('cms.sliders.show.show')
            ->with('slider',$slider)
            ->with('image',$image);
    }

    public function edit(Slider $slider)
    {
        return view('cms.sliders.edit.edit')
            ->with('slider',$slider);
    }

    //update note
    public function update(Request $request,Slider $slider)
    {
        $input = $request->all();
        $blog = $this->slider_repo->update($input,$slider);
        return redirect()->route('cms.slider.index')->withFlashSuccess(trans('alert.general.updated'));

    }

    public function delete(Slider $slider)
    {
        $this->slider_repo->delete($slider);
        return redirect()->route('cms.slider.index');
    }

    /**
     *list all blog
     */
    public function getForAdminDatatable()
    {
        $result_list = $this->slider_repo->getAllForDt();
        return DataTables::of($result_list)
            ->addIndexColumn()
            ->addColumn('category', function ($blog) {
                return isset($blog->category_id) ? $blog->category_id : '';
            })->addColumn('status', function ($blog) {
                return ($blog->isactive == 1) ? trans('label.active') : trans('label.inactive');
            })
            ->rawColumns(['status',])
            ->make(true);

    }

}
