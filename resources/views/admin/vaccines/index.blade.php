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
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vaccines as $vaccine)
                <tr class="odd gradeX">
                    <td>{{ $vaccine->getVaccine() }}</td>
                    <td>{{ $vaccine->getAbbreviation() }}</td>
                    <td>{{ $vaccine->getManufacturer() }}</td>
                    <td>{{ $vaccine->getDoses() }}</td>
                    <td>{{ $vaccine->getApprovedAges() }}</td>
                    <td>{{ $vaccine->getDescription() }}</td>
                    <td><span
                            class='badge badge-{{ $vaccine->getStatus() === 'available' ? 'success' : 'secondary' }}'>{{ ucfirst($vaccine->getStatus()) }}</span>
                    </td>
                    <td>
                        @if ($vaccine->getStatus() === 'available')
                            <a href="{{ route('vaccine.archive', $vaccine->id) }}">Archive</a>
                        @else
                            <a href="{{ route('vaccine.unarchived', $vaccine->id) }}">Unarchived</a>
                        @endif
                    </td>
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
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</x-app-layout>
