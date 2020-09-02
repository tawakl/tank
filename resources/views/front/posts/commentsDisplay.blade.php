@foreach($comments as $comment)
    <div class="display-comment">
        <table class="table">
            <tr>


                <td>
                    <strong>{{ trans('comments.name') }}</strong> : {{ $comment->commentByName }}<br>
                    <strong>{{ trans('comments.email') }}</strong> : {{ $comment->commentByEmail }}<br>
                    <strong>{{ trans('comments.message') }}</strong> : {{ $comment->body }}
                </td>
            </tr>
        </table>
    </div>
@endforeach