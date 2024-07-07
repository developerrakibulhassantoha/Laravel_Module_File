<x-layout title="form">
    <hgroup>
        <h1 >Forms Example</h1>
        <p>How to create handle forms in laravel</p>
    </hgroup>
    <form enctype="multipart/form-data" action="{{ route('handleform') }}" method="POST">
        @csrf
        <label for="">Name</label>
        <input name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label>Profile Picture</label>
        <input type="file" name="profile_picture">
        <button type="submit">submit</button>

        {{ session("error") }}

        <p>
           {{-- // {{ session("profile_picture") }} --}}
            {{-- @if (session('profile_picture')) --}}
                {{-- <img src="{{ session('profile_picture') }}" alt="">
            @endif --}}
        </p>

        {{-- <p>{{ session("success") }}</p>
        <p>{{ session("name") }}</p>
        <p>{{ session("email") }}</p> --}}

    </form>
</x-layout>
