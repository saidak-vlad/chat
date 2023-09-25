@foreach($comments as $comment)
    <div class="media-block">
        <a class="media-left me-2" href="#">
            <img class="img-circle img-sm" alt="Profile Picture"
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png">
        </a>
        <div class="media-body">
            <div class="mar-btm">
                <a href="#" class="btn-link text-semibold media-heading box-inline">{{ $comment->user->name }}</a>
                <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web
                    - {{ $comment->user->updated_at->format('d,m,Y \в H:i') }}</p>
            </div>
            <p>{!! $comment->text !!}</p>
            <div class="card-body">
                <h4 class="card-title">Display Comments</h4>
                <hr/>
                <p>
                    <button class="btn btn-warning toggle-comment-form" type="button" data-bs-toggle="collapse"
                            data-bs-target=".comment-form" aria-expanded="false"
                            aria-controls="collapseExample">
                        Add Comment
                    </button>
                </p>

                <div class="collapse comment-form">
{{--                    @include('layouts.partials.comment-form', ['comment' => null, 'value' => 'reply.store'])--}}
                </div>
                <hr/>
{{--                @include('layouts.partials.comments', ['comments' => $comments])--}}
            </div>

        </div>

    </div>
@endforeach

