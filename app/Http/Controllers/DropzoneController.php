<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\shipment_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Routing\Redirector;

class DropzoneController extends Controller
{

    function index()
    {
        return view('dropzone');
    }

    function upload(Request $request)
    {

        $image = $request->file('file');

        $imageName = uniqid() . time() . '.' . $image->extension();

        $image->move(public_path('images'), $imageName);

        shipment_image::create([
            'image' => $imageName,
            'shipment_id' => $request->shipment_id,
        ]);

        return response()->json(['success' => $imageName]);
    }

    function note(Request $request)
    {
        Shipment::create([
            'note' => $request->note,
        ]);

        return response()->json(['success' => 'done']);
    }


    function fetch()
    {
        $images = File::allFiles(public_path('images'));
        $output = '<div class="row">';
        foreach ($images as $image) {
            $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="' . asset('images/' . $image->getFilename()) . '" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="' . $image->getFilename() . '">Remove</button>
            </div>
      ';
        }
        $output .= '</div>';
        echo $output;
    }

    function delete(Request $request)
    {
        if ($request->get('name')) {
            File::delete(public_path('images/' . $request->get('name')));
        }
    }
}
