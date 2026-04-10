<div>
     <h1 style="color:{{ $color }}">Color selected is</h1>
     <h3>Color Id: {{ $id }}</h3>
     @if ($id >= 0 && $id <= 3)
        <h3>Color Name: {{ $color }}</h3>
     @else
        <h3>Color Name: Invalid Color</h3>
     @endif
     <hr>
     <h2>Select Another Color</h2>
     <ul>
        <li><a href="0">Red</a></li>
        <li><a href="1">Green</a></li>
        <li><a href="2">Blue</a></li>
        <li><a href="3">Pink</a></li>
     </ul>
</div>
