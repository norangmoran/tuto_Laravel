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
    <p>----------------구분줄----------------</p>
    <form wire:submit.prevent="validation">{{-- 기본 이벤트 취소되며 validation 함수 실행 --}}
        <input type="text" placeholder="이름을 입력하세요" wire:model="name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" placeholder="이메일을 입력하세요" wire:model="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" placeholder="비밀번호를 입력하세요" wire:model="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <button>제출</button>
    </form>
</div>
