const checkForm = () => {
    const cost = document.getElementsByClassName('cost');
    const email = document.getElementById('email').value;
    const password = document.getElementById('pwd').value;
    const shipping = document.getElementsByName('shipping');

    if (!isValidCost(cost))          { error('cost'); return false; }
    if (!isValidEmail(email))        { error('email'); return false; }
    if (!isValidPassword(password))  { error('password'); return false; }
    if (!shippingSelected(shipping)) { error('shipping'); return false; }
}

const error = msg => {
    switch (msg) {
        case 'cost': alert('Invalid purchase option. Make sure you have at least 0 of each unit bought.'); break;
        case 'email': alert('Invalid Email.'); break;
        case 'password': alert('You must enter a password.'); break;
        case 'shipping': alert('You must select a shipping option.'); break;
    }
}

const isValidCost = input => {
    let valid = 0;
    for(i = 0; i < input.length; i++) {
        if (input[i].value) {
            if (input[i].value >= 0) valid++;
        }
    }
    return (valid == 3);
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
