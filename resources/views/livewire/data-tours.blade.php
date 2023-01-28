<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Registros</h1>
            </div>
            {{-- <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Export</button>
            </div> --}}
        </div>
        @if (!$data)
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                            Tour</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Registrados</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Porcentaje</th>
                                        <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Ver</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                            Ruta Enequén
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ $count_enequen }}</td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ number_format(($count_enequen * 100) / 60, 0) }}%</td>
                                        <td
                                            class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a wire:click="selectTour('enequen')"
                                                class="cursor-pointer text-indigo-600 hover:text-indigo-900">Ver<span
                                                    class="sr-only">, AAPS0L</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                            Ruta Milpa
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ $count_milpa }}</td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ number_format(($count_milpa * 100) / 50, 0) }}%</td>
                                        <td
                                            class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a wire:click="selectTour('milpa')"
                                                class="cursor-pointer text-indigo-600 hover:text-indigo-900">Ver<span
                                                    class="sr-only">, AAPS0L</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                            Ruta Azul
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ $count_azul }}</td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ number_format(($count_azul * 100) / 50, 0) }}%</td>
                                        <td
                                            class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a wire:click="selectTour('azul')"
                                                class="cursor-pointer text-indigo-600 hover:text-indigo-900">Ver<span
                                                    class="sr-only">, AAPS0L</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                            Ruta Puuc
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ $count_puuc }}</td>
                                        <td
                                            class="whitespace-nowrap px-2 py-2 text-sm text-center font-medium text-gray-900">
                                            {{ number_format(($count_puuc * 100) / 50, 0) }}%</td>
                                        <td
                                            class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a wire:click="selectTour('puuc')"
                                                class="cursor-pointer text-indigo-600 hover:text-indigo-900">Ver<span
                                                    class="sr-only">, AAPS0L</span></a>
                                        </td>
                                    </tr>

                                    <!-- More transactions... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($data)
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="whitespace-nowrap py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900 sm:pl-6">
                                            Name</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Last Name</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Country</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Language</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Email</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Phone</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Emergency Name</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Relationship</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Menu Type</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Allergies</th>
                                        <th scope="col"
                                            class="whitespace-nowrap px-2 py-3.5 text-center text-sm font-semibold text-gray-900">
                                            Contactar</th>
                                        <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Ver</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">

                                    @foreach ($data as $item)
                                        <tr>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->name }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->last_name }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->country }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->language }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->email }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->phone }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->emergency_name }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->relationship }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->menu_type }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                {{ $item->allergies }}
                                            </td>
                                            <td
                                                class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-center text-gray-500 sm:pl-6">
                                                @if ($item->contact_me == 1)
                                                    Sí
                                                @else
                                                    No
                                                @endif
                                            </td>
                                            <td
                                                class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                                <a wire:click="selectTour('enequen')"
                                                    class="cursor-pointer text-indigo-600 hover:text-indigo-900">Ver<span
                                                        class="sr-only">, AAPS0L</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
