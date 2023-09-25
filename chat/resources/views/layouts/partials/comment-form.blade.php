@dump($value)
{{--<form id="myForm" action="{{ $value }}" method="POST">--}}
{{--    <form id="myForm" action="{{ route($value) }}" method="POST">--}}
{{--    @csrf--}}
{{--    <div class="row mt-2">--}}
{{--        <div class="col-sm-6">--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="User Name"--}}
{{--                       aria-label="First Name">--}}
{{--                @error('name')--}}
{{--                <div class="text-danger">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-6">--}}
{{--            <div class="form-group">--}}
{{--                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"--}}
{{--                       value="{{ old('email') }}" aria-label="Email">--}}
{{--                @error('email')--}}
{{--                <div class="text-danger">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row mt-2">--}}
{{--        <div class="col-sm-6">--}}
{{--            <div class="form-group">--}}
{{--                <input type="text" class="form-control" name="home_page" id="home_page" placeholder="Home Page"--}}
{{--                       value="{{ old('home_page') }}" aria-label="Home Page">--}}
{{--                @error('home_page')--}}
{{--                <div class="text-danger">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row mt-2 mb-2">--}}
{{--        <div class="col">--}}
{{--            <div class="form-group">--}}
{{--              <textarea--}}
{{--                  name="text"--}}
{{--                  class="form-control"--}}
{{--                  placeholder="Text"--}}
{{--                  id="text"--}}
{{--                  rows="4">{{ old('text') }}</textarea>--}}

{{--                @error('text')--}}
{{--                <div class="text-danger">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="captcha">CAPTCHA</label>--}}
{{--        {!! captcha_img() !!}--}}
{{--        <input type="text" id="captcha" name="captcha">--}}
{{--    </div>--}}
{{--    @error('captcha')--}}
{{--    <p class="text-danger">{{ $message }}</p>--}}
{{--    @enderror--}}
{{--    <button class="btn btn-secondary" type="submit">Public</button>--}}
{{--</form>--}}

