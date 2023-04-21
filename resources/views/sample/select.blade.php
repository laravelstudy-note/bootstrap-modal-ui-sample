<h2>画像の選択(モーダルの中のコンテンツ)</h2>

<div class="row justify-content-center">
	@foreach($image_list as $image)
	<div class="col-3 text-center">
		<img src="{{ $image->image_url }}" class="img-thumbnail btn-select" />
		<h5>{{ $image->image_name }}</h5>
		<button class="btn btn-primary btn-select" data-id="{{ $image->id }}" data-image="{{ $image->image_url }}">Select</button>
	</div>
	@endforeach
</div>