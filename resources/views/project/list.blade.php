@extends ('layout.header')

@section('containt 1')
<div class="container" style="padding-top: 150px;">
    <div class="title-list">
        <h2>List Type Barang</h2>
    </div>
<div class="d-flex flex-row mb-3 mt-5">
  @foreach ($jenis as $item)
  <div class="p-2">
    <a href="{{route('search', $item->id_kode)}}">
        <button type="button" class="btn btn-primary">{{$item->jenis}}</button>
    </a>
  </div>
  @endforeach
</div>
</div>
</div>
@endsection
