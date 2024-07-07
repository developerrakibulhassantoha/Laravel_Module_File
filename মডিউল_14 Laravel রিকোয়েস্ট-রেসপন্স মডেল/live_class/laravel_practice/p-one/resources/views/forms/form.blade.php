<x-layout title="form">
    <hgroup>
        <h1 >Forms Example</h1>
        <p>How to create handle forms in laravel</p>
    </hgroup>
    <form enctype="multipart/form-data" action="" method="POST">
        @csrf
        <label for="">Name</label>
        <input name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <button type="submit">submit</button>
    </form>
</x-layout>
