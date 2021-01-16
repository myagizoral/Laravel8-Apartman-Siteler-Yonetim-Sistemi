<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
use App\Models\Menu;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Setting;
>>>>>>> Stashed changes
=======
use App\Models\Message;
use App\Models\Setting;
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
use App\Models\Content;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
//use App\Http\Livewire\
use App\Models\Review;
>>>>>>> Stashed changes
use App\Models\Content;
use App\Models\Image;
use App\Models\Menu;
use App\Models\Message;
use App\Models\Setting;
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public static function categorylist()
    {
        return Menu::where('parent_id', '=' , 0)->with('children')->get();
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
=======
    public function index()
    {
        $setting = Setting::first();
        $slider = Content::where('price',0)->select('id','title','image','slug')->limit(4)->get();
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public function index()
    {
        $setting = Setting::first();
        $slider = Content::
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
              where('tur','olum')
            ->orWhere('tur' , "duyuru")
            ->select('id','title','image','slug')
            ->limit(4)
            ->get();
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        where('tur', 'olum')
            ->orWhere('tur', "duyuru")
            ->select('id', 'title', 'image', 'slug')
            ->limit(4)
            ->get();

        $daily = Content::
        select('id', 'title', 'image', 'slug', 'price')
            ->limit(3)
            ->inRandomOrder()
            ->get();

        $last = Content::
        select('id', 'title', 'image', 'slug', 'price')
            ->limit(3)
            ->orderbyDesc('id')
            ->get();

        $duyurular = Content::
        select('id', 'title', 'image', 'slug', 'price')
            ->where('tur', 'duyuru')
            ->limit(6)
            ->orderbyDesc('id')
            ->get();
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

        #print_r($slider);
        #exit();

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        /*
        $users = DB::table('users')
                ->where('votes', '=', 100)
                ->where('age', '>', 35)
                ->get();
        */

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        $data= [
            'setting' => $setting,
             'slider' => $slider,
              'page' => 'home',
        ];
        return view('home.index',$data);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'duyurular' => $duyurular,
            'last' => $last,
            'daily' => $daily,
            'page' => 'home',
        ];
        return view('home.index', $data);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    }

    public static function categorylist()
    {
        return Menu::where('parent_id', '=', 0)->with('children')->get();
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public static function getsetting()
    {
        return Setting::first();
    }


    //sayfalar başlangıç
    public function aboutus()
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        return view('home.about');
    }
    public function contact()
    {
        return view('home.about');
    }
    public function references()
    {
        return view('home.about');
    }
    public function faq()
    {
        return view('home.about');
    }
    //sayfalar bitiş
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public function faq()
    {
        //return view('home.about');
    }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    //sayfalar bitiş
>>>>>>> Stashed changes
=======

    //sayfalar bitiş

=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    //sayfalar bitiş


<<<<<<< Updated upstream

    public function content($id,$slug)
    {
      $data=Content::find($id);
      print_r($data);
      exit();
    }

<<<<<<< Updated upstream


<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
    public function categorycontents($id,$slug)
    {
        $datalist=Content::where('menu_id',$id)->get();
        $data=Menu::find($id);
        #print_r($data);
        #exit();
        return view('home.menu_contents', ['datalist' => $datalist,'data' => $data]);
    }



>>>>>>> Stashed changes
=======
    public function content($id, $slug)
    {
        $data = Content::find($id);
        print_r($data);
        exit();
=======
=======
>>>>>>> Stashed changes

    //sayfalar bitiş


    public function content($id, $slug)
    {
        $data = Content::find($id);
        $datalist = Image::where('content_id', $id)->get();
<<<<<<< Updated upstream
        //print_r($data);
        //exit();
        return view('home.content_detail ', ['datalist' => $datalist, 'data' => $data]);
>>>>>>> Stashed changes
=======
        $reviews = Review::where('content_id',$id)->get();
        //print_r($data);
        //exit();
        return view('home.content_detail ', ['datalist' => $datalist, 'data' => $data, 'reviews' => $reviews]);
>>>>>>> Stashed changes
    }

    public function addtocart($id)
    {

        echo "Add to Cart";
        /*
        $data = Content::find($id);
        print_r($data);
        exit();*/
    }

    public function categorycontents($id, $slug)
    {
        $datalist = Content::where('menu_id', $id)->get();
        $data = Menu::find($id);
        #print_r($data);
        #exit();
        return view('home.menu_contents', ['datalist' => $datalist, 'data' => $data]);
    }

<<<<<<< Updated upstream

<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
    public function getcontent(Request $request)
    {
        //$data = Content::where('title',$request->input('search'))->first();
        //return redirect()->route('content',['id'=>$data->id,'slug'=>$data->slug]);

        $search=$request->input('search');

        $count = Content::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data = Content::where('title','like','%'.$search.'%')->first();
            return redirect()->route('content',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('contentlist',['search'=>$search]);
        }

    }

    public function contentlist($search)
    {

        $datalist = Content::where('title','like','%'.$search.'%')->get();
        return view('home.search_contents', ['search' => $search, 'datalist' => $datalist]);
    }

>>>>>>> Stashed changes
    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->messages = $request->input('messages');
        $data->save();

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir Teşekkür ederiz:)');
    }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
        return redirect()->route('contact')->with('success', 'Mesajınız iletilmiştir Teşekkür ederiz:)');
    }
>>>>>>> Stashed changes
=======
        return redirect()->route('contact')->with('success', 'Mesajınız iletilmiştir Teşekkür ederiz:)');
    }
>>>>>>> Stashed changes
=======
        return redirect()->route('contact')->with('success', 'Mesajınız iletilmiştir Teşekkür ederiz:)');
    }
>>>>>>> Stashed changes

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
