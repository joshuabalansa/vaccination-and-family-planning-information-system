<x-app-layout>
    <h2>Patient Records</h2><br />
    <table class="table table-bordered datatable" id="datatable">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Date Appointment</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr class="odd gradeX">
                    <td>{{ $appointment->getName() }}</td>
                    <td>{{ $appointment->getPhone() }}</td>
                    <td>{{ $appointment->created_at }}</td>
                    <td>{{ $appointment->getDateTime('time') }}</td>
                    <td>
                        <span class="badge badge-{{ $appointment->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $appointment->getStatus() }}
                        </span>
                    </td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                            <i class="entypo-info"></i>
                            Info
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Date Appointment</th>
                <th>Time</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
