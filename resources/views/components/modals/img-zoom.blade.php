<!-- Modal -->
<div class="modal fade " id="zoom_img_modal" tabindex="-1" aria-labelledby="zoom_img_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-fullscreen">
        <div class="modal-content quicksand-400">
            <div class="modal-header d-flex justify-content-between">
                <h1 class="modal-title fs-6 text-uppercase quicksand-400" id="zoom_img_modal">Concept design - </h1>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
                @if(!request()->segment(2))
                    <a href="{{url('concept-design')}}"
                       class="text-uppercase"
                       alt=""><i class="fa-solid fa-arrow-left text-black"></i><span> Back</span>
                    </a>
                @else
                    <a href="{{url('concept-design/cruise-ship')}}"
                       class="text-uppercase"
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
