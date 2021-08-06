@extends('layouts.app')
@section('content')
<div class="bg-white p-5  w-full">    
    
    <div class="flex ">
        <div class="w-1/2">
            <span class="text-2xl font-bold mb-5 float-left">Tabel Jemaat</span>
        </div>
        <div class="w-1/2">
            <a href="{{route('jemaat.create')}}" class="p-3  text-white bg-green-400 font-bold float-right flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                Tambah
            </a>
            
        </div>
    </div>
    
    <x-table>
        <x-slot name="header">            
            <th class="border px-6 py-4 w-1/12">Id</th>
            <th class="border px-6 py-4 w-2/12">Nama</th>
            <th class="border px-6 py-4 w-1/12">Golongan Darah</th>
            <th class="border px-6 py-4 w-2/12">Kategori</th>
            <th class="border px-6 py-4 w-1/2">Alamat</th>
            <th class="border px-6 py-4 w-1/2">Aksi</th>
        </x-slot>
     
        @foreach($jemaats as $jemaat)
            <tr class="text-left ">
                <td class="border px-6 py-4 text-center">{{$jemaat->id}}</td>
                <x-table-column>{{$jemaat->nama}}</x-table-column>
                <x-table-column>{{$jemaat->golongan_darah}}</x-table-column>
                <x-table-column>{{$jemaat->kategori}}</x-table-column>
                <x-table-column>{{$jemaat->alamat}}</x-table-column>
                <x-table-column>
                    <a href="{{route('jemaat.show',$jemaat->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>                       
                    </a>
                    
                    <a href="{{route('jemaat.edit',$jemaat->id)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>

                    <form action="{{route('jemaat.destroy',$jemaat->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">                            
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </form>
                </x-table-column>
            </tr>
        @endforeach
    </x-table>    
</div>
@endsection
