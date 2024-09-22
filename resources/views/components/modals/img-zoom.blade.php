<!-- Modal -->
<div class="modal fade " id="zoom_img_modal" tabindex="-1" aria-labelledby="zoom_img_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen">
        <div class="modal-content quicksand-500">
            <div class="modal-header d-flex justify-content-between">
                <h1 class="modal-title fs-6 quicksand-500" id="zoom_img_modal">Concept design - </h1>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                @if(!request()->segment(2))
                    <a href="{{url('concept-design')}}"
                       class=""
                       alt=""><i class="fa-solid fa-arrow-left text-black"></i><span> Back</span>
                    </a>
                @else
                    <a href="{{url('concept-design/cruise-ship')}}"
                       class=""
                       alt=""><i class="fa-solid fa-arrow-left text-black"></i><span> Back</span>
                    </a>
                @endif
            </div>
            <div class="modal-body text-center">
                <img src="" class="" alt="">
            </div>
        </div>
    </div>
</div>
