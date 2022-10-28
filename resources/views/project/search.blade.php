@extends ('layout.header')

@section ('containt 1')
  <div class="container" style="padding-top: 200px">
    <div class="text-center">
        <h2>List data Barang</h2>
    </div>
    <table class="table table-borderless mt-5">
        <?php $j=1?>
        @foreach($dataSearch as $brg)
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
                            <a href="{{route('view',$brg->id)}}" class="btn btn-primary rounded-circle" style="width:70px;"><img src="{{asset('aset/img/f.png')}}" class="mx-auto d-block" alt="" style="width: 40px; margin-right:10px;"></a>
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
