解説
================================


## フォーム

- resources/views/sample/edit.blade.php

### ポイント1 モーダルを動的に開く

$("#モーダルのID").modal("show")でモーダルを開くことができます。

```
$("#js-select-modal").modal("show");
```

### ポイント2 Ajaxでコンテンツを埋め込む

```
$("#js-select-modal .modal-body").load("{{ route('image.select') }}");
```

指定したIDのmodal-bodyの中身を指定したURL（route=image.select）で置き換える処理です。

/selectのURLにweb.phpでマッピングしていますが、どこでも構いません。

### ポイント3 モーダルの各要素が選ばれた時の処理

モーダルの中身はAjaxで非同期で読み込まれるため、少し特殊な書き方をしています。

```
$(document).on("click", "#js-select-modal .btn-select", function() {
	...
});
```

### ポイント4 モーダルの中身のコンテンツをJSに読み込む方法

jsで制御する場合はdata-xxxx属性が便利です。

bladeでdata-id属性で埋め込んでいる画像ID、data-image属性に画像のURLを埋め込んでいます。


```
<button 
 class="btn btn-primary btn-select" 
 data-id="{{ $image->id }}" 
 data-image="{{ $image->image_url }}">Select</button>
```

jQueryのdata()関数を使うと上記のデータを読み込み可能です。

```
//画像ID
const image_id = $(this).data("id");
const image_url = $(this).data("image");
```
