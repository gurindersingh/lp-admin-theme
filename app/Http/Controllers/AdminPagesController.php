<?php

namespace App\Http\Controllers;

use App\Library\GetFontIcons;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function welcome()
    {
        return redirect()->route('admin', 'dashboard');
    }

    /**
     * @param null $adminPage
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminPages($adminPage = NULL, Request $request)
    {
        $path = $request->path();
        $path = str_replace('admin/', '', $path);
        if (view()->exists('admin.' . $adminPage)) {
            if ($adminPage == 'font-icons') {
                $fontIcons = new GetFontIcons();
            }
            return view('admin.' . $adminPage, compact('fontIcons', 'path'));
        }

        return view('admin.viewNotAvailable');
    }
}
