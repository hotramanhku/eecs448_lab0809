document.querySelector("#form").addEventListener('submit', (e)=>{
     e.preventDefault();
     //Or
     //return false;
});

const checkForm = () => {
    const cost = document.getElementsByName('cost');
    const email = document.getElementById('email').value;
    const password = document.getElementById('pwd').value;
    const shipping = document.getElementsByName('shipping');

    if (!isValidCost(cost))          { error('cost'); return; }
    if (!isValidEmail(email))        { error('email'); return; }
    if (!isValidPassword(password))  { error('password'); return; }
    if (!shippingSelected(shipping)) { error('shipping'); return; }
}

const error = msg => {
    switch (msg) {
        case 'cost': alert('You must select something to buy.'); break;
        case 'email': alert('Invalid Email.'); break;
        case 'password': alert('You must enter a password.'); break;
        case 'shipping': alert('You must select a shipping option.'); break;
    }
}

const isValidCost = input => {
    let valid = false;
    for(i = 0; i < input.length; i++) {
        if (input[i].value) {
            if (input[i].value >= 0) valid = true;
        }
    }
    return valid;
}

const isValidEmail = testEmail => {
    const regex = new RegExp('[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}');
    return regex.test(testEmail);
}

const isValidPassword = password => {
    return password.length != 0;
}

const shippingSelected = radio => {
    let selected = false;
    for(i = 0; i < radio.length; i++) {
        if(radio[i].checked) selected = true;
    }

    return selected;
}
