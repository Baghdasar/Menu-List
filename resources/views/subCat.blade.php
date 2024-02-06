{{-- <ul>
    @foreach ( $mainCat->getChild as $subCat)
         <li>{{$subCat->name}}</li>
         @if (isset($subCat->getChild) && $subCat->getChild != null)
            @include('subCat',['mainCat'=>$subCat])
         @endif
    @endforeach
</ul> --}}
@php
    $title_prefix =$title_prefix . '-';
@endphp

    @foreach ( $mainCat->getChild as $subCat)
         <option value="{{$subCat->id}}">{{$title_prefix. $subCat->name .$title_prefix}}</option>
         @if (isset($subCat->getChild) && $subCat->getChild != null)
            @include('subCat',['mainCat'=>$subCat,'title_prefix'=>$title_prefix])
         @endif
    @endforeach
