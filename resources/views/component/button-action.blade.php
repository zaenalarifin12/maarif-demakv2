{{-- 
    params
    - mata pelajaran
    - kategori
    - item    
--}}

@if ($mata_pelajaran == null)
    <td>
        <a href="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>
        <a href="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
        <form action="{{ url("/admin/unit/0/category/$category->id/eprint/$item->id") }}" method="post" class="d-inline">
            <button class="btn btn-sm btn-danger">Hapus</button>
            @csrf
            @method("DELETE")
        </form>
    </td>

@else
    <td>
    @if (Auth::user()->checkIsAdmin() || Auth::user()->checkIsAdminMgmp() || Auth::user()->checkIsAnggotaMgmp())
        
        <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>    
        @if (Auth::user()->checkIsAdmin() || Auth::user()->checkIsAdminMgmp() )
            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
            <form action="{{ url("/admin/forum-mgmp/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" method="post" class="d-inline">
                <button class="btn btn-sm btn-danger">Hapus</button>
                @csrf
                @method("DELETE")
            </form>   
        @endif
        
    @elseif (Auth::user()->checkIsAdmin() || Auth::user()->checkIsAdminKkm())
        <a href="{{ url("/admin/forum-kkm/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" class="btn btn-sm btn-secondary">Detail</a>    
        <a href="{{ url("/admin/forum-kkm/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id/edit") }}" class="btn btn-sm btn-info">Edit</a>
        <form action="{{ url("/admin/forum-kkm/mata-pelajaran/$mata_pelajaran->id/category/1/eprint/$item->id") }}" method="post" class="d-inline">
            <button class="btn btn-sm btn-danger">Hapus</button>
            @csrf
            @method("DELETE")
        </form>
    @endif
    
    </td>
@endif