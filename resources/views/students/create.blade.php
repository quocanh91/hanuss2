@extends ('layout')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Student</h1>
        <form method="POST" action="/student">
        @csrf
            <div class="field">
                <label class="label" for="name">Name</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="name">
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>

                <div class="control">
                    <input class="input" type="text" name="email" id="email">
                </div>
            </div>

            <div class="field">
                <label class="label" for="birthday">Birthday</label>

                <div class="control">
                    <input class="input" type="date" name="birthday" id="birthday">
                </div>
            </div>

            <div class="field">
                <label class="label" for="course">Course</label>

                <div class="control">
                    <input class="input" type="text" name="course" id="course">
                </div>
            </div>
</br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection