<div>
    <h1>{{ $post }}</h1>
    <p>----------------구분줄----------------</p>
    <input type="text" wire:model.live="post">
    <p>----------------구분줄----------------</p>
    <h1>{{ $clicked }}</h1>
    <button wire:click="click">클릭이벤트</button>
</div>
