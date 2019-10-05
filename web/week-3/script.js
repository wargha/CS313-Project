function goToAnchor(link) { 
    window.location = link;
}

var arrayItems = [];
function pushItem(item) { 
    if (arrayItems.includes(item)) return;
    arrayItems.push(item);
    console.log(arrayItems);
    data = {
        array: JSON.stringify(arrayItems)
    }
    var server = new XMLHttpRequest();
    server.open('POST', 'index.php', true);
    // server.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    server.onload = function() { 
        document.getElementById('insert-items').classList.add('active-cart');
        document.getElementById('insert-items').innerHTML = `  <h4>Your Shopping Card</h4>
        <div class="container row header-table">
            <span>Qtd: </span>
            <span>Item: </span>
            <span>Price: </span>
        </div>`;
        arrayItems.forEach(el => { 
            var cost = 3500;
            if (el === 'website') cost = 900;
            if (el === 'analytics') cost = 2000;
            
            document.getElementById('insert-items').insertAdjacentHTML('beforeend',
             `<div class="container row items-cart">
            <span>1</span>
            <span>${el}</span>
            <span>$${cost}</span>
        </div>`)
        })

        document.getElementById('insert-items').insertAdjacentHTML ('beforeend', `<button onclick='goToPage(1)'>Edit Cart / Check Out </button>`)
       
    }
    server.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    server.send("arr=" + encodeURIComponent(arrayItems));

}

function toggleCart() { 
    document.getElementById('insert-items').classList.toggle('active-cart');
}


function goToPage(value) { 
    console.log('here');
    if (value == 1) window.location = 'editCart.php';
    if (value == 2) window.location = 'index.php';
    if (value == 3) window.location = 'checkout.php';
    
}