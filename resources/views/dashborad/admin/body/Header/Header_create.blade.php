<!-- نموذج النافذة المنبثقة -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">إنشاء هيدر</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form action="{{route('createheader')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Factory_Name" class="form-label">اسم المصنع</label>
                        <input type="text" class="form-control" name="Factory_Name" required>
                        @error('Factory_Name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Title" class="form-label">العنوان</label>
                        <input type="text" class="form-control" name="Title" >
                        @error('Title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Descrption" class="form-label">الوصف</label>
                        <input type="text" class="form-control"  name="Descrption" >
                        @error('Descrption')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label">الصورة</label>
                        <input type="file" class="form-control"   name="Image_Urls" >
                        @error('Image_Urls')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Vedio_Url" class="form-label">الفيديو</label>
                        <input type="file" class="form-control"  name="Vedio_Urls" >
                        @error('Vedio_Urls')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn createbtn">إنشاء هيدر</button>
                </form>
            </div>
        </div>
    </div>
</div>
