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
                        <li style="list-style: none;" class="dropdown language-selector">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                                Options
                            </a>

                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="{{ route('patient.show', $appointment->id) }}" class="">
                                        View Patient Information
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('patient.show', $appointment->id) }}" class="">
                                        Patient Records
                                    </a>
                                </li>
                            </ul>

                        </li>
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
