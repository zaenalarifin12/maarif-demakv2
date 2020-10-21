@if ($item->category_forum == 1)
    <ul>
        <li>
            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/galeri") }}" class="font-weight-bold text-primary">Jajaran Pengurus</a>
        </li>
        <li>
            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/program") }}" class="font-weight-bold text-primary">Program Kegiatan</a>
        </li>

        <li>
            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/event") }}" class="font-weight-bold text-primary">Event</a>
        </li>
        <li>
            <a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/galeri") }}" class="font-weight-bold text-primary">Galeri</a>
        </li>
        
        <li>
            <a href="" class="font-weight-bold text-secondary">Product</a>
            <div class="container">
                <div class="collapse show" id="collapseExample">
                    <ul>
                        <li><a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/eprint") }}" class="font-weight-bold text-primary">E-print</a></li>
                        <li><a href="{{ url("/admin/forum-mgmp/mata-pelajaran/$item->id/category/1/digital") }}" class="font-weight-bold text-primary">Digital</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>    
@elseif($item->category_forum == 2)

    <ul>
        <li>
            <a href="{{ url("/admin/forum-kkm/mata-pelajaran/$item->id/category/7/galeri") }}" class="font-weight-bold text-primary">Jajaran Pengurus</a>
        </li>
        
        <li>
            <a href="{{ url("/admin/forum-kkm/mata-pelajaran/$item->id/category/7/event") }}" class="font-weight-bold text-primary">Event</a>
        </li>
        <li>
            <a href="{{ url("/admin/forum-kkm/mata-pelajaran/$item->id/category/7/galeri") }}" class="font-weight-bold text-primary">Galeri</a>
        </li>
        
    </ul>    
@endif
