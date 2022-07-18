<x-adminapp>
    <form action="{{route('product.update', $product)}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="product_name" value="{{$product->product_name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label d-block">Description</label>
            <textarea name="product_description" id="description" cols="30" rows="10">
                {{$product->product_description}}
            </textarea>
        </div>
        <div class="mb-3">
            <select name="category" id="category" class="form-control border-0 mb-2 shadow-sm">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"
                    {{ old('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->category_name }}</option>
                    @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-adminapp>