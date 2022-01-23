@extends("pages_layouts.user_layout")

@section("main")
    <main>
        <h1>All Articles</h1>
        @foreach($articles as $element)
            <div class="alert alert-info">
                <h3>{{ $element->title }}</h3>
            </div>
        @endforeach
    </main>
@endsection
