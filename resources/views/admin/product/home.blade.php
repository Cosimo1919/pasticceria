<x-adminapp>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                <th scope="col">Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->product_name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->category_name}}</td>
                <td>{{$product->product_description}}</td>
                <td>
                    @if ($product->is_deactivated)
                    <a href="{{route('product.disactive',$product)}}" class="btn btn-danger">disattiva</a>
                        
                    @else
                    <a href="{{route('product.active',$product)}}" class="btn btn-success">attiva</a>
                    @endif
                </td>
                <td>
                  <a href="{{route('product.show', $product)}}" class="btn btn-secondary">Show</a>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <p class="text-end">
            <a class="btn btn-success" href="{{route('product.create')}}">Create products</a>
          </p>
    </div>
</x-adminapp>