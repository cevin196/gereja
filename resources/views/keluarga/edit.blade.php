@extends('layouts.app')
@section('content')
<div class="w-full bg-white p-5">
        <p class="text-2xl font-bold mb-5 ">Edit Keluarga</p>        
        <form action="{{route('keluarga.update',$keluarga->id)}}" method="POST" id="myForm">
            @csrf
            @method('PUT')
            
            <div class="flex  justify-between">
                <div class="w-4/12" >
                    <label for="nama">Nama:</label>            
                    <x-input type="text" name="nama" id="nama"  :value="old('nama')" required autofocus  placeholder="Contoh: Cevin..." value="{{$keluarga->nama}}" /> 
                </div>      
            </div>            
            <div class="w-full">
                <label for="alamat">Alamat:</label>            
                <textarea name="alamat" id="alamat" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$keluarga->alamat}}</textarea>
            </div>

            <p class="font-bold mt-3">Anggota: </p>                
        </form>
        @livewire('anggota-keluarga',['keluargaId'=>$keluarga->id])
        <div class="flex justify-center space-x-3 mt-5">
            <button class="bg-green-500 p-3 text-white border rounded w-1/12 text-center" onclick="event.preventDefault();
           document.getElementById('myForm').submit();">Update</button>
            <a href="{{route('keluarga.index')}}" class="bg-yellow-400 p-3 text-white border rounded w-1/12 text-center">Batal</a>
        </div>
    </div>
@endsection