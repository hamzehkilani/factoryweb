@if ($header)
<div class="modal fade" id="editheadermodel{{ $header->id }}" tabindex="-1" aria-labelledby="editmodelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل الهيدر</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <form action="{{route('editheader')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input hidden type="text" class="form-control" name="header_id" value="{{$header->id }}" >
                    <div class="mb-3">
                        <label for="Factory_Name" class="form-label">اسم المصنع</label>
                        <input type="text" class="form-control" name="Factory_Name" value="{{$header->Factory_Name}}" required>
                        @error('Factory_Name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Title" class="form-label">العنوان</label>
                        <input type="text" class="form-control" name="Title" value="{{$header->Title}}" >
                        @error('Title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Descrption" class="form-label">الوصف</label>
                        <input type="text" class="form-control"  name="Descrption" value="{{$header->Descrption}}"  >
                        @error('Descrption')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label">الصورة</label>
                        <input type="file" class="form-control"  name="Image_Urls" value="{{$header->Image_Url}}">
                        @error('Image_Urls')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Vedio_Url" class="form-label">الفيديو</label>
                        <input type="file" class="form-control" name="Vedio_Urls" value="{{$header->Vedio_Url}}">
                        @error('Vedio_Urls')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @if($header->Vedio_Url!='')
                    <video  autoplay muted loop class="createheadermedia" style="    margin: auto;">
                        <source src="{{ asset('assets/ForHeaderMedia/Videos/' . ($header->Vedio_Url)) }}" type="video/mp4">
                    </video> 
                    @elseif($header->Image_Url!='')
                    <img src="{{ asset('assets/ForHeaderMedia/Images/' . ($header->Image_Url)) }}" alt="صورة الهيدر"  class="createheadermedia" style="    margin: auto;">
                    @endif
                    <button type="submit" class="btn createbtn" style="    margin: auto;">تعديل الهيدر</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
