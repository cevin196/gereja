@extends('layouts.app')
@section('content')
<div class="bg-white p-5 text-center w-full">
    <div class="flex">
        <p class="text-2xl font-bold mb-5">
            Tabel Jemaat    
        </p>
        
    </div>

    <x-table>
        <x-slot name="header">            
            <th class="border px-6 py-4 w-1/12">Id</th>
            <th class="border px-6 py-4 w-2/12">Nama</th>
            <th class="border px-6 py-4 w-1/12">Golongan Darah</th>
            <th class="border px-6 py-4 w-2/12">Kategori</th>
            <th class="border px-6 py-4 w-1/2">Alamat</th>                                    
        </x-slot>
     
        @foreach($jemaats as $jemaat)
            <tr class="text-left ">
                <td class="border px-6 py-4 text-center">{{$jemaat->id}}</td>
                <x-table-column>{{$jemaat->nama}}</x-table-column>
                <x-table-column>{{$jemaat->golongan_darah}}</x-table-column>
                <x-table-column>{{$jemaat->kategori}}</x-table-column>
                <x-table-column>{{$jemaat->alamat}}</x-table-column>
            </tr>
        @endforeach
    </x-table>    
</div>
@endsection
