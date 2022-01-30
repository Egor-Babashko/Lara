@extends("pages_layouts.user_layout")

@section("main")
    <main>
        <form method="post" action="{{ route('create') }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Заголовок</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                       aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Описание Статьи</label>
                <textarea class="form-control" name="content" id="exampleInputPassword1"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
            {{csrf_field()}}
        </form>
    </main>
@endsection
