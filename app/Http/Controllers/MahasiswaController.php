<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    
    public function index(){
        $mahasiswas=Mahasiswa::latest()->paginate(5);
        return view('akademik.mahasiswa', ['mahasiswas'=>$mahasiswas]);
    }

    public function cekObjek(){
        $mahasiswa=new Mahasiswa();
        dd($mahasiswa);
    }

    public function create()
    {
        return view('akademik.create_mahasiswa');
    }

    public function store(Request $request)
    {
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('akademik.edit_mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama_lengkap;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tgl_lahir = $request->tgl_lahir;
        $mahasiswa->email = $request->email;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->alamat = $request->alamat;

        $mahasiswa->save();

        return redirect('/mahasiswa');
    }

    public function insert()
    {
        $mahasiswa = new Mahasiswa();

        $mahasiswa->nim = '20210298';
        $mahasiswa->nama_lengkap = 'Steve job';
        $mahasiswa->tempat_lahir = 'Solok';
        $mahasiswa->tgl_lahir = '1970-09-05';
        $mahasiswa->email = 'steve@apple.com';
        $mahasiswa->prodi = 'TRPL';
        $mahasiswa->alamat = 'Jl. sutomo no.11 Solok';

        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massAssignment()
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => '202007890',
            'nama_lengkap' => 'M. Yazid',
            'tempat_lahir' => 'Padang',
            'tgl_lahir' => '2011-07-03',
            'email' => 'yazid@gmail.com',
            'prodi' => 'MI',
            'alamat' => 'Padang',
        ]); 

        dump($mahasiswa);

        $mahasiswa1 = Mahasiswa::create([
            'nim' => '202007891',
            'nama_lengkap' => 'M. Rasyid',
            'tempat_lahir' => 'Padang',
            'tgl_lahir' => '2015-05-12',
            'email' => 'rasyid@gmail.com',
            'prodi' => 'TRPL',
            'alamat' => 'Padang',
        ]);

        dump($mahasiswa1);
    }

    // public function update(){
    //     $mahasiswa=Mahasiswa::find(2);

    //     $mahasiswa->tempat_lahir='California';
    //     $mahasiswa->prodi='Tekom';
    //     $mahasiswa->save();
        
    //     dd($mahasiswa);
    // }

    public function updateWhere(){
        $mahasiswa=Mahasiswa::where('nim','202007890')->first();
        $mahasiswa->alamat='Koto lalang kec. lubuk kilangan padang';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massUpdate(){
        $mahasiswa=Mahasiswa::where('nim','202007890')->first()->update([
            'tempat_lahir'=>'Payakumbuh',
            'prodi'=>'Teknik komputer'
        ]);

        dd($mahasiswa);
    }

    public function delete($id){
        Mahasiswa::find($id)->delete();
        return redirect('/mahasiswa');
    }

    public function destroy(){
        $mahasiswa=Mahasiswa::destroy(2);
        dd($mahasiswa);
    }

    public function massDelete(){
        $mahasiswa=Mahasiswa::where('prodi','teknik komputer')->delete();
        dd($mahasiswa);
    }

    public function all(){
        $mahasiswa=Mahasiswa::all();
            foreach ($mahasiswa as $mhs) {
                echo $mhs->id . '<br>';
                echo $mhs->nim . '<br>';
                echo $mhs->nama_lengkap . '<br>';
                echo $mhs->tempat_lahir . '<br>';
                echo $mhs->alamat . '<br>';
                echo '<hr>';
            }
    }

    public function allView(){
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function getWhere(){

        $mahasiswas=Mahasiswa::where('prodi','TRPL')
            ->orderBy('nama_lengkap', 'asc')
            ->get();
            return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function first(){
        $mahasiswas=Mahasiswa::where('prodi','TRPL')->first();
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function find(){
        $mahasiswas=Mahasiswa::find(1);
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function latest(){
        $mahasiswas=Mahasiswa::latest()->get();
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function limit(){
        $mahasiswas=Mahasiswa::latest()->limit(2)->get();
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function skipTake(){
        $mahasiswas=Mahasiswa::orderBy('id')->skip(0)->take(1)->get();
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function softDelete(){
        Mahasiswa::where('id','3')->delete();
        return('Data berhasil dihapus');   
    }

    public function withTrashed(){
        $mahasiswas=Mahasiswa::withTrashed()->get();
        return view('akademik.mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function restore(){
        Mahasiswa::withTrashed()->where('id','3')->restore();
        return 'Berhasil di restore';
    }

    public function forceDelete(){
        Mahasiswa::where('id','3')->forceDelete();
        return('data berhasil di hapus secara permanen');
    }

    public function insertSql()
    {
        $query = DB::insert("INSERT INTO mahasiswas 
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at) 
        VALUES 
        ('2022009009', 'Linus B Torvalds', 'Finlandia', '1971-08-12', 'linus@linux.org', 'TRPL', 'Jl. Sudirman no.10 Padang', now(), now())");
    }

    public function insertPrepared()
    {
        $query = DB::insert("INSERT INTO mahasiswas 
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", 
        [
            '2022009008',
            'Taylor Otwel',
            'Limau Manis',
            '1971-08-12',
            'taylor@laravel.com',
            'MI',
            'Jl. M Hatta no.1 Padang',
            now(),
            now()
        ]);
    }

    public function insertBinding()
    {
        $query = DB::insert("INSERT INTO mahasiswas 
        (nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at) 
        VALUES (:nim, :nama_lengkap, :tempat_lahir, :tgl_lahir, :email, :prodi, :alamat, :created_at, :updated_at)",
        [
            'nim' => '2022009007',
            'nama_lengkap' => 'Bill Gates',
            'tempat_lahir' => 'Payakumbuh',
            'tgl_lahir' => '1963-05-01',
            'email' => 'bill@microsoft.com',
            'prodi' => 'MI',
            'alamat' => 'Jl. M Yamin no.1 Padang',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    // public function update()
    // {
    //     $query = DB::update("UPDATE mahasiswas SET tempat_lahir ='Seattle Washington US' WHERE nama_lengkap= ?", ['Bill Gates']);
    // }

    // public function delete()
    // {
    //     $query = DB::delete("DELETE FROM mahasiswas WHERE nama_lengkap = ?", ['Bill Gates']);
    // }

    public function select()
    {
        $query = DB::select("SELECT * FROM mahasiswas");
        dd($query);
    }

    public function selectTampil()
    {
        $query = DB::select("SELECT * FROM mahasiswas");
            echo ($query[0]->id)."<br>";
            echo ($query[0]->nim)."<br>";
            echo ($query[0]->nama_lengkap)."<br>";
            echo ($query[0]->email)."<br>";
            echo ($query[0]->alamat)."<br>";
    }

    public function selectView()
    {
        $query = DB::select("SELECT * FROM mahasiswas");
        return view('akademik.mahasiswa', ['mahasiswas' => $query]);
    }

    public function selectWhere()
    {
        $query = DB::select("SELECT * FROM mahasiswas WHERE prodi = ? ORDER BY nim ASC", 
        ['MI']);

        return view('akademik.mahasiswa', ['mahasiswas' => $query]);
    }

    public function statement()
    {
        $query = DB::statement("TRUNCATE mahasiswas");
        return "Tabel mahasiswa sudah kosong";
    }



    // public function show(){
    //     $nama='bill gates';
    //     $nim='1234567890';
    //     $total_nilai=[80,90,85,65,34];
    //     return view('akademik.nilai_mahasiswa')->with(compact('nama','nim','total_nilai'));
    // }
}
