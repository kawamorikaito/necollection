@extends('app')

@section('content')


<div class="container media-size">

    <div class="panel panel-default" style="margin: auto;">
        
        <div class="panel-heading" style="text-align: center;">
            ネコレクション
    	</div>
        
        <div class="panel-body" style="display: block;">
            <div  style="display: block;height: 50px;width: 100%;">
                <div class="regist-right" style="display: inline-block;">
                    <form action="/new" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                        <button type="submit" class="btn btn-default">
					     	新着順
				    	</button>
                    </form>
                    <form action="/popularity" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                        <button type="submit" class="btn btn-default">
					     	人気順
					    </button>
                    </form>
                </div>
                
                <div style="display: inline-block;text-align:right;width: 28%;">
                    <form action="/inputRegist" method="POST" style="display:inline;">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-default" style="margin: 0 0 0 auto;">
				    	<i class="fa fa-plus"></i>ネコを登録！
					</button>
                    </form>
                </div>
            </div>
            @foreach ($catlists as $catInfo)

            <div class="catlist" style="display: inline-block; border: dotted #1e366a 1px;float: left;margin: 17px;padding: 10px">
                <img src="{{ asset($catInfo['url']) }}" class="cat-img" style="object-fit: cover;margin: 20px 3px 35px 15px;-webkit-transform: rotate(-10deg);-moz-transform: rotate(-10deg);">
                <ul>
                    <li ><span style="margin-right: 100px; margin-left:20px;">いろ</span>{{ $catInfo['color']}}</li>
                    <li><span style="margin-right: 58px;margin-top: 5px; margin-left:20px;">とくちょう</span>{{ $catInfo['features']}}</li>
                    <li><span style="margin-right: 58px;margin-top: 5px;margin-left:20px;">じょうたい</span>{{ $catInfo['status']}}</li>
                    <li><span style="margin-right: 72px;margin-top: 5px;margin-left:20px;">イメージ</span>{{ $catInfo['image']}}</li>

                    <form action="/good" method="POST" style="display:inline;margin: 10px 0px 0px 5px">
                    {{ csrf_field() }}
                        <button type="submit" name="id" class="btn btn-default" value="{{ $catInfo['id'] }}" >
                        <img src="{{ asset('/good.jpeg') }}" style="object-fit: cover;width: 15px;height: 15px;">
                            <span style="margin-right: 10px;">いいね</span>{{ $catInfo['good']}}
					    </button>
                    </form>
                </ul>
            </div>
            @endforeach
        </div>
    </div>

    <br/>
 
</div>

@endsection

