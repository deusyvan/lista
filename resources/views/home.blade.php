<h1>Lista de Tarefas</h1>
<ul>
@foreach($lista as $item)
    <li>{{$item->item}}</li>
@endforeach
</ul>