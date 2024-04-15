<x-app-layout>
    <h2>Appointment Information</h2><br />
    <table class="table table-hover">
        <tbody>
            <tr>
                <th scope="col">name</th>
            </tr>
            <tr>
                <th scope="col">Birth Date</th>
            </tr>
            <tr>
                <th scope="col">Body Weight</th>
            </tr>
            <tr>
                <th scope="col">Time</th>
            </tr>
            <tr>
                <th scope="col">BL</th>
            </tr>
            <tr>
                <th scope="col">Address</th>
            </tr>
            <tr>
                <th scope="col">Phone #</th>
            </tr>
            <tr>
                <th scope="col">G</th>
            </tr>
            <tr>
                <th scope="col">P</th>
            </tr>
            <tr>
                <th scope="col">A</th>
            </tr>
            <tr>
                <th scope="col">LB</th>
            </tr>
            <tr>
                <th scope="col">D</th>
            </tr>
            <tr>
                <th scope="col">Philhealth</th>
            </tr>
            <tr>
                <th scope="col">4PS</th>
            </tr>
            <tr>
                <th scope="col">Mother's Maiden Name</th>
            </tr>
            <tr>
                <th scope="col">Mother's Birth Date</th>
            </tr>
            <tr>
                <th scope="col">Mother's Age</th>
            </tr>
            <tr>
                <th scope="col">Mother's Occupation</th>
            </tr>
            <tr>
                <th scope="col">Father's Maiden Name</th>
            </tr>
            <tr>
                <th scope="col">Father's Birth Date</th>
            </tr>
            <tr>
                <th scope="col">Father's Age</th>
            </tr>
            <tr>
                <th scope="col">Father's Occupation</th>
            </tr>
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('appointment.records') }}" class="btn btn-primary">
            Back
        </a>
        @if ($appointment->getStatus() !== 'Approved')
            <a href="{{ route('appointment.accept', $appointment->id) }}"
                class="btn btn-success btn-sm btn-icon icon-left">
                <i class="entypo-check"></i>
                Approve
            </a>
        @endif
    </div>
</x-app-layout>
