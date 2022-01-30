@extends("pages_layouts.user_layout")

@section("main")
    <main>
        <h1>All Articles</h1>
        @foreach($articles as $element)
            <div class="alert alert-info">
                <h5>{{ $element->id }}</h5>
                <h2>{{ $element->title }}</h2>
                <h6>{{ $element->created_at }}</h6>
                <h6>{{$element->content}}</h6>
            </div>
        @endforeach
    </main>
@endsection
