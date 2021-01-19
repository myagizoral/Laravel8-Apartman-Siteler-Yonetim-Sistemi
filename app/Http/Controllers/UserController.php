<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
use App\Models\User;
use Illuminate\Http\Request;
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
use App\Models\Content;
use App\Models\Payments;
>>>>>>> Stashed changes
=======
use App\Models\Content;
use App\Models\Payments;
>>>>>>> Stashed changes
=======
use App\Models\Content;
use App\Models\Payments;
>>>>>>> Stashed changes
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user_profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        //
    }
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
        // Çözüldü çok teşekkürler birşey daha sorabilirmiyim
        //tabi ki şurda yinemi aynı hata acaba bu
    }
>>>>>>> Stashed changes
=======
        // Çözüldü çok teşekkürler birşey daha sorabilirmiyim
        //tabi ki şurda yinemi aynı hata acaba bu
    }
>>>>>>> Stashed changes
=======
        // Çözüldü çok teşekkürler birşey daha sorabilirmiyim
        //tabi ki şurda yinemi aynı hata acaba bu
    }
>>>>>>> Stashed changes


    public function myreviews()
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $datalist = Review::where('user_id','=',Auth::user()->id)->get();
=======
        $datalist = Review::where('user_id', Auth::user()->id)->get();
>>>>>>> Stashed changes
=======
        $datalist = Review::where('user_id', Auth::user()->id)->get();
>>>>>>> Stashed changes
=======
        $datalist = Review::where('user_id', Auth::user()->id)->get();
>>>>>>> Stashed changes
        return view('home.user_reviews',['datalist'=>$datalist]);
    }

    public function destroymyreviews(Review $review,$id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->back()->with('success',' review deleted');
    }

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
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    public function paymentssave(Request $request,$price,$user_id)
    {
        $data = new Payments();
        $data->user_id = $user_id;
        $data->month = $request->input('month');
        $data->creditcard = $request->input('creditcard');
        $data->cvv = $request->input('cvv');
        $data->year = $request->input('year');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        $data->price = $price;
        $data->status = $request->input('status');
        $data->save();
=======
=======
>>>>>>> Stashed changes
        //----
        $data->content_id = $request->input('content_id');
        //---
        $data->price = $price;

        if($request->status != "True")
        {
<<<<<<< Updated upstream
            return redirect()->route('paymentslist')->with('error', 'Ödemeniz Yapılamadı Lütfen Tekrar Deneyiniz');
=======
            return redirect()->route('paymentslist')->with('error', 'Ödemeniz Yapılamadı Lütfen Tekrar Deneyiniz!');
>>>>>>> Stashed changes
        }
        else{
            $data->status = $request->input('status');
            $data->save();
        }


<<<<<<< Updated upstream
>>>>>>> Stashed changes

        return redirect()->route('paymentslist')->with('success', 'Ödemeniz Alınmıştır teşekkür ederiz:)');
=======

        return redirect()->route('paymentslist')->with('success', 'Ödemeniz Alınmıştır Teşekkür Ederiz:)');
>>>>>>> Stashed changes
        //return view('home.payments_list');

    }

    public function paymentslist()
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream

        $databbx = Payments::where('user_id', Auth::user()->id)->get(); // first get find bunları öğrenin tamamdır :) başka peki firt yazdığımızda sadece 1 tanemi getiricek hep
        return view('home.payments_list ', ['databbx'=>$databbx]); //bu ikisini listelemek istersem ne yapmam lazım anladın mı ? tamamdır anladım çok teşekkürler hayatımı kurtardın şuan rica ederim :) iyi geceler iyi gecelew
=======
        $databbx = Payments::where('user_id', Auth::user()->id)->get();
        return view('home.payments_list ', ['databbx'=>$databbx]);
>>>>>>> Stashed changes
=======
        $databbx = Payments::where('user_id', Auth::user()->id)->get();
        return view('home.payments_list ', ['databbx'=>$databbx]);
>>>>>>> Stashed changes
    }

    public function payments($contentid,$userid)
    {
        $data = Content::where('id', $contentid)->first();
        $user = User::where('id', $userid)->first();

        //print($user->name);
        //print($data->price);
        //print($data->title);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
         return view('home.payments_save', ['dataqq'=>$data,'userqq'=>$user]);
    }

>>>>>>> Stashed changes
=======
=======
>>>>>>> Stashed changes
         return view('home.payments_save', ['dataqq'=>$data,'userqq'=>$user,'content_id'=>$contentid]);
    }

    public function paymentslistadmin()
    {
        //echo"deneem admin payments list";

        $data = Payments::all();
        return view('admin.payments_list_admin ', ['data'=>$data]);
    }

<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
}
