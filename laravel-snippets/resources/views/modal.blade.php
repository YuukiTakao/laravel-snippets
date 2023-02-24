@extends('layouts.simple')

@section('title','シンプル')
@section('description')ページの説明@endsection

@section('add_css')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('add_js')
  <script type="text/javascript" src="{{ asset('js/page/index.js') }}"></script>
@endsection

@include('layouts.head')

@section('body')
  @include('layouts.header')

  <main>
    @include('components.modal')
  </main>

  @include('layouts.footer')
@endsection
