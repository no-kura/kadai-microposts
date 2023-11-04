    @if (Auth::user()->is_fovorites($micropost->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        <form method="POST" action="{{ route('user.unfavorites', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error btn-sm normal-case" 
                onclick="return confirm('id = {{ $micropost->id }} をお気に入りから削除します。よろしいですか？')">Unfovorite</button>
        </form>
    @else
        {{-- お気に入り登録ボタンのフォーム --}}
        <form method="POST" action="{{ route('user.onfovorites', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-sm normal-case">Fovorite</button>
        </form>
    @endif

