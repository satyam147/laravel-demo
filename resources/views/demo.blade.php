@extends('base')

@section('title','demo')

@section('body')
    <form method="post" id="form">
        @csrf
        <label>Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" value="">
        <input type="submit" name="submit" value="submit">
        <br>
        <span id="response"></span>
    </form>
@endsection

@section('script')
    <script src="{{ mix('js/demo.js') }}"></script>
@endsection
