<x-app>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$product->product_name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$product->price}}</h6>
                      <p class="card-text">{{$product->product_description}}</p>
                      <form action="{{route('addToCart',$product)}}" method="POST">
                        @csrf
                          <button type="submit" class="card-link btn btn-primary">Add to chart</button>
                      </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app>

