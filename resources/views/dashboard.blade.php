@extends('layouts.app')
@section('content')
    <div class="flex">
        <div class="w-full flex justify-between"> 
            <div class="bg-white rounded p-4 w-3/12 justify-between">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                    <span class="text-xl pt-2 pl-3">{{$jumlahJemaat}}</span>
                </div>
                <span class="font-bold text-lg">Total Jemaat</span>
            </div>
            <div class="bg-white rounded p-4 w-3/12 justify-between">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                      </svg>
                      <span class="text-xl pt-2 pl-3">{{$totalKeluarga}}</span>
                </div>
                <span class="font-bold text-lg">Total Keluarga</span>
            </div>
            <div class="bg-white rounded p-4 w-5/12 justify-between">
                <div class="flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                    <span class="text-xl pt-2 pl-3">Rp{{$totalKas}}</span>
                </div>
                <span class="font-bold text-lg">Total Kas Gereja</span>
            </div>
        </div>
    </div>

@endsection
