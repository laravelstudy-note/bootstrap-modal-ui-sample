@extends("layout.app")

@section("content")
<h2>Modalを開いて編集するサンプル</h2>

<div class="mb-3">
	<input type="text" id="js-input-image" class="form-control" />
	<img id="js-preview-image" style="display:none;" />
</div>

<div class="mb-3">
	<button id="btn-show-modal">画像を選択する</button>
</div>

<div class="mb-3">
	<p>input#js-input-image = 選択されたIDが書き込まれる</p>
	<p>img#js-preview = プレビュー画像が書き込まれる</p>
	<p>#btn-show-modal = モーダルを表示するボタン</p>
	<p>#js-select-modal = モーダル本体</p>
</div>


<!-- 以下モーダルのHTML -->
<div id="js-select-modal" class="modal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- 以下モーダルを表示するスクリプト -->
<script>
	$(function() {

		//ボタンクリックでモーダルを開く
		$("#btn-show-modal").on("click", function() {

			//コンテンツを読み込む
			$("#js-select-modal .modal-body").load("{{ route('image.select') }}");

			//モーダルを開く
			$("#js-select-modal").modal("show");
		});

		//モーダルの中のボタンが選ばれた時
		$(document).on("click", "#js-select-modal .btn-select", function() {

			//画像ID
			const image_id = $(this).data("id");
			const image_url = $(this).data("image");

			//inputに入力
			$("#js-input-image").val(image_id);

			//プレビュー画像に表示
			$("#js-preview-image").attr("src", image_url).show();

			//モーダルを閉じる
			$("#js-select-modal").modal("hide");
		});


	});
</script>
@endsection