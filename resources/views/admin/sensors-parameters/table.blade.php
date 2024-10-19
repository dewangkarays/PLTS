@foreach ($data as $row)
    <tr>
        <td>{{ $row->sensor->name }}</td>
        <td>{{ $row->parameter }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->unit }}</td>
        <td class="text-end">
            @if (itcan('edit admin.sensors-parameters') || itcan('delete admin.sensors-parameters'))
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-action" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-action">
                        @itcan('edit admin.sensors-parameters')
                            <li>
                                <a href="{{ adminRoute('admin.sensors-parameters.edit', $row->uuid) }}"
                                    class="dropdown-item">Edit</a>
                            </li>
                        @enditcan
                        @itcan('delete admin.sensors-parameters')
                            <li>
                                <a href="javascript:;" data-toggle="confirmation"
                                    data-message="{{ __('adminportal.delete_confirmation') }}"
                                    data-action="{{ adminRoute('admin.sensors-parameters.destroy', $row->uuid) }}"
                                    data-method="DELETE" class="dropdown-item">Delete</a>
                            </li>
                        @enditcan
                    </ul>
                </div>
            @endif
        </td>
    </tr>
@endforeach
