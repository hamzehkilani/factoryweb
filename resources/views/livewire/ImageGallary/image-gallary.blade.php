<div class="container mt-5">
    <link rel="stylesheet" href="{{asset('assets/css/ImageGallary.css')}}">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form wire:submit.prevent="createImage" class="mb-4">
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">إضافة صورة</button>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="file-upload">
                            <label for="fileuploadfield_1" class="file-upload__label fieldlabels">
                                <dotlottie-player
                                    src="https://lottie.host/020e438d-6def-42c5-b505-10007dbcb01d/ZyLcFiw27t.json"
                                    background="transparent" speed="1" loop autoplay></dotlottie-player>
                            </label>
                            <input id="fileuploadfield_1" name="fileuploadfield_1" type="file" style="display:none"
                                class="file-upload__input" wire:model="image">
                            <br>
                        </div>
                        @if ($image)
                        @else
                            <span style="margin-left: 21px;">لم يتم تحديد ملف</span>
                        @endif
                    </div>
                </div>
                @if ($image)
                    <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" alt="image-previwe">
                @endif
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </form>
        </div>
    </div>

    <main>
        <div class="container">
            <section>
                <div class="row " style="justify-content:center">
                    @foreach ($images_data as $image)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="position-relative">
                                <div class="image-container" style='    margin-bottom: 13px;'>
                                    <img src="{{ asset('/assets/imagemedia/' . $image->Image_Url) }}" alt="Image">
                                    <div class="text-container">
                                        <button type="button" wire:click="deleteImage('{{ $image->Image_Url }}')">
                                            <p class="p-delete">حذف <i
                                                    class="fas fa-solid fa-trash-can-arrow-up"></i> </p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!-- Pagination -->
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3 mb-3">
                <ul class="pagination">
                    @if ($images_data->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" wire:click="previousPage" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                    @endif
                    @foreach ($images_data->links() as $page => $url)
                        <li class="page-item {{ $page == $Products->currentPage() ? 'active' : '' }}">
                            <a class="page-link" wire:click="gotoPage('{{ $page }}')">{{ $page }}</a>
                        </li>
                    @endforeach
                    @if ($images_data->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" wire:click="nextPage" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </main>

    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</div>
