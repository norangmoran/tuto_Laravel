{{ $id }}
{{ $data }}

<form action="/api/post" method="POST">
    @csrf
    <input type="text" name="name">
    <button type="submit">테스트해보기</button>
</form>
