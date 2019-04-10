<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-C++cugH8+Uf86JbNOnQoBweHHAe/wVKN/mb0lTybu/NZ9sEYbd+BbbYtNpWYAsNP" crossorigin="anonymous">
    <title>Search User</title>
    <script>
        function showSuggestion(string){
            // console.log(string);
            // check if input is at least one character
            if(string.length == 0){
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX request
                var ajax = new XMLHttpRequest();
                ajax.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('output').
                        innerHTML = this.responseText;
                    }
                }     
                ajax.open("GET", "suggest.php?q="+string, true);
                ajax.send();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input type="text" class="form-control"
            onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>