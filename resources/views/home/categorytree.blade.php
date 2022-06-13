@foreach($children as $subcategory)
    <ul class="dropdown-menu sub-menu-level1">
        @if(count($subcategory->$children))
            <li style=" color: rgb(82, 82, 82); font-family:'Arial Black"> {{$subcategory->title}}</li>
            <ul class="dropdown-menu">
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
        @else
            <li>
                <a href="{{route('categoryprojects',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}
                    ></a></li>
        @endif
    </ul>
@endforeach
