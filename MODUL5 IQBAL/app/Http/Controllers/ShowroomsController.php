<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ShowroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Product::all();
        $count = Product::count();

        return view('showrooms.show', ['title' => 'ShowRooms'], ['show' => $index], ['total'=> 0])->with('count', $count);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = User::all();

        return view('showroomscreate', ['title' => 'Add','status'=>Product::all()], compact('userid'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/assets/images", $name);
            $save = DB::table('showrooms')->insert(['image' => $name,'user_id'=>$request->user_option,'name'=> $request->name,'owner'=>$request->owner, 'brand'=>$request->brand, 'purchase_date' => $request->purchase_date,
            'description'=>$request->description, 'status'=>$request->status]);
            echo "Data berhasil di upload";
            return redirect('/showrooms-car')->with('success', 'Data Berhasil Ditambahkan!!!');
        }else{
            echo "Gagal upload Data";
        }
    }
    public function detail($id)
    {

        $post = Product::findOrFail($id);

        return view('showrooms.detail',['title' => 'Detail'], [
                'post' => $post
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Product::findOrFail($id);
        return view('showrooms.update',['title' => 'Edit'], [
                'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/assets/images", $name);
            $data = array(
                'description'=>$request->description,
                'image'=>$name,
                'status'=>$request->status
            );
            $simpan = DB::table('showrooms')->where('id','=',$request->id)->update($data);
            echo "Data berhasil di upload";
            return redirect('/showrooms-car')->with('success', 'Data Berhasil Diupdate!!!');
        }else{
            echo "Gagal upload Data";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Product::findOrFail($request->id);
        $data->delete();

        return redirect('/showrooms-car')->with('success', 'Data Berhasil dihapus!!!');
    }
}