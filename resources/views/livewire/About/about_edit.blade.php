<!-- Modal -->
<div class="modal fade" id="editaboutmodel" tabindex="-1" aria-labelledby="editmodelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تحرير حولنا</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" wire:submit.prevent="AboutEdit">
                    @csrf

                    <div class="mb-3">
                        <label for="Title" class="form-label">العنوان</label>
                        <input type="text" class="form-control" name="Title" wire:model="Title">
                        @error('Title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Descrption" class="form-label">الوصف</label>
                        <input type="text" class="form-control" name="Descrption" wire:model="Descrption">
                        @error('Descrption')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn createbtn">حفظ التعديل</button>
                </form>
            </div>
        </div>
    </div>
</div>
