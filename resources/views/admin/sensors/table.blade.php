@foreach ($data as $row)
<tr>
    <td>{{$row->name}}</td>
    <td class="text-end">
        @if(itcan('edit admin.sensors') || itcan('delete admin.sensors'))
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle btn-action" data-bs-toggle="dropdown" aria-expanded="false">
                Action
            </button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-action">
                @itcan('edit admin.sensors')
                <li>
                    <a href="{{adminRoute('admin.sensors.edit',$row->uuid)}}" class="dropdown-item">Edit</a>
                </li>
                @enditcan
                @itcan('delete admin.sensors')
                <li>
                    <a href="javascript:;" data-toggle="confirmation"
                        data-message="{{__('adminportal.delete_confirmation')}}"
                        data-action="{{adminRoute('admin.sensors.destroy',$row->uuid)}}" data-method="DELETE"
                        class="dropdown-item">Delete</a>
                </li>
                @enditcan
            </ul>
        </div>
        @endif
    </td>
</tr>
@endforeach