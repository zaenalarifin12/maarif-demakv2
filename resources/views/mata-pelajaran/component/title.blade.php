@foreach ($mata_pelajaran as $item)
    @if ($loop->first)
        @if ($item->category_forum == 1)
            FORUM MGMP
        @elseif ($item->category_forum == 2)
            FORUM KKM
        @endif
    @endif
@endforeach