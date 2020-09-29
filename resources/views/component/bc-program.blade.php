
@if ($category->id == 1) 
    <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/") }}">Forum MGMP</a></li>
    <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/lembaga/".$mata_pelajaran->lembaga->id."/mata-pelajaran") }}">Lembaga {{ $mata_pelajaran->lembaga->nama }}</a></li>        
    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($mata_pelajaran->nama) }}</li>    
        
@elseif($category->id == 3 || $category->id == 4 || $category->id == 6) 
    <li class="breadcrumb-item"><a href="{{ url("admin/unit/") }}">Unit</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($category->nama) }}</li>    

@elseif($category->id == 5)
    <li class="breadcrumb-item"><a href="{{ url("admin/publikasi/") }}">Publikasi</a></li>
@endif
