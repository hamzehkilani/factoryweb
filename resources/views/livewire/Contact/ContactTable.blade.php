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
                    @if ($pageLoaded == true || $contuct_exist == true)
                        @include('livewire.Contact.contuct_edit')
                    @else
                        <button type="button" class="btn createbtn ml-5 mt-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#createcontuct">
                            إنشاء معلومات جديدة حول
                        </button>
                        @include('livewire.Contact.contuct_create')
                    @endif
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">هاتف المصنع</th>
                                    <th scope="col" class="px-4 py-3">يوم بدء العمل</th>
                                    <th scope="col" class="px-4 py-3">يوم انتهاء العمل</th>
                                    <th scope="col" class="px-4 py-3">ساعة بدء العمل</th>
                                    <th scope="col" class="px-4 py-3">ساعة انتهاء العمل</th>
                                    <th scope="col" class="px-4 py-3">بريد المصنع الإلكتروني</th>
                                    <th scope="col" class="px-4 py-3">اسم الشارع</th>
                                    <th scope="col" class="px-4 py-3">المدينة</th>

                                    @if ($pageLoaded == false)
                                        <th scope="col" class="px-4 py-3">العمليات</th>
                                    @endif
                                </tr>
                            </thead>
                            @if ($contuct)
                                <tbody>
                                    <tr wire:key="{{ $contuct->id }}" class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $contuct->Factory_Phone }}</th>
                                        <td class="px-4 py-3">{{ $contuct->Start_Working_Days }}</td>
                                        <td class="px-4 py-3">{{ $contuct->End_Working_Days }}</td>
                                        <td class="px-4 py-3">{{ $contuct->Start_Working_Hours }}</td>
                                        <td class="px-4 py-3">{{ $contuct->End_Working_Hours }}</td>
                                        <td class="px-4 py-3">{{ $contuct->Factory_Email }}</td>
                                        <td class="px-4 py-3">{{ $contuct->Street_name }}</td>
                                        <td class="px-4 py-3">{{ $contuct->City }}</td>
                                        @if ($pageLoaded == false)
                                        <td class="px-4 py-3  items-center justify-end">
                                            <button class="px-3 py-1 bg-red-500 text-white rounded"
                                                data-bs-toggle="modal" data-bs-target="#editcontuctmodel">تحرير</button>
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
