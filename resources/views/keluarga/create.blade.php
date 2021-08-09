@extends('layouts.app')
@section('content')
<div class="w-full bg-white p-5">
        <p class="text-2xl font-bold mb-5 ">Tambah Keluarga</p>  
        @if ($errors->any())
            <div class="p-3 bg-red-400 w-1/2 rounded-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif      
        <form action="{{route('keluarga.store')}}" method="post">
            @csrf
            <div class="flex  justify-between">
                <div class="w-4/12" >
                    <label for="nama">Nama:</label>            
                    <x-input type="text" name="nama" id="nama"  :value="old('nama')" required autofocus  placeholder="Contoh: Tamamilang..." /> 
                </div>               
            </div>            
            <div class="w-full">
                <label for="alamat">Alamat:</label>            
                <textarea name="alamat" id="alamat" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="flex justify-center space-x-3 mt-5">
                <button type="submit" class="bg-green-500 p-3 text-white border rounded w-1/12 text-center">Simpan</button>
                <a href="{{route('keluarga.index')}}" class="bg-yellow-400 p-3 text-white border rounded w-1/12 text-center">Batal</a>
            </div>
        </form>
    </div>
@endsection