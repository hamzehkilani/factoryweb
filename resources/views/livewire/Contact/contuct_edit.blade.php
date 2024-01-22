<!-- Modal -->
<div class="modal fade" id="editcontuctmodel" tabindex="-1" aria-labelledby="editmodelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تحرير معلومات الاتصال</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="editcontuct">
                    @csrf
                    <div class="mb-3">
                        <label for="Factory_Email" class="form-label">بريد المصنع الإلكتروني</label>
                        <input type="email" class="form-control" wire:model="Factory_Email" value="{{ $Factory_Email }}"
                            required>
                        @error('Factory_Email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Factory_Phone" class="form-label">هاتف المصنع</label>
                        <input type="tel" class="form-control" wire:model="Factory_Phone" value="{{ $Factory_Phone }}"
                            required>
                        @error('Factory_Phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Start_Working_Days" class="form-label">بداية يوم العمل</label>
                        <select class="form-control" wire:model="Start_Working_Days" required
                            value="{{ $Start_Working_Days }}">
                            <option value="Choice">اختر اليوم</option>
                            <option value="Sunday">الأحد</option>
                            <option value="Monday">الاثنين</option>
                            <option value="Tuesday">الثلاثاء</option>
                            <option value="Wednesday">الأربعاء</option>
                            <option value="Thursday">الخميس</option>
                            <option value="Friday">الجمعة</option>
                            <option value="Saturday">السبت</option>
                        </select>
                        @error('Start_Working_Days')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="End_Working_Days" class="form-label">نهاية يوم العمل</label>
                        <select class="form-control" wire:model="End_Working_Days" required
                            value="{{ $End_Working_Days }}">
                            <option value="Choice">اختر اليوم</option>
                            <option value="Sunday">الأحد</option>
                            <option value="Monday">الاثنين</option>
                            <option value="Tuesday">الثلاثاء</option>
                            <option value="Wednesday">الأربعاء</option>
                            <option value="Thursday">الخميس</option>
                            <option value="Friday">الجمعة</option>
                            <option value="Saturday">السبت</option>
                        </select>
                        @error('End_Working_Days')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Start_Working_Hours" class="form-label">بداية ساعات العمل</label>
                        <select class="form-control" wire:model="Start_Working_Hours" required
                            value="{{ $Start_Working_Hours }}">
                            @for ($hour = 1; $hour <= 12; $hour++)
                                <option value="{{ $hour }}:00 AM">{{ $hour }}:00 AM</option>
                                <option value="{{ $hour }}:30 AM">{{ $hour }}:30 AM</option>
                            @endfor

                            @for ($hour = 1; $hour <= 12; $hour++)
                                <option value="{{ $hour }}:00 PM">{{ $hour }}:00 PM</option>
                                <option value="{{ $hour }}:30 PM">{{ $hour }}:30 PM</option>
                            @endfor
                        </select>
                        @error('Start_Working_Hours')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="End_Working_Hours" class="form-label">نهاية ساعات العمل</label>
                        <select class="form-control" wire:model="End_Working_Hours" required
                            value="{{ $End_Working_Hours }}">
                            @for ($hour = 1; $hour <= 12; $hour++)
                                <option value="{{ $hour }}:00 AM">{{ $hour }}:00 AM</option>
                                <option value="{{ $hour }}:30 AM">{{ $hour }}:30 AM</option>
                            @endfor

                            @for ($hour = 1; $hour <= 12; $hour++)
                                <option value="{{ $hour }}:00 PM">{{ $hour }}:00 PM</option>
                                <option value="{{ $hour }}:30 PM">{{ $hour }}:30 PM</option>
                            @endfor
                        </select>
                        @error('End_Working_Hours')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Street_name" class="form-label">اسم الشارع</label>
                        <input type="text" class="form-control" wire:model="Street_name" value="{{ $Street_name }}"
                            required>
                        @error('Street_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="City" class="form-label">المدينة</label>
                        <input type="text" class="form-control" wire:model="City" value="{{ $City }}" required>
                        @error('City')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn createbtn">حفظ التعديل</button>
                </form>
            </div>
        </div>
    </div>
</div>
