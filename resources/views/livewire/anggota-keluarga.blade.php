<div class="w-1/2 mx-auto">
    
    @foreach ($keluarga->jemaats as $jemaat)
        <div class="flex p-3 bg-green-300 border rounded mb-1 justify-between">
            <div>{{$jemaat->nama}}</div>
            <button class="hover:text-white" wire:click="updateJemaat({{$jemaat->id}})">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    @endforeach   
    <div class="flex justify-between">
        <select  class="w-full rounded" wire:model='idTambahAnggota' required>
            <option value=""  selected hidden>Pilih Jemaat...</option>
            @foreach ($jemaatKosong->jemaats as $jemaat)
                <option value="{{$jemaat->id}}">{{$jemaat->nama}}</option>
            @endforeach
        </select>
        <button wire:click="tambahKeluarga({{$idTambahAnggota}})" class="bg-green-600 px-2 ml-2 border rounded text-white hover:bg-green-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
        </button>
    </div>
</div>