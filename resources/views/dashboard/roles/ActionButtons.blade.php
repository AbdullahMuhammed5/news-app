@canany(['role-edit', 'role-delete', 'role-list'])
    <td>
        <a href="/roles/{{$row->id}}" class="btn btn-info">View</a>
        @can('role-edit')
            <a href="/roles/{{$row->id}}/edit" class="btn btn-primary">Edit</a>
        @endcan

        @can('role-delete')
            <form method="POST" action='roles/{{$row}}'  style='display: inline'>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Delete"
                       onclick="return confirm('Are you sure you want to delete this item?');">
            </div>
            </form>
        @endcan
    </td>
@endcanany
