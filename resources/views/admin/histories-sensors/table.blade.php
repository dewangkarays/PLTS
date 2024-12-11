@foreach ($data as $row)
    <tr>
        <td>{{ $row->sensonrs_paramters_ }}</td>
        <td>{{ $row->value }}</td>
        <td class="text-end">
            @if (itcan('edit admin.histories-sensors') || itcan('delete admin.histories-sensors'))
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-action" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-action">
                        @itcan('edit admin.histories-sensors')
                            <li>
                                <a href="{{ adminRoute('admin.histories-sensors.edit', $row->uuid) }}"
                                    class="dropdown-item">Edit</a>
                            </li>
                        @enditcan
                        @itcan('delete admin.histories-sensors')
                            <li>
                                <a href="javascript:;" data-toggle="confirmation"
                                    data-message="{{ __('adminportal.delete_confirmation') }}"
                                    data-action="{{ adminRoute('admin.histories-sensors.destroy', $row->uuid) }}"
                                    data-method="DELETE" class="dropdown-item">Delete</a>
                            </li>
                        @enditcan
                    </ul>
                </div>
            @endif
        </td>
    </tr>
@endforeach
