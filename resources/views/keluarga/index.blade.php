@extends('layouts.app')
@section('content')



<div class="bg-white p-5 text-center w-full">
    <p class="text-2xl font-bold mb-5">
        Tabel Keluarga
    </p>
    
    <x-table>
        <x-slot name="header">
            <x-table-column>Id</x-table-column>
            <x-table-column>Nama Keluarga</x-table-column>
            <x-table-column>Anggota</x-table-column>        
        </x-slot>
        @foreach ($keluargas as $keluarga)
            <tr class="text-left">       
                <x-table-column>{{ $loop->index+1 }}</x-table-column>     
                <x-table-column>{{$keluarga->nama}}</x-table-column>
                <x-table-column><ul>
                    @foreach ($keluarga->jemaats as $jemaat)
                        <li>{{$jemaat->nama}}</li>
                    @endforeach
                </ul></x-table-column>         
            </tr>
        @endforeach
    </x-table> 
</div>
@endsection