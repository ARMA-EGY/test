<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\WebRequest;
use App\Http\Requests\SocialRequest;
use App\Http\Requests\UserPhoneRequest;
use App\Http\Requests\UserCompanyRequest;


use App\User;
use App\Category;
use App\Template;
use App\Webrequest1;
use App\Socialrequest1;
use LaravelLocalization;

class CoreController extends Controller
{
    //
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories         = Category::select('id', 'url','name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();

        return view('welcome', [
            'categories'        => $categories,
            ]);
    }


    public function category($url)
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();

        $id                 = Category::select('id','url')->where('url', $url)->first();


        if (empty($id)) 
        {
            return back();
        }

        $id2 = $id->id;

        $templates      = Template::orderBy('id','asc')->where('category_id', $id2)->get();

        $category       = Category::select('id', 'url', 'description', 'name_en', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )->find($id2);

        return view('category', [
            'categories'        => $categories,
            'category1' => $category,
            'templates' => $templates
        ]);
       


    }


    public function packages($service)
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();

        $services = array("website", "e-commerce", "social-media-management", "designs", "printing");

        if (! in_array($service, $services ))
        {
            return back();
        }

        return view('packages', [
            'categories'        => $categories,
            'service'           => $service
        ]);
       


    }


    public function product($productName)
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();

        $products           = array("books", "notebook", "folder", "letterhead", "letters", "card", "bills", "flyers", "brochures", "menu", "megamenu", "sticker", "rollup");

        if (! in_array($productName, $products ))
        {
            return back();
        }

        $product = DB::table('products')
                                    ->select('id', 'description_'.LaravelLocalization::getCurrentLocale(). ' as description', 'name_en', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )
                                    ->where('name_en', $productName)->first();

        return view('product', [
            'categories'        => $categories,
            'product1'         => $product,
            'productName'       => $productName
        ]);

    }


    public function preview($id)
    {

        Template::findOrFail($id);

        $template      = Template::find($id);
        $similars      = Template::where('category_id', $template->category_id)->get();

        return view('preview', [
            'template' => $template,
            'similars' => $similars,
        ]);

    }


    public function webRequest(WebRequest $request)
    {
        $webrequest =  Webrequest1::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'company' => $request->company,
            'want_to' => $request->want_to,
            'describe' => $request->describe,
            'services' => $request->services,
            'three_websites' => $request->three_websites,
            'guides' => $request->guides,
            'budget' => $request->budget,
            'ideal_date' => $request->ideal_date,
            'notes' => $request->notes,
        ]);

        if($webrequest)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }


    public function socialRequest(SocialRequest $request)
    {
        $socialrequest =  Socialrequest1::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'company' => $request->company,
            'plan' => $request->plan,
            'platform_num' => $request->platform_num,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'paid_posts' => $request->paid_posts,
            'normal_posts' => $request->normal_posts,
            'design' => $request->design,
            'content' => $request->content,
            'moderating' => $request->moderating,
            'duration' => $request->duration,
            'notes' => $request->notes,
        ]);

        if($socialrequest)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }


    public function userprofile()
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();


        return view('profile', [
            'categories'        => $categories,
        ]);

    }

    public function userPhone(UserPhoneRequest $request)
    {
        
        $user =  User::where('remember_token', $request->token)->update([
            'phone' => $request->phone,
            ]);

        if($user)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }

    public function userCompany(UserCompanyRequest $request)
    {
        
        $user =  User::where('remember_token', $request->token)->update([
            'company' => $request->company,
            ]);

        if($user)
        {
            return response()->json([
                'status' => 'true',
                'msg' => 'success'
            ]) ;
        }
        else
        {
            return response()->json([
                'status' => 'false',
                'msg' => 'error'
            ]) ;
        }

    }


    public function checkout()
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();


        return view('checkout', [
            'categories'        => $categories,
        ]);

    }


    public function checkout2()
    {

        $categories         = Category::select('id', 'url', 'name_'.LaravelLocalization::getCurrentLocale(). ' as name' )-> get();


        return view('checkout2', [
            'categories'        => $categories,
        ]);

    }

}
