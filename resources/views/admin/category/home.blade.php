<x-adminapp>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Disactive</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->category_name}}</td>
                <td>
                    @if ($category->is_deactivated)
                    <a href="{{route('category.disactive',$category)}}" class="btn btn-danger">disattiva</a>
                        
                    @else
                    <a href="{{route('category.active',$category)}}" class="btn btn-success">attiva</a>
                    @endif
                </td>
                <td>
                  <a href="{{route('category.edit',$category)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                  <form action="{{route('category.delete',$category)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <p class="text-end">
            <a class="btn btn-success" href="{{route('category.create')}}">Create category</a>
          </p>
    </div>
</x-adminapp>