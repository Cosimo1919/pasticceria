<x-adminapp>
    <form action="{{route('category.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="category_name" class="form-label">Name</label>
          <input type="text" class="form-control" id="category_name" name="category_name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</x-adminapp>