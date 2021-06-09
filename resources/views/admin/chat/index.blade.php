@extends('layouts.admin-master')

@section('title')
Forum Chat
@endsection

@section('content')

<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-light border border-light">Forum</div>

                <div class="card-body bg-dark text-light border border-light" style="height: 350px; overflow: auto;">
                
                @foreach($chats as $chat)
                    @if($chat->user_id == $saya->id)
                    <div class="header my-2 text-right">
                        <strong>{{ $chat->user->name }}</strong>
                    </div>
                    <div style="background-color: #099; padding: 10px; border-bottom-left-radius: 24px; border-bottom-right-radius: 24px; border-top-left-radius: 24px;">
                        {{ $chat->text }}
                        <div class="float-right ml-5">{{ $chat->created_at }}</div>
                    </div>

                    @else
                    <div class="header my-2">
                        <strong>{{ $chat->user->name }}</strong>
                    </div>
                    <div style="background-color: #012; padding: 10px; border-bottom-left-radius: 24px; border-bottom-right-radius: 24px; border-top-right-radius: 24px;">
                        {{ $chat->text }}
                        <div class="float-right ml-5">{{ $chat->created_at }}</div>
                    </div>
                    @endif
                @endforeach

                </div>

                <div class="card-footer bg-dark text-light border border-light">
                    <form method="post" action="{{ url('chats') }}">
                    @csrf
                        <div class="input-group">
                            <input type="text" name="text" class="form-control mr-1" placeholder="Ketik disini...">
                            <button class="btn btn-warning">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection