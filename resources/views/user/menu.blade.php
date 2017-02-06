<h1>Menu List</h1>
@foreach($menu as $item)
	<h2>home: {{$item->home}}</h2>
	<h2>contact: {{$item->contact}}</h2>
	<h2>introduction: {{$item->introduction}}</h2>
	-------------------------------------------<br/>
@endforeach
