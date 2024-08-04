<div>
    <h1>{{ $message }}</h1>
    <button wire:click="$set('message', 'Hello, you were logged in')">Change Message</button>

    <!-- Ví dụ về form đăng xuất -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-default">Đăng Xuất</button>

        
    </form>


</div>
