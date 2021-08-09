@extends('layouts.app')
@section('content')
    <div class="w-full bg-white p-5">
        <span class="text-2xl font-bold mb-5">Data Keluarga</span>

        <div class="flex flex-col w-full pt-5">
            <div class="flex flex-row ">
                <span class="w-1/4">Nama</span>
                <div class="w-1/4">
                    : {{$keluarga->nama}}
                </div>
            </div>        

            <div class="flex flex-row ">
                <span class="w-1/4">Alamat</span>
                <div class="w-3/4">
                    : {{$keluarga->alamat}}
                </div>
            </div>

            <div class="flex flex-row ">
                <span class="w-1/4">Anggota Keluarga</span>
                <div class="w-3/4 flex">
                    : <ul class="ml-5 list-decimal">
                        @foreach ($keluarga->jemaats as $jemaat)
                            <li>{{$jemaat->nama}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <a href="{{route('keluarga.index')}}" class="bg-yellow-400 p-3 text-white border rounded text-center mt-10 w-1/12 mx-auto">Kembali</a>
        </div>
        
        
    </div>
@endsection