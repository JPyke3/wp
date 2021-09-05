function toggleLogin() {
    let login = document.getElementById("login");
    if (login.style.display == "none") {
        login.style.display = "";
    } else {
        login.style.display = "none";
    }
}

function writeFieldsToStorage() {
    // Fetch the elements from the HTML Page
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let mobile = document.getElementById("mobile");
    let address = document.getElementById("address");

    //Assign new localstorage entries to the values
    localStorage.setItem("name", name.value);
    localStorage.setItem("email", email.value);
    localStorage.setItem("mobile", mobile.value);
    localStorage.setItem("address", address.value);
}

function fetchFieldsFromStorage() {
    // Fetch the values from the LocalStorage
    let name = localStorage.getItem("name");
    let email = localStorage.getItem("email");
    let mobile = localStorage.getItem("mobile");
    let address = localStorage.getItem("address");

    // Fetch the elements from the HTML page
    let namefield = document.getElementById("name");
    let emailfield = document.getElementById("email");
    let mobilefield = document.getElementById("mobile");
    let addressfield = document.getElementById("address");

    // Assign the values of the elements to the values of the localstorage entries
    namefield.value = name;
    emailfield.value = email;
    mobilefield.value = mobile;
    addressfield.value = address;
}