var themes = document.getElementsByClassName('article');
for (var i = 0; i < themes.length; i++){
    var currentTheme = themes.item(i);
    var previousContent = currentTheme.getElementsByTagName('span')[0].innerText;
    if (previousContent.length > 10){
        var newContent = previousContent.substr(0, 10) + "...";
        currentTheme.getElementsByTagName('span')[0].innerText = newContent;

        currentTheme.addEventListener("click", function (){
            currentTheme.getElementsByTagName('span')[0].innerText = previousContent;
            currentTheme.style.height = "auto";
        });
    }
}