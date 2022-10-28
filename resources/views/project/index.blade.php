@extends('layout.header')

@section('containt 1')
<div class="jumbotron jumbotron-fluid" style="padding: 150px; margin-top:40px;">
    <div class="container">
      <h1 class="display-4">
        <img src="{{asset('aset/img/bumi.png')}}" alt="" style="width:100; height:100px;">
        Sumatra Shop
        </h1>
      <p class="lead">Hallo sobat wong kito galo, Selamat Datang di Shop kito !!!</p>
    </div>
  </div>
  @endsection

  @section('containt 2')
  <div class="container">
    <div class="title text-center">
        <h2>Daftar Top Barang</h2>
    </div>
    <div class="d-flex flex-row mb-3  mt-4">
        <?php $i = 1 ?>
    @foreach ($dataBarang as $item)
        @if($i < 4)
        <div class="col">
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="{{asset('aset/img_produk')}}/{{$item->foto}}" class="card-img-top img fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nama}}</h5>
                    <p class="card-text">{{$item->jenis}}</p>
                    <h6 class="card-text">Rp.{{$item->harga}},00</h6>
                    <p class="card-text">{{$item->deskripsi_view}}</p>
                    <a href="{{route('view', $item->id)}}" class="btn btn-primary rounded-circle" style="width:70px;"><img src="{{('aset/img/f.png')}}" class="mx-auto d-block" alt="" style="width: 40px; margin-right:10px;"></a>
                </div> 
            </div>
      </div>
      @endif
      <?php $i++?>
    @endforeach
      
      
    
      </div>
    </div>
    
    </div>
    @endsection
  

    @section('containt 3')
    <div class="container">
        <div class = "title text-center">
            <h3>Daftar Rempah-Rempah dan Material</h3>
            <h5>Di sini saya menjual berbagai jenis Rempah dan Material</h5>
        </div>
    
        <table class="table table-borderless mt-5">
        <?php $j=1?>
        @foreach($dataBarang as $brg)
            @if($j==1 OR $j ==3)
            <tr>
            @endif
                <td>
                    <div class="card mb-3 shadow-lg" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="{{asset('aset/img_produk')}}/{{$brg->foto}}" class="img-fluid rounded-start" alt="..." style="height: 300px;">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$brg->nama}}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="{{route('view',$brg->id)}}" class="btn btn-primary rounded-circle" style="width:70px;"><img src="{{('aset/img/f.png')}}" class="mx-auto d-block" alt="" style="width: 40px; margin-right:10px;"></a>
                        </div>
                        </div>
                    </div>
                    </div>
                </td>  
            @if($j==2)
            </tr>
                
            @endif
            @if($j==4)
            <?php $j=0; ?>
            @endif
            
            <?php $j++;?>
         
        @endforeach    
            
    
    
            </table>
    </div>
        
    @endsection

    <?php $dataBarang?>
  