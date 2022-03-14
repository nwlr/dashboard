<div class="col-span-2" wire:poll.5000ms>
@if($data ==0)
<div class="bg-lime-600 rounded-lg p-4 py-12">
    <h1 class="text-3xl font-bold text-white uppercase">Sitzungszimmer 1</h1>
    <div class="text-8xl font-bold mt-4 text-white">
        Frei
    </div>
</div>
@else
<div class="bg-red-600 rounded-lg p-4 py-12  ">
    <h1 class="text-3xl font-bold text-white uppercase">Sitzungszimmer 1</h1>
    <div class="text-8xl font-bold mt-4 text-white">
        Besetzt
    </div>
</div>
@endif
</div>