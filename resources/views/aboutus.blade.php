@extends('layouts.template')
@section('title', 'A propos')
@section('content')
    <h1>Notre équipe</h1>
    <div class ='nous'>
        <img src="{{ asset('/photo/allan.png') }}"
             alt="Allan"/>

        <img src="{{ asset('/photo/david.png') }}"
             alt="Allan"/>
        <img src="{{ asset('/photo/jp.png') }}"
             alt="Allan"/>
    </div>
    <div class='nom'>
        <p>Allan</p>
        <p>David</p>
        <p>J.P</p>
    </div>
    <div class='description'>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet animi at deleniti eius et explicabo
            facere fugit in ipsam laudantium magni mollitia nam natus numquam omnis perspiciatis placeat porro provident
            quaerat, quam similique tempore totam ut veniam voluptate. Accusantium doloribus iste nam natus officia quam
            repudiandae ut. Quo?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet animi at deleniti eius et explicabo
            facere fugit in ipsam laudantium magni mollitia nam natus numquam omnis perspiciatis placeat porro provident
            quaerat, quam similique tempore totam ut veniam voluptate. Accusantium doloribus iste nam natus officia quam
            repudiandae ut. Quo?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet animi at deleniti eius et explicabo
            facere fugit in ipsam laudantium magni mollitia nam natus numquam omnis perspiciatis placeat porro provident
            quaerat, quam similique tempore totam ut veniam voluptate. Accusantium doloribus iste nam natus officia quam
            repudiandae ut. Quo?</p>
    </div>

@endsection
