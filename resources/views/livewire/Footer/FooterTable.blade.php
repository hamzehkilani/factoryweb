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
                    @if ($pageLoaded == true || $Footer_exist == true)
                        @include('livewire.Footer.footer_edit')
                    @else
                        <button type="button" class="btn createbtn ml-5 mt-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#createFooter">
                            إنشاء تذييل جديد
                        </button>
                        @include('livewire.Footer.footer_create')
                    @endif
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">رابط الفيسبوك</th>
                                    <th scope="col" class="px-4 py-3">رابط يوتيوب</th>
                                    <th scope="col" class="px-4 py-3">رابط إنستغرام</th>
                                    <th scope="col" class="px-4 py-3">رابط تويتر</th>
                                    <th scope="col" class="px-4 py-3">الوصف</th>
                                    <th scope="col" class="px-4 py-3">اسم المصنع</th>
                                    <th scope="col" class="px-4 py-3">تصميم من قبل</th>
                                    @if ($pageLoaded == false)
                                    <th scope="col" class="px-4 py-3">العمليات</th>
                                    @endif
                                </tr>
                            </thead>
                            @if ($footer)
                                <tbody>
                                    <tr wire:key="{{ $footer->id }}" class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $footer->Facebook_Url ?? 'null' }}</th>
                                        <td class="px-4 py-3">{{ $footer->Youtube_Url ?? 'null' }}</td>
                                        <td class="px-4 py-3">{{ $footer->Instagram_Url ?? 'null' }}</td>
                                        <td class="px-4 py-3">{{ $footer->twitter_Url ?? 'null' }}</td>
                                        <td class="px-4 py-3">{{ $footer->desciption }}</td>
                                        <td class="px-4 py-3">{{ $footer->Factory_name }}</td>
                                        <td class="px-4 py-3">{{ $footer->Designed_by }}</td>
                                        @if ($pageLoaded == false)
                                        <td class="px-4 py-3  items-center justify-end">
                                            <button class="px-3 py-1 bg-red-500 text-white rounded" data-bs-toggle="modal"
                                                data-bs-target="#editfootermodel">تحرير</button>
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
