<?php

namespace App\Http\Controllers;

use App\Catlist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    public function index () 
    {
        $selectlists = Catlist::select('id', 'color', 'features', 'status', 'image', 'good')
                                     ->orderBy('id', 'desc')
                                     ->get();
        foreach ($selectlists as $catInfo) {
            $url = "/";
            $url .=$catInfo['id'];
            $url .=".jpg";
            $catlists[] = array('id'        => $catInfo['id'],
                                'url'       => $url,
                                'color'     => $catInfo['color'],
                                'features'  => $catInfo['features'],
                                'status'    => $catInfo['status'], 
                                'image'     => $catInfo['image'],
                                'good'      => $catInfo['good'] 
            );
        }

        return view('catList', compact('catlists'));
    }

    public function newSort () 
    {
        $selectlists = Catlist::select('id', 'color', 'features', 'status', 'image', 'good')
                                     ->orderBy('id', 'desc')
                                     ->get();

        foreach ($selectlists as $catInfo) {
            $url = "/";
            $url .=$catInfo['id'];
            $url .=".jpg";
            $catlists[] = array('id'        => $catInfo['id'],
                                'url'       => $url,
                                'color'     => $catInfo['color'],
                                'features'  => $catInfo['features'],
                                'status'    => $catInfo['status'], 
                                'image'     => $catInfo['image'],
                                'good'      => $catInfo['good'] 
            );
        }
        return view('catList', compact('catlists'));
    }

    public function popularitySort () 
    {
        $selectlists = Catlist::select('id', 'color', 'features', 'status', 'image', 'good')
                                    ->orderBy('good', 'desc')
                                    ->get();

        foreach ($selectlists as $catInfo) {
            $url = "/";
            $url .=$catInfo['id'];
            $url .=".jpg";
            $catlists[] = array('id'        => $catInfo['id'],
                                'url'       => $url,
                                'color'     => $catInfo['color'],
                                'features'  => $catInfo['features'],
                                'status'    => $catInfo['status'], 
                                'image'     => $catInfo['image'],
                                'good'      => $catInfo['good'] 
            );
        }
        return view('catList', compact('catlists'));
    }

    public function good (Request $request) 
    {

        $catInfo = Catlist::find($request->id);
        $catInfo->good = $catInfo->good + 1;
        $catInfo->save();
                                   
        return redirect('/');
    }

    public function inputRegist () 
    {

                                   
        return view('catRegist');
    }

    public function regist (Request $request) 
    {

        $select_id = Catlist::select('id')
                             ->count();
        $select_id = $select_id + 1;
        $upload_name = $_FILES['imagefile']['name'];

        $up_dir = 'public/';

        $filename = $select_id . ".jpg";

        $filename = $request->file('imagefile')->storeAs($up_dir, "$filename");



        $registData = new Catlist;
        $registData->color  = $request->color;
        $registData->features  = $request->features;
        $registData->status = $request->status;
        $registData->image = $request->image;
        $registData->good = 0;
        $registData->save();
           
        return redirect('/');
    }
}
