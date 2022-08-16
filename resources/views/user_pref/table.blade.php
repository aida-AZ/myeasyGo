@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User Preferences</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user_pref.create') }}"> Add New </a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Equipment</th>
            <th>Experiment</th>
            <th>Date</th>
            <th>Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($user_pref as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->attraction }}</td>
            <td>{{ $u->dayStay }}</td>
            <td>{{ $u->budget }}</td>
            <td>{{ $u->foodType }}</td>
            <td>{{ $u->created_at }}</td>
            <td>
                <form action="{{ route('user_pref.destroy',$u->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('user_pref.show',$u->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('user_pref.edit',$u->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection