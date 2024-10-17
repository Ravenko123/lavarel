<div class="mt-3">
    <div class="card">
        <div class="px-3 pt-4 pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                        src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0"><a href="#">{{$post->name}}
                            </a></h5>
                    </div>
                </div>
            <div>
                <form action="{{route('post.destroy', $post->id)}}" method="post">
                    @csrf
                    @method("delete")
                    <button>X</button>
                </form>
                <a href="{{route('post.show', $post->id)}}">Zobraziť

                </a>
                <a href="{{route('post.edit', $post->id)}}">Edit</a>
          </div>
            </div>
        </div>
        <div class="card-body">
            <p class="fs-6 fw-light text-muted">
                {{$post->content}}
            </p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="#" class="fw-light nav-link fs-6"> <span class="fas fa-heart me-1">
                        </span> {{$post->likes}}</a>
                </div>
                <div>
                    <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                        {{$post->created_at}}</span>
                </div>
            </div>
            <div>
                <form action="{{route('comment.store')}}" method="POST">
                <div class="mb-3">
                    <textarea class="fs-6 form-control" rows="1"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm"> Post Comment </button>
                </div>
                </form>
<hr>
            </div>
        </div>
    </div>
</div>