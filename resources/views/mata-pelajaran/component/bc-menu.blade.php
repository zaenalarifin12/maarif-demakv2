@foreach ($mata_pelajaran as $item)
    @if ($loop->first)
        @if ($item->category_forum == 1)
            <li class="breadcrumb-item" aria-current="page"><a href="{{ url("admin/forum-mgmp") }}">FORUM MGMP</a></li>
        @elseif ($item->category_forum == 2)
            <li class="breadcrumb-item" aria-current="page"><a href="{{ url("admin/forum-kkm") }}">FORUM KKM</a></li>
        @endif
    @endif
@endforeach