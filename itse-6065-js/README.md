# ITSE-6065 
## JavaScript Programming


```
<html lang="en">

<head>
  <meta charset=utf-8>
  <title>A simple HTML document</title>
</head>

<body>
  <h1>This is a simple HTML document</h1>
  <p> web development tutorial</p>
</body>

</html>


javascript

var w3r_text = "This text will be added to HTML";
var newParagraph = document.createElement("p"); //creates a new paragraph element
var newText = document.createTextNode(w3r_text); //creates text along with output to be displayed 
newParagraph.appendChild(newText); //created text is appended to the paragraph element created
document.body.appendChild(newParagraph); // created paragraph and text along with output is appended to the document body

```

