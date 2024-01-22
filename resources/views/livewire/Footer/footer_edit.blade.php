<!-- نموذج النافذة المنبثقة -->
<div class="modal fade" id="editfootermodel" tabindex="-1" aria-labelledby="editmodelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تحرير التذييل</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="editFooter">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">رابط الفيسبوك</label>
                        <input type="text" class="form-control" wire:model="Facebook_Url" value="{{$Facebook_Url}}" >
                        @error('Facebook_Url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Youtube_Url" class="form-label">رابط يوتيوب</label>
                        <input type="text" class="form-control" wire:model="Youtube_Url"  value="{{$Youtube_Url}}" >
                        @error('Youtube_Url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Instagram_Url" class="form-label">رابط انستجرام</label>
                        <input type="text" class="form-control" wire:model="Instagram_Url"  value="{{$Instagram_Url}}" >
                        @error('Instagram_Url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="twitter_Url" class="form-label">رابط تويتر</label>
                        <input type="text" class="form-control" wire:model="twitter_Url"  value="{{$twitter_Url}}"  >
                        @error('twitter_Url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="desciption" class="form-label">الوصف</label>
                        <input type="text" class="form-control" wire:model="desciption"  value="{{$desciption}}" required>
                        @error('desciption')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Factory_name" class="form-label">اسم المصنع</label>
                        <input type="text" class="form-control" wire:model="Factory_name" value="{{$Factory_name}}"  required>
                        @error('Factory_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Designed_by" class="form-label">تصميم بواسطة</label>
                        <input type="text" class="form-control" wire:model="Designed_by" value="{{$Designed_by}}"  required>
                        @error('Designed_by')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn createbtn">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>
