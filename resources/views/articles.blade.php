<style>
p {
	width:250px;
    border: 1px solid red;
    padding: 10px;
   }
</style>

@foreach ($Articles as $article)
            <div id="article">
            	<p>
                <b>Название:</b></br> {{$article->name}} </br>
                <b>Текст:</b></br> {{$article->text}}</br>
                <b>Автор:</b> </br>{{$article->author}}

</p> 
            </div>

        @endforeach       
