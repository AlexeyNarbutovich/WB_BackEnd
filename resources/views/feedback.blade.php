@extends('layouts.layout')

@section('title', 'Feedbacks');

@section('content')
    <main>
        <div class="wrapper">
            <div id="feedback__main">
                <div class="feedback__wrapper">
                    @if($errors->any())
                        <div class="alert">
                            @foreach($errors -> all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                    <form action="/feedbacks/msg" method="post" class="feedback__form">
                        @csrf
                        <ul>
                            <li>
                                <img src="{{asset('images/png/user_icon.png')}}" alt="user" class="feedback_icon">
                                <input type="text" id="user_name" name="user_name" class="feedback__input" placeholder="Ім'я">
                            </li>
                            <li>
                                <img src="{{asset('images/png/email_icon.png')}}" alt="e-mail" class="feedback_icon">
                                <input type="text" id="email" name="email" class="feedback__input" placeholder="Поштова скринька">
                            </li>
                            <li>
                                <img src="{{asset('images/png/feedback_icon.png')}}" alt="feedback" class="feedback_icon message__icon">
                                <textarea id="message" rows="5" name="message" class="feedback__textarea" placeholder="Залиште свій відгук тут"></textarea>
                            </li>
                        </ul>
                        <button type="submit" id="form__button">Відправити</button>
                    </form>
                </div>
                <div class="title__msg">Відгуки
                    @foreach($feedbacks as $el)
                        <div class="feedback__msg">
                            <div id="author">Автор: {{$el->userName}} </div>
                            <div id="msg">Повідомлення: {{$el->message}} </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
