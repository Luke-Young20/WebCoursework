@extends('layouts.authorlayout')


@section('title', 'Post Details')
    

@section('content')
        
   
    <ul>
        <li>Post Title: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Author ID: {{$post->author->name}}</li>
        <li>Date of posting: {{$post->created_at}}</li>
    </ul>

    <form method="POST"
    action="{{route('posts.destroy', ['id' => $post->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>


    <a href="{{route('posts.edit', ['id' => $post->id])}}">Update</a>

    <p><a href="{{route('posts.index')}}">Back</a></p>


<br>
<div>
    <!-- <input type="text" name="title" id="commentTitle"> -->
    <input type="text" name="comment" id="commentText">
    <button id="postCommentBtn">Post Comment</button>
</div>
@foreach($comments as $comment)
    <p>{{$comment->commentText}}</p>
@endforeach
<script>
    
    //getting the input where the user can write the comment
    var commentTextElem = document.getElementById('commentText');
    //Add a click event handler to the postCommentBtn button 
    document.getElementById('postCommentBtn').addEventListener('click', function() {
        // var title = commentTitleElem.value;
        var text = commentTextElem.value;
        var data = new URLSearchParams();
        data.append('content', text);
        //Using axios to send a post request up to the server containing the comment which the user wrote.
        axios.post("{{route('comments.store', ['id' => $post->id]) }}", data)
            .then(function() {
                //refreshing the page, to show the comment
                window.location.href = window.location.href;
            })
            .catch(function(err) {
                console.error(err);
            });
    });
</script>
@endsection