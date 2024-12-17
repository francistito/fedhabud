<?php


namespace App\Http\Controllers\Resource;


use App\Http\Controllers\Controller;
use App\Http\Requests\Resource\SendContactUsRequest;
use App\Models\Cms\AboutUs;
use App\Models\Cms\Module;
use App\Models\Cms\ModuleGroup;
use App\Repositories\Cms\ContactUsRepository;
use App\Repositories\Cms\ModuleGroupRepository;
use App\Repositories\System\SubscriptionRepository;
use Illuminate\Http\Request;

class GeneralInformationController extends Controller
{

    public function __construct()
    {

    }

    //about us
    public function aboutUs()
    {
        return view('pages.about_us');
    }

    //contact us
    public function contactUs()
    {
        return view('pages.contact_us');
    }

    //contact us
    public function services()
    {
        return view('pages.services');
    }


    public function service($service)
    {
        switch ($service) {

            case 'accounting':


                return view('general_information.services.accounting');
                break;


            case 'tax':

                  return view('general_information.services.tax');

                break;


            case 'audit':

              return view('general_information.services.audit');
                break;

        }
    }

    //send  contact us
    public function sendMessageToSupportEmail(Request $request)
    {
        $contact_us = (new ContactUsRepository())->sendContactUsNotification($request);
        return redirect()->back()->withFlashSuccess(trans('label.system.general_information.success'));
    }


    //newsletter subscription
    public function newsLetterSubscription(Request $request)
    {
        $subscriber = (new SubscriptionRepository())->store($request->all());
        return redirect()->back();
    }

    //user manual
    public function userManual()
    {
        $modules = Module::query()->get();
        $module_groups = (new ModuleGroupRepository())->queryActive()->orderBy('name')->get();
        return view('cms.user_manual.index')
            ->with('module_groups',$module_groups)
            ->with('modules',$modules);
    }


}
