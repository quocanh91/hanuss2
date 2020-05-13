@extends ('layout')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Edit Student</h1>
        <form method="POST" action="/student/{{ $student->id }}">
        @csrf
        @method('PUT')

            <div class="field">
                <label class="label" for="name">Name</label>

                <div class="control">
                    <input class="input" type="text" name="name" id="name" value="{{ $student->name }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="email">Email</label>

                <div class="control">
                    <input class="input" type="text" name="email" id="email" value="{{ $student->email }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="birthday">Birthday</label>

                <div class="control">
                    <input class="input" type="date" name="birthday" id="birthday" value="{{ $student->birthday }}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="course">Course</label>

                <div class="control">
                    <input class="input" type="text" name="course" id="course" value="{{ $student->course }}">
                </div>
            </div>
</br>
            <div class="field is-grouped">
                <div class="control">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection