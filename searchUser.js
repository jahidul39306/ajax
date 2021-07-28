function fetch()
            {
                var userName=document.getElementById("searchUserName").value;
                let b=document.getElementById("t");

                if(userName.length==0)
                {
                    //b.innerHTML='Empty'
                }
                else
                {
                    var XML= new XMLHttpRequest();
                    XML.onreadystatechange = function()
                    {
                        if(XML.status==200)
                        {
                            t.innerHTML=XML.responseText; 
                        }
                    };
                    XML.open('GET','Data.php?searchUserName=' +searchUserName,true);
                    XML.send();
            }
        }