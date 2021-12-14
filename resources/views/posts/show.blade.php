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
<!-- 
<form method="POST"
    action="{{route('posts.update', ['id' => $post->id]) }}">
    @csrf
    @method('PATCH')
    <button type="submit" formmethod="post" formaction="posts.update.php">UPDATE12</button>
    </form> -->




    <a href="{{route('posts.edit', ['id' => $post->id])}}">Update</a>
    <!-- <a href="{{route('comments.create')}}">Create A Comment</a> -->

<p><a href="{{route('posts.index')}}">Back</a></p>
<br>
<div>
    <!-- <input type="text" name="title" id="commentTitle"> -->
    <input type="text" name="comment" id="commentText">
    <button id="postCommentBtn">Post Comment</button>
</div>
<script>
    // var commentTitleElem = document.getElementById('commentTitle');
    var commentTextElem = document.getElementById('commentText');
    document.getElementById('postCommentBtn').addEventListener('click', function() {
        // var title = commentTitleElem.value;
        var text = commentTextElem.value;
        var data = new URLSearchParams();
        data.append('content', text);
        axios.post("{{route('comments.store', ['id' => $post->id]) }}", data)
            .then(function() {
                console.log(arguments);
            })
            .catch(function(err) {
                console.error(err);
            });
    });
</script>
@endsection