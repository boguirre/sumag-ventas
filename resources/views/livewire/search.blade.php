<form action="">
    <div class="" >
        <input class="" type="text" placeholder="🔍 Buscar producto ..." wire:model="search">  
             
        @if ($search)
            <ul class="list-group dropdown-menu mt-auto" style="border-color:#ffeeee">
                @forelse ($this->results as $result)
                    <li class="list-group-item  list-group-item-action dropdown-item row-auto" style="border-color:#ffffff">
                        <a href="{{route('web.ver_articulo', $result)}}">
                            <div class="row row-cols-2">
                            <div class="col col-auto">
                                <img width="25" height="25" class="" style="border-radius: 10px" src="@if($result->images) {{Storage::url($result->images->url)}}@else {{asset('assets/img/sin-imagen2.png')}} @endif" alt=""> 
                            </div>
                            <div class="col col-auto">
                                {{Str::Upper($result->nombre)}}
                            </div>
                            </div>
                            
                            
                        </a>
                    </li>
                @empty
                    <li class="list-group-item border-white border-r-4 list-group-item-action dropdown-item">
                        No hay ninguna coincidencia 😥
                    </li>
                @endforelse
            </ul>      
        @endif
    </div>     
</form>
