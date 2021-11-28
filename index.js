//document.write("hello world");

document.getElementById("countButton").addEventListener("click", countCharacters);
document.getElementById("sendWhatsAppButton").addEventListener("click", sendWhatsApp);


function countCharacters()
{
    let text = document.getElementById("text").value;
    //let text = document.getElementById("text").innerHTML;
    let countChar = 0;
    let countSpace = 0;
    let countLine = 1;

    if(text == "")
    {
        countLine = 0;
    }
    for (const char in text) {
        
        if(text[char] === " ")
        {
            
            countSpace++;
        }
        else if (text[char] === "\n")
        {
            countLine++;
        }
        else
        {
            countChar++;
        }
       
    }
    let output = "Total Number of charachters : " + (countChar + countSpace);
    output += "<br>Number of Spaces : " + countSpace;
    output += "<br>Number of Lines : " + countLine;
    document.getElementById("answerCount").innerHTML = output;

    console.log(text);
    
    //alert(text);
}

function sendWhatsApp()
{
    let number = "+";
    number += document.getElementById("whatsAppNumber").value;
    let url = "https://wa.me/"+number;
    console.log(url);
    window.location = url;
    //alert("Hello");
    
    //https://wa.me/+919701503032
}