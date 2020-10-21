@if ($categoryProgramKegiatan->id == 1)
    <li class="breadcrumb-item"><a href="{{ url("admin/forum-mgmp/") }}" class="text-capitalize">{{ $categoryProgramKegiatan->nama }}</a></li>        
@elseif($categoryProgramKegiatan->id == 2)
    <li class="breadcrumb-item"><a href="{{ url("admin/unit/") }}">{{ $categoryProgramKegiatan->nama }}</a></li>        
@elseif($categoryProgramKegiatan->id == 3)
    <li class="breadcrumb-item"><a href="{{ url("admin/unit/") }}">Unit</a></li>     
    <li class="breadcrumb-item active" aria-current="page">{{ $categoryProgramKegiatan->nama }}</li>
@elseif($categoryProgramKegiatan->id == 4)
    <li class="breadcrumb-item"><a href="{{ url("admin/unit/") }}">Unit</a></li>     
    <li class="breadcrumb-item active" aria-current="page">{{ $categoryProgramKegiatan->nama }}</li>

@elseif ($categoryProgramKegiatan->id == 7)
    <li class="breadcrumb-item"><a href="{{ url("admin/forum-kkm/") }}" class="text-capitalize">{{ $categoryProgramKegiatan->nama }}</a></li>        
@endif
