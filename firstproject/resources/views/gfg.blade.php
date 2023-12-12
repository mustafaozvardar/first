<!DOCTYPE html> 
<html> 
<head> 
    <title>GeeksforGeeks</title> 
    <style> 
        body { 
            font-size: 20px; 
        } 
    </style> 
</head> 
<body> 
  <h1>** MUSTAFA OZVARDAR **</h1>
    <h2>Articles Topics</h2> 
    <ol> 
        @foreach($articles as $article) 
            <li>{{ $article->topic }}</li> 
        @endforeach 
    </ol> 
  
</body> 
</html> 