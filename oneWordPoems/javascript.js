var quotes = [
    'hello',
    'goodbye',
    'here is',
    'another',
    'try',
    'ok?'
]

function newQuote() {
    var randomNumber = Math.floor(Math.random() * (quotes.length));
    document.getElementById('quoteDisplay').innerHTML = quotes[randomNumber];
}

var images = [
    'https://images.nypl.org/index.php?id=418029&t=w',
    'https://images.nypl.org/index.php?id=439938&t=w',
    'https://images.nypl.org/index.php?id=1952283&t=w'
]

var index = 0;
function buildImage() {
    document.getElementById('content').style.backgroundImage = 'url('+images[index]+')';
}
function changeImage() {
    index++;
    if (index >= images.length) index = 0;
    document.getElementById('content').style.backgroundImage = 'url(' + images[index] + ')';
}
