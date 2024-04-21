<x-app-layout>

    <h2 class="mb-3">Vaccines</h2>
    <div style="margin-bottom: 10px">
        <a href="{{ route('vaccine.create') }}" class="btn btn-primary">Add Vaccine</a>
    </div>
    <table class="table table-bordered datatable" id="datatable">
        <thead>
            <tr>
                <th>Vaccine Name</th>
                <th>Abbreviation</th>
                <th>Manufacturer</th>
                <th>doses</th>
                <th>Approved Ages</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vaccines as $vaccine)
                <tr class="odd gradeX">
                    <td>{{ $vaccine->vaccine }}</td>
                    <td>{{ $vaccine->abbreviation }}</td>
                    <td>{{ $vaccine->manufacturer }}</td>
                    <td>{{ $vaccine->doses }}</td>
                    <td>{{ $vaccine->approved_ages }}</td>
                    <td>{{ $vaccine->description }}</td>
                    <td>
                        <a href="#">Archive</a>
                    </td>
                    {{-- <td>
                        <span class="badge badge-{{ $appointment->getStatus() === 'Pending' ? 'danger' : 'success' }}">
                            {{ $appointment->getStatus() }}
                        </span>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Vaccine Name</th>
                <th>Abbreviation</th>
                <th>Manufacturer</th>
                <th>doses</th>
                <th>Approved Ages</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
