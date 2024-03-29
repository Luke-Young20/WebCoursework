@extends('layouts.authorlayout')


@section('title', 'Post Details')
    

@section('content')
        

   <img
    src="{{asset ('images/' . $post->image_path)}}"
    width="500" 
    height="auto"
    alt="">


    <ul>
        <li>Post Title: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Author ID: {{$post->author->name}} {{$post->author->last_name}}</li>
        <li>Date of posting: {{$post->created_at}}</li>
          
      
                    @foreach ($tags as $tag) 
                    <li>Tags: {{App\Models\Tag::findorfail($tag->id)->tag_name}}</li>
                    @endforeach
    </ul>


    <form method="POST"
    action="{{route('posts.destroy', ['id' => $post->id]) }}">
    @csrf
    @method('DELETE')
    <div id='delete-button'><button type="submit">Delete</button></div>
</form>

<div id='facebook-button'><button type="submit">POST TO FACEBOOK</button></div>

    <a href="{{route('posts.edit', ['id' => $post->id])}}">Update</a>

    <p><a href="{{route('posts.index')}}">Back</a></p>


<br>

<div id='comment-box'><input type="text" name="comment" id="commentText"></div>
    <div id='comment-button'><button id="postCommentBtn">Post Comment</button></div>

@foreach($comments as $comment)

@endforeach
@foreach($comments as $comment)


<div id = "comments"><table>

    <tr>
        <th>Comment</th>
        <th>Date</th>
        <th>Author</th>
    </tr>
    <tr>
        <td>Comment: {{$comment->commentText}}</td>
        <td>Date: {{$comment->created_at}}</td>
        <td>Author: {{$comment->author->name}}  {{$comment->author->last_name}}</td>
    </tr>
    
</table?>
</div>

@endforeach
<script>
    
    
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

<style>
body {
    text-align: center;
    margin: 50;
    
}
#title{
       padding: 20px;
}
#title-button{
       padding: 5px;
}
#comment-box{ 
     align-content:left;
}
#comment-button{
    align-content:left;   
}
#comments{
    align-content:left;

}
td{
    border-left: black;
    border-right: black;
    border-style: solid;
    padding: 4px;
}
th{
    border-left: black;
    border-right: black;
    border-style: solid;
}
a{
    font-size: 25px;
}
</style>

@endsection