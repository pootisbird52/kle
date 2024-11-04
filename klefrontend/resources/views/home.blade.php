<x-my-layout>

    @if (session('token'))
    <div class="mb-[10vh]">
        @foreach ($product as $productnum)
        <x-card-wide :$product :$productnum></x-card-wide>
        @endforeach
        
    </div>
    <div>
    </div>
    
    @endif
</x-my-layout>


