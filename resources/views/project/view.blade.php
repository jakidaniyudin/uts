@extends('layout.header')

@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
  <div class="container">
    <div class="d-flex">
    @foreach($dataList as $item)
        <div class="p-2 flex-fill back-link">
            <a href="/"><img src="{{asset('aset/img/bk.png')}}" alt="" style="width: 60px;" ></a>
             
        </div>
        <div class="p-2 flex-fill">
            <img src="{{asset('aset/img_produk')}}/{{$item->foto}}" alt="" style="width: 400px;">
        </div>

        <div class="p-2 flex-fill">
            <div class="row">
           
                <h3>{{$item->nama}}</h3>
                <p>type:{{$item->jenis}}</p>
                <p>{{$item->desskripsi_detail}}</p>
                
            </div>
            <div class="row">
                <div class="col-2" style="margin-right:2px;">
                     <button type="button" class="btn btn-primary buy-link"> <img src="{{asset('aset/img/f.png')}}"  class=" mx-auto d-block" alt="" style="width: 30px;"></button>
                </div>
                <div class="col-2" >
                     <button type="button" class="btn btn-primary buy-link"><img src="{{asset('aset/img/chat.png')}}"  class=" mx-auto d-block" alt="" style="width: 30px;"></button>
                </div>
                <div class="mb-3 mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Command Me</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
         </div>
       @endforeach
    </div>
  </div>
</div>
@endsection
