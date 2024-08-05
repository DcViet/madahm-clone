@extends('layouts.app')

@section('content')
  
		{{-- @livewire('search-project') --}}
        @livewire('this-project-card')
		@livewire('this-project-detail')
		@livewire('this-project-inquiry')
		@livewire('this-project-info')
		{{-- @livewire('project-list') --}}
		
@endsection
