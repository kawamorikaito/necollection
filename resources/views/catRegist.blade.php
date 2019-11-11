@extends('app')

@section('content')


<div class="container media-size">

    <div class="panel panel-default" style="margin: auto;">
        
        <div class="panel-heading" style="text-align: center;">
            ネコレクション
    	</div>
        
        <div class="panel-body" style="display: block;">

        <form action="/regist" method="POST" enctype="multipart/form-data" class="form-horizontal">
			{{ csrf_field() }}
            <div class="panel panel-default" style="display:flex;">
        あなたのお気に入りのネコちゃんを共有しよう！
    </div>

            <div style="margin-top: 45px;"></div>
        
            <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                <input type="file" name="imagefile" value=""/>
                </div>
			</div>

            <div style="margin-top: 45px;"></div>

            <div class="form-group">
				<label for="task-name" class="col-sm-3 control-label">いろ</label>

				<div class="col-sm-6">
                    <input type="text" name="color" class="form-control" value="{{ old('color') }}">
				</div>
            </div>
            
            <div style="margin-top: 45px;"></div>

            <div class="form-group">
				<label for="task-name" class="col-sm-3 control-label">とくちょう</label>

				<div class="col-sm-6">
					<input type="text" name="features" class="form-control" value="{{ old('features') }}">
				</div>
            </div>
            
            <div style="margin-top: 45px;"></div>

            <div class="form-group">
				<label for="task-name" class="col-sm-3 control-label">じょうたい</label>

				<div class="col-sm-6">
					<input type="text" name="status" class="form-control" value="{{ old('status') }}">
				</div>
			</div>

            <div style="margin-top: 45px;"></div>

            <div class="form-group">
				<label for="task-name" class="col-sm-3 control-label">イメージ</label>

				<div class="col-sm-6">
					<input type="text" name="image" class="form-control" value="{{ old('image') }}">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i>共有する！
					</button>
				</div>
			</div>
        </form>

        <div>
        <form action="/" method="POST" style="display:inline;">
                    {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" id="modal-close-update">
                もどる
            </button>
        </div>
        </form>
        </div>
    </div>

    <br/>
 
</div>

@endsection

