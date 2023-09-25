@extends('layouts.app')

@section('content')
    <style>
        .display-comment .display-comment {
            margin-left: 40px;
        }

        .comment-form {
            margin-top: 20px;
        }
    </style>
    <div id="comment-list">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Display Comments</h4>
                            <hr/>
                            <p>
                                <button class="btn btn-warning" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    Add Comment
                                </button>
                            </p>

                            <div class="collapse comment-form" id="collapseExample">
{{--                                @include('layouts.partials.comment-form', ['comment' => null, 'value' => 'comment.store'])--}}
                            </div>

                            <hr/>
{{--                            @include('layouts.partials.comments', ['comments' => $comments])--}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5 mb-5">
                <div class="col-auto">
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
        <div id="error-messages">

        </div>
    </div>

@endsection
