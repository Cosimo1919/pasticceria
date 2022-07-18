<x-adminapp>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a class="btn btn-warning" href="{{route('product.edit', $product)}}">Edit</a>
            </div>
            <div class="col-6">
                <form action="{{route('product.delete',$product)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p>
                    {{$product->product_name}}
                </p>
                <p>
                    {{$product->price}}
                </p>
            </div>
            <div class="col-6">
                <p>
                    {{$product->product_description}}
                </p>
                @if ($product->is_deactivated)
                    <p class="text-danger">
                        Disactived
                    </p>
                @else
                    <p class="text-success">
                        Actived
                    </p>
                @endif
            </div>
        </div>
    </div>
</x-adminapp>