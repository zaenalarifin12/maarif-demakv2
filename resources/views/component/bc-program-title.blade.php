
@if ($category->id == 1) 

<li class="breadcrumb-item">
    <a href="{{ url("admin/forum-mgmp/mata-pelajaran/". $mata_pelajaran->id . "/category/" . $category->id . "/" . $name) }}">
    {{ ucfirst($name) }}
    </a>
</li>        
    
@elseif($category->id == 3 || $category->id == 4 || $category->id == 6) 
    
    <li class="breadcrumb-item">
        <a href="{{ url("admin/unit/0/category/" . $category->id . "/" . $name) }}">
        {{ ucfirst($name) }}
        </a>
    </li>  
@elseif($category->id == 5)
    {{-- <li class="breadcrumb-item"><a href="{{ url("admin/unit/0/category/" . $category->id ."/digital") }}">Digital</a></li> --}}
@endif
