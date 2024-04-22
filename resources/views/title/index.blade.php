@extends('layouts.app');
@section('content')
    <form action="{{ route('titles.update') }}" method="post">
        @csrf
        <table class="yel" style="margin:auto;width:100%;">
            <th>網站標題</th>
            <th>替代文字</th>
            <th>顯示</th>
            <th>刪除</th>
            <th></th>
            @foreach ($titles as $title)
                <tr>
                    <td><img src="./img/{{ $title->img }}" style="width:300px;height:30px"></td>
                    <td><input type="text" name="text[]" value="{{ $title->text }}"></td>
                    <td><input type="radio" name="sh" value="{{ $title->id }}"
                            <?= $title->id == 1 ? 'checked' : '' ?>>
                    </td>
                    <td><input type="checkbox" name="del[]" value="{{ $title->id }}"></td>
                    <td><input type="button" value="更新圖片"
                            onclick="op('#cover','#cvr','./model/upload.php?do=title&id={{ $title->id }}')"></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" style="text-align:center">
                    <input type="submit" value="修改確定">
                    <input type="reset" value="重置">
                </td>
            </tr>
        </table>
    </form>
@endsection
