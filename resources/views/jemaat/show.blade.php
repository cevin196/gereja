@extends('layouts.app')
@section('content')
    <div class="w-full bg-white p-5">
        <span class="text-2xl font-bold mb-5">Tabel Jemaat</span>

        <div class="flex flex-col w-full pt-5">
            <div class="flex flex-row ">
                <span class="w-1/4">Nama</span>
                <div class="w-1/4">
                    : {{$jemaat->nama}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Golongan Darah</span>
                <div class="w-3/4">
                    : {{$jemaat->golongan_darah}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Tanggal Lahir</span>
                <div class="w-3/4">
                    : {{$jemaat->tanggal_lahir}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Kategori Jemaat</span>
                <div class="w-3/4">
                    : {{$jemaat->kategori}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Alamat</span>
                <div class="w-3/4">
                    : {{$jemaat->alamat}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Keluarga</span>
                <div class="w-3/4">
                    : {{$jemaat->keluargas->nama}}
                </div>
            </div>

            <a href="{{route('jemaat.index')}}" class="bg-yellow-400 p-3 text-white border rounded text-center mt-10 w-1/12 mx-auto">Kembali</a>
        </div>
        
        
    </div>
@endsection