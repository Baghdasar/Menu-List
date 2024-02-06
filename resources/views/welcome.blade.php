<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="{{ asset('assets/style.css') }}"></script>


</head>
{{-- @dd($categories->first()) --}}

{{-- <ul>
    @foreach ($menus as $mainCat)
        <li>{{ $mainCat->name }}</li>

        @include('subCat', ['mainCat' => $mainCat])
    @endforeach
</ul> --}}



<h1>test</h1>
<form action="{{route('menu.level.del')}}" method="post">
@csrf
    <div class="d-flex flex-row mb-3 p-3">
        <div class="input-group m-3 pe-3">

            <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                aria-describedby="basic-addon1" name="name">
        </div>
        <select  name="parentId" class="form-select px-3" id="inputGroupSelect04" aria-label="Example select with button addon">
            <option value="" selected>General Category</option>

            @php
                $title_prefix = '';
            @endphp

            @foreach ($menus as $mainCat)
                <option value="{{$mainCat->id}}">{{ $mainCat->name }}</option>
                @include('subCat', ['mainCat' => $mainCat, 'title_prefix' => $title_prefix])
            @endforeach


        </select>
        <button class="btn btn-outline-secondary ms-5 pe-5" type="submit">Button</button>
    </div>
</form>
{{-- @foreach ($menus as $mainCat)
      <option >{{$mainCat->name}}</option>


      @foreach ($mainCat->getChild as $subCat)


              <option>{{ $subCat->name }}</option>


              @foreach ($subCat->getChild as $subSubCat)
                  @if (isset($subSubCat->getChild) && $subSubCat->getChild != null)
                      <option>{{ $subSubCat->name }}</option>
                  @endif
              @endforeach

      @endforeach
  @endforeach --}}


</html>
