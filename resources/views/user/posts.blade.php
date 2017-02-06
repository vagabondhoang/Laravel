<h1>Post List</h1>
@foreach($posts as $item)
	<h2>Tieu de: {{$item->title}}</h2>
	<h2>Mo ta: {{$item->description}}</h2>
	<h2>Noi dung: {{$item->content}}</h2>
	-------------------------------------------<br/>
@endforeach


