<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

@extends('layouts.home')


@section('title', $setting->title)
@section('mail', 'apartmansitelerys@gmail.com')

@section('description')
    {{ $setting->description}}
@endsection

@section('keywords', $setting->keywords)
