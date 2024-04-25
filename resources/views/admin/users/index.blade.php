<x-app-layout>
    <h2>Users Management</h2><br />
    <table class="table table-bordered datatable" id="datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="odd gradeX">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role === 2 ? 'Patient' : 'Doctor' }}</td>
                    <td>{{ $user->status }}</td>
                    {{-- <td>
                        <span class="badge badge-{{ $appointment->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $appointment->getStatus() }}
                        </span>
                    </td> --}}
                    <td>
                        <a href="{{ route('user.deactivate', $user->id) }}"
                            class="btn btn-info btn-sm btn-icon icon-left">
                            <i class="entypo-info"></i>
                            deactivate
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
