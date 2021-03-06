@extends('admin.layout._base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="table-responsive">
        <table class="table table-bordered">
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        @foreach($client as $u)
          <tr>
            <td>{{ $u->id }}</td>
            <td><{{ $u->name }}/td>
            <td>{{ $u->email }}</td>
            <td>


            <form method="POST" action="{{ route('gereclient.destroy', $u->id) }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <div class="btn-group">

                          <input type="submit" class="btn btn-danger" onclick="return confirm('Confirmer suppression ?');" value="Supprimer">
                        </div>
                        </form>
                          </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>



@endsection
