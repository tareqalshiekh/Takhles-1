<?php

namespace App\Http\Controllers\English;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class Addbanner extends Controller
{
    public function banner_view()
    {

        $Banner_data  = Banner::all();

        return view('all_banner', ['Banner_data' => $Banner_data]);
    }

    public function add_banner(Request $request)
    {


        $file = $request->file('pro-image');
        $OriginalName = $file->getClientOriginalName();
        $products_img = date('ymdhms') . '' . $OriginalName;
        $destinationPath = 'assets/images/banner';
        $file->move($destinationPath, $products_img);

        Banner::Create(
            array(
                'banner_img' => $products_img
            )
        );
        return redirect()->back();
    }
    
    public function banner()
    {
        return view('banner');
    }

    
}
