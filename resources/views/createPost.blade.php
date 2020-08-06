
<h1>
    Submitting a new record
</h1>

<form action="/create-post" method="POST">
@csrf
<label for="post-title">Post Title</label>
<br>
<input type="text" name="post-title">
<br>
<label for="post-body">Details</label>
<br>
<input type="text" name="post-body" style="height:200px; width: 70%;">
<br>
<input type="submit" value="Post to blog">
</form>