@props(['text', 'action'])
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create {{$text}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form {{$attributes->merge(['class' => 'p-3'])}} action="/{{$action}}" method="POST">
                    @csrf
                    {{$slot}}
                    {{--                    <div class="modal-footer">--}}
                    {{--                    </div>--}}
                </form>
            </div>
        </div>
    </div>
</div>
