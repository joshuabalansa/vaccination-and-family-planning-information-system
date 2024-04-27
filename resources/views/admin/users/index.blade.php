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
                    <td>{{ $user->role === 2 ? 'Patient' : 'Healthcare' }}</td>
                    <td>
                        <span class="badge badge-{{ $user->getStatus() === 'Active' ? 'success' : 'secondary' }}">
                            {{ $user->getStatus() }}
                        </span>
                    </td>
                    <td>
                        @if ($user->getStatus() == 'Active')
                            <a href="{{ route('user.deactivate', $user->id) }}" class="btn btn-dark btn-sm">
                                Deactivate
                            </a>
                        @else
                            <a href="{{ route('user.reactivate', $user->id) }}" class="btn btn-dark btn-sm">
                                Reactivate
                            </a>
                        @endif
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
