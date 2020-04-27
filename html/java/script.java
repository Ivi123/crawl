function myFunction ()
 { 
    if ( document.getElementById("http").value == "https://www.youtube.com/")
            alert("<p>Nu puteti accesa acest site</p>"); 
    else
            window.open(document.getElementById("http").value);
  }