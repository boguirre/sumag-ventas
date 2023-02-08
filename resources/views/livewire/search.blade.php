<div class="form-control border-white dropdown">

        
        <input data-bs-toggle="dropdown" type="text" placeholder="🔍 Buscar producto" wire:model="search">            

        @if ($search)
            <ul class="list-group border-white dropdown-menu mt-auto" >
                @forelse ($this->results as $result)
                    <li class="list-group-item border-white list-group-item-action dropdown-item">
                        <a href="{{route('web.ver_articulo', $result)}}"><img src="" alt=""> {{Str::Upper($result->nombre)}}</a>
                    </li>
                @empty
                    <li class="list-group-item border-white border-r-4 list-group-item-action dropdown-item">
                        No hay ninguna coincidencia 😥
                    </li>
                @endforelse
            </ul>
            
        @endif


</div>