<div>
    <h1>{{ $post }}</h1>
    <p>----------------구분줄----------------</p>
    <input type="text" wire:model.live="post">
    <p>----------------구분줄----------------</p>
    <h1>{{ $clicked }}</h1>
    <button wire:click="click">클릭이벤트</button>
    <p>----------------구분줄----------------</p>
    @if ($toggle === true)
        <h1>ON</h1>
    @else
        <h1>OFF</h1>
    @endif
    <button wire:click="$toggle('toggle')">토글이벤트</button>
</div>
