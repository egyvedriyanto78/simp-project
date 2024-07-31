<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

// use Picqer\Barcode\BarcodeGeneratorHTML;
// use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $data = [
            'title' => 'Perpustakaan | Anggota',
            'members' => $members,
        ];
        return view('admin.memberlist', $data);
    }

    public function show($id)
    {
        $member = Member::find($id);
        $data = [
            'title' => 'Perpustakaan | Detail Anggota',
            'member' => $member,
        ];
        return view('admin.memberdetail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Perpustakaan | Tambah Anggota',
        ];
        return view('admin.memberadd', $data);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'angkatan' => 'required|integer',
            'kelas' => 'required|integer',
            'nomor_absen' => 'required|integer',
            'nama' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // foto wajib diisi
            'jenis_kelamin' => 'required|string',
        ]);

        // Generate UID (6 digits)
        $angkatan = $validatedData['angkatan'];
        $kelas = $validatedData['kelas'];
        $nomor_absen = $validatedData['nomor_absen'];

        $uid = sprintf('%02d%02d%02d', $angkatan, $kelas, $nomor_absen);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets/img/members'), $imageName);
            $foto = 'assets/img/members/' . $imageName;
        }

        $member = new Member([
            'uid' => $uid,
            'nama' => $validatedData['nama'],
            'foto' => $foto,
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
        ]);

        $member->save();

        return redirect('/member/list');
    }

    public function list()
    {
        $members = Member::all();
        $data = [
            'title' => 'Perpustakaan | Daftar Anggota',
            'members' => $members,
        ];
        return view('admin.memberedit', $data);
    }

    public function edit($uid)
    {
        // $member = Member::where('uid', $uid)->firstOrFail();
        $member = Member::find($uid);
        $data = [
            'title' => 'Perpustakaan | Ubah Data Anggota',
            'member' => $member,
        ];
        return view('admin.memberupdate', $data);
    }

    public function update(Request $request, $uid)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $member = Member::find($uid);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($member->foto && file_exists(public_path($member->foto))) {
                unlink(public_path($member->foto));
            }

            // Simpan foto baru
            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('assets/img/members'), $imageName);
            $validatedData['foto'] = 'assets/img/members/' . $imageName;
        } else {
            unset($validatedData['foto']);
        }

        $member->update($validatedData);

        return redirect('/member/table');
    }

    public function destroy($uid)
    {
        // $member = Member::where('uid', $uid)->firstOrFail();
        $member = Member::find($uid);

        // if ($member->foto && Storage::exists($member->foto)) {
        //     Storage::delete($member->foto);
        // }

        // Hapus foto jika ada
        if ($member->foto && file_exists(public_path($member->foto))) {
            unlink(public_path($member->foto));
        }

        $member->delete();

        return redirect('/member/table');
    }
}


