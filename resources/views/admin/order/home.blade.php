<x-adminapp>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">User id</th>
                <th scope="col">Order sku</th>
                <th scope="col">Total price</th>
                <th scope="col">Products</th>
                <th scope="col">Status Order</th>
              </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->user_id}}</td>
                <td>{{$order->order_sku}}</td>
                <td>{{$order->total_price}}</td>
                <td>{{$order->products}}</td>
                <td>{{$order->status_order}}</td>     
            </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</x-adminapp>