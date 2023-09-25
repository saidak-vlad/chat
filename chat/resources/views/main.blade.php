<style>
    .display-comment .display-comment {
        margin-left: 40px
    }
</style>


<form method="POST" action="{{ route('comment.store') }}" enctype="multipart/form-data">
    @csrf

    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
           id="applyForJobFirstName" placeholder="First name"
           aria-label="First name">
    @error('name')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror




    <input type="email" class="form-control" name="email" id="applyForJobEmail"
           placeholder="Email" value="{{ old('email') }}" aria-label="Email">
    @error('email')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <input type="text" class="js-input-mask form-control" name="text"
           value="{{old('text')}}"
           id="applyForJobMessage" placeholder="Message"
           aria-label="Message">
    @error('text')
    <div class="text-danger">
        {{ $message }}
    </div>
    @enderror

    <button type="submit" class="btn btn-danger btn-sm mt-2">Send
        message
    </button>
</form>

<div class="container">

@include('replies', ['comments' => $comments])
</div>


