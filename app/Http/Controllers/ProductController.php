<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\NotebookRequest;
use App\Http\Requests\FolderRequest;
use App\Http\Requests\CardRequest;
use App\Http\Requests\LetterRequest;
use App\Http\Requests\FlyerRequest;
use App\Http\Requests\BrochureRequest;
use App\Http\Requests\StickerRequest;
use App\Http\Requests\RollupRequest;

use LaravelLocalization;

class ProductController extends Controller
{
    

    public function notebook(NotebookRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->colors == 'white'){$colors = 'White Papers';}
            if($request->colors == 'blackandwhite'){$colors = 'Black & White Printing';}
            if($request->colors == 'colors'){$colors = 'Colors Printing';}

            if($request->no_sheets == '50'){$no_sheets = '50 Papers';}
            if($request->no_sheets == '75'){$no_sheets = '75 Papers';}
            if($request->no_sheets == '100'){$no_sheets = '100 Papers';}

            if($request->faces == '1'){$print_faces = 'One Face';}
            if($request->faces == '2'){$print_faces = 'Two Faces';}

            $product = 'Notebook';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->colors == 'white'){$colors = 'ورق ابيض';}
            if($request->colors == 'blackandwhite'){$colors = 'طباعة ابيض واسود';}
            if($request->colors == 'colors'){$colors = 'طباعة الوان';}

            if($request->no_sheets == '50'){$no_sheets = '50 ورقة';}
            if($request->no_sheets == '75'){$no_sheets = '75 ورقة';}
            if($request->no_sheets == '100'){$no_sheets = '100 ورقة';}

            if($request->faces == '1'){$print_faces = 'وجه واحد';}
            if($request->faces == '2'){$print_faces = 'وجهين';}

            $product = 'نوت بوك';
        }



        if($request->colors == 'white')
        {
            $product_table = DB::table('notebook')
                                    ->where('size', $request->size)
                                    ->where('no_sheets', $request->no_sheets)
                                    ->where('colors', $request->colors)
                                    ->where('print_faces', 0)->first();

            
            $desc = '<li><b>'.$product.'</b></li><li>- '.$request->size.'</li><li>- '.$no_sheets.'</li><li>- '.$colors.'</li>';
        }
        else
        {
            $product_table = DB::table('notebook')
                                    ->where('size', $request->size)
                                    ->where('no_sheets', $request->no_sheets)
                                    ->where('colors', $request->colors)
                                    ->where('print_faces', $request->faces)->first();

            $desc = '<li><b>'.$product.'</b></li><li>- '.$request->size.'</li><li>- '.$no_sheets.'</li><li>- '.$colors.'</li><li>- '.$print_faces.'</li>';
        }

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }
    

    public function folder(FolderRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->cellophane == 'without'){$cellophane = 'Without Cellophane';}
            if($request->cellophane == 'glossy'){$cellophane = 'Glossy Cellophane';}
            if($request->cellophane == 'rubber'){$cellophane = 'Rubber Cellophane';}

            if($request->pocket == 'right'){$pocket = 'Pocket Place: Right';}
            if($request->pocket == 'left'){$pocket = 'Pocket Place: Left';}

            if($request->faces == '1'){$print_faces = 'One Face';}
            if($request->faces == '2'){$print_faces = 'Two Faces';}

            $product = 'Folder';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->cellophane == 'without'){$cellophane = 'بدون سلوفان';}
            if($request->cellophane == 'glossy'){$cellophane = 'سلوفان لامع';}
            if($request->cellophane == 'rubber'){$cellophane = 'سلوفان مط';}

            if($request->pocket == 'right'){$pocket = 'مكان الجيب: يمين';}
            if($request->pocket == 'left'){$pocket = 'مكان الجيب: شمال';}

            if($request->faces == '1'){$print_faces = 'وجه واحد';}
            if($request->faces == '2'){$print_faces = 'وجهين';}

            $product = 'فولدر';
        }



            $product_table = DB::table('folder')
                                    ->where('print_faces', $request->faces)->first();

            $desc = '<li><b>'.$product.'</b></li><li>- '.$print_faces.'</li><li>- '.$cellophane.'</li><li>- '.$pocket.'</li>';
       

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }


    public function card(CardRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->material == 'crochet'){$material = 'Glossy Crochet (350 gm)';}
            if($request->material == 'fabriano'){$material = 'Fabriano';}

            if($request->kind == 'normal'){$kind = 'Normal Card';}
            if($request->kind == 'tucked'){$kind = 'Tucked Card';}

            if($request->faces == '1'){$print_faces = 'One Face';}
            if($request->faces == '2'){$print_faces = 'Two Faces';}

            if($request->cut == '0'){$cut = 'Normal Cut';}
            if($request->cut == '1'){$cut = 'Cut Corner';}

            $product = 'Business Card';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->material == 'crochet'){$material = 'كوشيه لامع (٣٥٠ جرام)';}
            if($request->material == 'fabriano'){$material = 'فبريانو';}

            if($request->kind == 'normal'){$kind = 'كارت عادي';}
            if($request->kind == 'tucked'){$kind = 'كارت مطوي';}

            if($request->faces == '1'){$print_faces = 'وجه واحد';}
            if($request->faces == '2'){$print_faces = 'وجهين';}

            if($request->cut == '0'){$cut = 'قص عادي';}
            if($request->cut == '1'){$cut = 'قص الزاوية';}

            $product = 'كارد بيزنيس';
        }



        if($request->kind == 'tucked')
        {
            $product_table = DB::table('card')
                                    ->where('material', $request->material)
                                    ->where('kind', $request->kind)->first();

            
            $desc = '<li><b>'.$product.'</b></li><li>- '.$material.'</li><li>- '.$kind.'</li>';
        }
        else
        {
            $product_table = DB::table('card')
                                    ->where('material', $request->material)
                                    ->where('kind', $request->kind)
                                    ->where('print_faces', $request->faces)
                                    ->where('cut', $request->cut)->first();

            $desc = '<li><b>'.$product.'</b></li><li>- '.$material.'</li><li>- '.$kind.'</li><li>- '.$print_faces.'</li><li>- '.$cut.'</li>';
        }

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }


    public function letter(LetterRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {

            if($request->kind == 'us_letter'){$kind = 'US Envelope';}

            $product = 'Envelopes';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {

            if($request->kind == 'us_letter'){$kind = 'ظرف أمريكي';}

            $product = 'أظرف';
        }


            $product_table = DB::table('letter')
                                    ->where('kind', $request->kind)->first();

            
            $desc = '<li><b>'.$product.'</b></li><li>- '.$kind.'</li>';
      

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }


    public function flyer(FlyerRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->weight == '150'){$weight = '150 gm';}
            if($request->weight == '200'){$weight = '200 gm';}
            if($request->weight == '300'){$weight = '300 gm';}

            if($request->faces == '1'){$print_faces = 'One Face';}
            if($request->faces == '2'){$print_faces = 'Two Faces';}

            $product = 'Flayers';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->weight == '150'){$weight = '١٥٠ جرام';}
            if($request->weight == '200'){$weight = '٢٠٠ جرام';}
            if($request->weight == '300'){$weight = '٣٠٠ جرام';}

            if($request->faces == '1'){$print_faces = 'وجه واحد';}
            if($request->faces == '2'){$print_faces = 'وجهين';}

            $product = 'فلاير';
        }



            $product_table = DB::table('flyer')
                                    ->where('size', $request->size)
                                    ->where('weight', $request->weight)
                                    ->where('print_faces', $request->faces)->first();

            $desc = '<li><b>'.$product.'</b></li><li>- '.$request->size.'</li><li>- '.$weight.'</li><li>- '.$print_faces.'</li>';
       

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }


    public function brochure(BrochureRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->weight == '150'){$weight = '150 gm';}
            if($request->weight == '200'){$weight = '200 gm';}
            if($request->weight == '300'){$weight = '300 gm';}

            if($request->folding == '0'){$folding = 'Without Folding';}
            if($request->folding == '2'){$folding = 'Bi Fold';}
            if($request->folding == '3'){$folding = 'Tri Fold';}

        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->weight == '150'){$weight = '١٥٠ جرام';}
            if($request->weight == '200'){$weight = '٢٠٠ جرام';}
            if($request->weight == '300'){$weight = '٣٠٠ جرام';}

            if($request->folding == '0'){$folding = 'بدون انثناء';}
            if($request->folding == '2'){$folding = 'ثنائي الانثناء';}
            if($request->folding == '3'){$folding = 'ثلاثي الانثناء';}

        }

        $product = $request->name;

        if($request->folding == 0)
        {
            $product_table = DB::table('brochure')
                                ->where('size', $request->size)
                                ->where('weight', $request->weight)
                                ->where('folding', 0)->first();

            
        }
        else
        {
            $product_table = DB::table('brochure')
                                ->where('size', $request->size)
                                ->where('weight', $request->weight)
                                ->where('folding', 1)->first();

        }

        $desc = '<li><b>'.$product.'</b></li><li>- '.$request->size.'</li><li>- '.$weight.'</li><li>- '.$folding.'</li>';
       

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }

    public function sticker(StickerRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {


            $product = 'Sticker';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {


            $product = 'استيكر';
        }


            $product_table = DB::table('sticker')
                                    ->where('size', $request->size)->first();

            
            $desc = '<li><b>'.$product.'</b></li><li>- '.$request->size.'</li>';
      

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }


    public function rollup(RollupRequest $request)
    {

        if(LaravelLocalization::getCurrentLocale() == 'en')
        {
            if($request->size == '85'){$size = '85 cm';}
            if($request->size == '100'){$size = '100 cm';}
            if($request->size == '120'){$size = '120 cm';}
            if($request->size == '150'){$size = '150 cm';}

            if($request->material == 'banner_indoor'){$material = 'Banner High Quality (Indoor)';}
            if($request->material == 'cotid'){$material = 'Cotid Banner';}
            if($request->material == 'banner_440'){$material = 'Banner (440 gm)';}
            if($request->material == 'mash'){$material = 'Mash';}
            if($request->material == 'gray_pack'){$material = 'Rubber Gray Pack';}

            $product = 'Roll Up';
        }
        elseif(LaravelLocalization::getCurrentLocale() == 'ar')
        {
            if($request->size == '85'){$size = '٨٥ سم';}
            if($request->size == '100'){$size = '١٠٠ سم';}
            if($request->size == '120'){$size = '١٢٠ سم';}
            if($request->size == '150'){$size = '١٥٠ سم';}

            if($request->material == 'banner_indoor'){$material = 'بنر عالى الجودة ( أن دور )';}
            if($request->material == 'cotid'){$material = 'بنر كوتيد';}
            if($request->material == 'banner_440'){$material = 'بنر ( 440 جرام )';}
            if($request->material == 'mash'){$material = 'ماش';}
            if($request->material == 'gray_pack'){$material = 'مط جراى باك';}

            $product = 'رول اب';
        }

    
        $product_table = DB::table('rollup')
                            ->where('size', $request->size)
                            ->where('material', $request->material)->first();


        $desc = '<li><b>'.$product.'</b></li><li>- '.$material.'</li><li>- '.$size.'</li>';
       

        return response()->json([
            'price' => $product_table->price,
            'quantity' => $request->quantity,
            'desc' => $desc,
        ]) ;

    }

}
