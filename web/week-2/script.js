function clickMe(el) { 
    el.getElementsByTagName('span')[0].innerText = "Clicked!"
    setTimeout(() => {
        el.getElementsByTagName('span')[0].innerText = "Click me"
    }, 2000);
    alert("Clicked!");
}