function fetch()
{
    var searchUserName = document.getElementById("searchUserName").value;
    let t = document.getElementById("t5");
    
    var XML= new XMLHttpRequest();
    XML.onload = function()
    {
        if(XML.status === 200)
        {
            t.innerHTML = XML.responseText;
        }
    };
    XML.open('GET','DBsearchUser.php?searchUserName=' +searchUserName, true);
    XML.send();
    
}
