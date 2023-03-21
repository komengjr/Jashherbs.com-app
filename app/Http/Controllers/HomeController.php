<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postingan_barang;
use Illuminate\Support\Str;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $databarang = DB::table('tbl_item')->get();
        return view('home',[
            'databarang'=>$databarang
        ]);
    }
    public function tambahbarang()
    {  
        $cat = DB::table('tbl_cat')->get();
        return view('admin.tambahpostinganbarang',['cat'=>$cat]);
    }
    public function posttambahbarang(Request $request)
    {
        $kd_item = "item-".Str::random(10);
        DB::table('tbl_item')->insert(
            [
                'kd_item' => $kd_item,
                'kd_cat' => $request->input('kategori_barang'),
                'nama_item' => $request->input('nama_barang'),
                'harga_item' => $request->input('harga_barang'),
                'deskripsi_item' => $request->input('deskripsi_barang'),
                'file_barang' => $request->file('gambar_barang')->storeAs('data_file/fileuploaditem/'.$request->input('nama_barang'),Str::random(10).'postbarang.jpg'),
                'status_item' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->back();
    }
    public function lihatdata($id)
    {
        $cekdata = DB::table('tbl_item')->where('kd_item',$id)->get();
        
        return view('admin.postingbarang.showdata',['data'=>$cekdata]);
    }
    public function editdatabarang($id)
    {

        $cekdata = DB::table('tbl_item')->where('kd_item',$id)->get();
        
        return view('admin.postingbarang.editdata',['data'=>$cekdata]);
    }
}
