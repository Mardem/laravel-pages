<h1>{{ trans('Page::pages.title') }}</h1>

<ul>
    @foreach($pages as $page)
        <li>{{ $page->title }} - {{ $page->body }}</li>
    @endforeach
</ul>