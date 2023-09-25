@foreach($comments as $comment)

    <div class="ms-5">


        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->text }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="comment_id" value="{{ $comment->id }}"/>
            </div>

            <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample{{ $comment->id }}" aria-expanded="false"
                    aria-controls="collapseExample">
                Reply
            </button>

            <input type="text" class="form-control" name="name_reply" value="{{ old('name_reply') }}"
                   id="applyForJobFirstName" placeholder="First name"
                   aria-label="First name">
            @error('name_reply')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <input type="email" class="form-control" name="email_reply" id="applyForJobEmail"
                   placeholder="Email" value="{{ old('email_reply') }}" aria-label="Email">
            @error('email_reply')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <input type="text" class="js-input-mask form-control" name="text_reply"
                   value="{{old('text_reply')}}"
                   id="applyForJobMessage" placeholder="Message"
                   aria-label="Message">
            @error('text_reply')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror


            <input type="submit" class="btn btn-warning" value="Send"/>

        </form>
        @include('replies', ['comments' => $comment->replies])
    </div>
@endforeach
