<div>
    <div>
        <section class="mt-10 mb-10">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('errormessage'))
                <div class="alert alert-danger">
                    {{ session('errormessage') }}
                </div>
            @endif
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    @if ($pageLoaded == true || $about_exist == true)
                        @include('livewire.About.about_edit')
                    @else
                        <button type="button" class="btn createbtn ml-5 mt-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#aboutcreate">
                            إنشاء معلومات جديدة حول
                        </button>
                        @include('livewire.About.about_create')
                    @endif
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">العنوان</th>
                                    <th scope="col" class="px-4 py-3">الوصف</th>
                                    @if ($pageLoaded == false )
                                    <th scope="col" class="px-4 py-3">العمليات</th>
                                    @endif
                                </tr>
                            </thead>
                            @if ($about)
                                <tbody>
                                    <tr wire:key="{{ $about->id }}" class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $about->Title ?? 'null' }}</th>
                                        <td class="px-4 py-3">{{ $about->Descrption ? $about->Descrption : 'null' }}</td>
                                        @if ($pageLoaded == false )

                                        <td class="px-4 py-3  items-center justify-end">
                                            <button class="px-3 py-1 bg-red-500 text-white rounded"
                                                data-bs-toggle="modal" data-bs-target="#editaboutmodel">تحرير</button>
                                        </td>
                                        @endif
                                    </tr>
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>


</div>
