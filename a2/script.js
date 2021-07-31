function increment() {
    var qty = document.getElementById("qty");
    if (qty.value >= 1 && qty.value <= 99) {
        ++qty.value;
    } else if (qty.value > 99) {
        qty.value = qty.value
    } else if (qty.value == "") {
        qty.value = 1;
    }
}

function decrement() {
    var qty = document.getElementById("qty");
    if (qty.value > 1) {
        --qty.value;
    } else {
        qty.value = null;
    }
}