@extends('master_file.master_layout')

@section('title', 'Department Page')
@section('heading', 'Department Heading')

@section('content')
  <div class="card">
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>Quote</p>
        <footer class="blockquote-footer">Footer <cite title="Source title">Source title</cite></footer>
      </blockquote>
    </div>
  </div>


  @foreach ($data1 as $datum1)
      {{$datum1}}
  @endforeach
    @foreach ($data2 as $datum2)
      {{$datum2['code']}}
      {{$datum2['desc']}}
  @endforeach
@endsection