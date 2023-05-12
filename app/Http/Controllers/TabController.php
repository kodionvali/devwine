<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function getContent($tabId)
    {
        $viewName =  'includes.UserDashboard.'.$tabId;
        $tab = $tabId;
        if (view()->exists($viewName)) {
            return view($viewName, compact('tab'));
        } else {
            abort(404);
        }
    }
}