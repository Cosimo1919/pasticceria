<x-adminapp>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->user_lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_city}}</td>
                <td>{{$user->user_address}}</td>     
                <td>{{$user->user_phone}}</td>     
                <td>{{$user->role}}</td>
                <td>
                  <a href="" class="btn btn-secondary">Edit</a>
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>

    </div>
</x-adminapp>