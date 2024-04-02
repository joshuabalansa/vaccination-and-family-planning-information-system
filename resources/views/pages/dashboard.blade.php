<x-app-layout>
    <div class="flex flex-col md:flex-row md:justify-between">
        <a href="{{ route('appointment.records') }}"
            class="w-full m-2 md:w-1/4 block max-w-sm p-6 mb-4 md:mb-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ \App\Models\Appointment::all()->count() }}
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Appointments</p>
        </a>

        <a href="#"
            class="w-full m-2 md:w-1/4 block max-w-sm p-6 mb-4 md:mb-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">34</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Available Vaccines</p>
        </a>

        <a href="#"
            class="w-full m-2 md:w-1/4 block max-w-sm p-6 mb-4 md:mb-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">345</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Patients</p>
        </a>

        <a href="#"
            class="w-full m-2 md:w-1/4 block max-w-sm p-6 mb-4 md:mb-0 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">5</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Doctors</p>
        </a>
    </div>
</x-app-layout>
