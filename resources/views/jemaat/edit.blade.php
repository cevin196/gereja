@extends('layouts.app')
@section('content')
<div class="w-full bg-white p-5">
        <p class="text-2xl font-bold mb-5 ">Edit Jemaat</p>        
        <form action="{{route('jemaat.update',$jemaat->id)}}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="flex  justify-between">
                <div class="w-4/12" >
                    <label for="nama">Nama:</label>            
                    <x-input type="text" name="nama" id="nama"  :value="old('nama')" required autofocus  placeholder="Contoh: Cevin..." value="{{$jemaat->nama}}" /> 
                </div>
    
                <div class="w-2/12">
                    <label for="golongan_darah">Golongan Darah:</label>            
                    <x-input type="text" name="golongan_darah" id="golongan_darah"  :value="old('golongan_darah')" required autofocus placeholder="Contoh: O" value="{{$jemaat->golongan_darah}}" /> 
                </div>
                
                <div class="w-3/12" >
                    <label for="kategori">Kategori:</label>            
                    <x-select name="kategori" id="kategori">
                        <option value="Jemaat Tetap" {{($jemaat->kategori=='Jemaat Tetap'?'selected':'')}}>Jemaat Tetap</option>
                        <option value="Jemaat Sementara" {{($jemaat->kategori=='Jemaat Sementara'?'selected':'')}}>Jemaat Sementara</option>
                    </x-select>
                </div>
    
                <div class="w-2/12" >
                    <label for="tanggal_lahir">Tanggal Lahir:</label>            
                    <x-input type="date" name="tanggal_lahir" id="tanggal_lahir"  required autofocus value="{{$jemaat->tanggal_lahir}}"/> 
                </div>    
            </div>            
            <div class="w-full">
                <label for="alamat">Alamat:</label>            
                <textarea name="alamat" id="alamat" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{$jemaat->alamat}}</textarea>
            </div>

            <div class="flex justify-center space-x-3 mt-5">
                <button type="submit" class="bg-green-500 p-3 text-white border rounded w-1/12 text-center">Update</button>
                <a href="{{route('jemaat.index')}}" class="bg-yellow-400 p-3 text-white border rounded w-1/12 text-center">Batal</a>
            </div>
        </form>
    </div>
@endsection