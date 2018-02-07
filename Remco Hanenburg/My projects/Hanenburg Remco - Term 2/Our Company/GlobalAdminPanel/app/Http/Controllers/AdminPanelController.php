<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Textfield;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AdminPanelController extends Controller
{
    //Auth functions
    public function loginIndex() {
        return redirect()->route('admin.index');
    }

    public function loginGo() {
      $login_data = Input::only('email', 'password');
      if(Auth::attempt($login_data)) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->route('admin.login.index');
      }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.index');
    }

    //Admin panel functions
    public function index() {
      if(Auth::check()) {
        $pages = Page::all();
        return view('index', ['pages' => $pages]);
      } else {
        return view('page-login');
      }
    }

    public function editPageIndex($page_id) {
      if(Auth::check()) {
        $pages = Page::all();
        $specificpage = Page::where('id', 'LIKE', $page_id)->first();
        $textfields = Textfield::where('page_id', 'LIKE', $page_id)->get();
        return view('editPageIndex', ['textfields' => $textfields, 'pages' => $pages, 'specificpage' => $specificpage]);
      } else {
        return view('page-login');
      }
    }

    public function editTextFieldIndex($textfield_id) {
      if(Auth::check()) {
        $pages = Page::all();
        $specifictextfield = Textfield::where('id', 'LIKE', $textfield_id)->first();
        return view('editTextFieldIndex', ['pages' => $pages, 'specifictextfield' => $specifictextfield]);
      } else {
        return view('page-login');
      }
    }

    public function editTextFieldSave(Request $r) {
      if(Auth::check()) {
        $updatetextfield = Textfield::find($r->id);

        $updatetextfield->name = $r->name;
        $updatetextfield->content = $r->content;

        $updatetextfield->save();

        return redirect()->route('admin.index');
      } else {
        return view('page-login');
      }
    }
}
