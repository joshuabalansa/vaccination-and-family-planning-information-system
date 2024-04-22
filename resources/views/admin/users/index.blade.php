<x-app-layout>
    <h2>Users Management</h2><br />
    <table class="table table-bordered datatable" id="datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="odd gradeX">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role === 2 ? 'Patient' : 'Volunteer Nurse' }}</td>
                    {{-- <td>
                        <span class="badge badge-{{ $appointment->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $appointment->getStatus() }}
                        </span>
                    </td> --}}
                    {{-- <td>
                        <a href="{{ route('patient.show', $appointment->id) }}"
                            class="btn btn-info btn-sm btn-icon icon-left">
                            <i class="entypo-info"></i>
                            Info
                        </a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Role</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
