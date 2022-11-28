function checkValidation(){
    let fname = document.regform.first_name.value;
    let lname = document.getElementById("last_name").value;
    let uemail = document.getElementById("email").value;
    let pass = document.getElementById("password").value;
    let cpass = document.getElementById("con_password").value;
    let uregion = document.getElementById('country');
    let uaddress = document.getElementById('address').value;
    let ucity = document.getElementById('city').value;
    let uprovince = document.getElementById('state').value;
    let uzip = document.getElementById('zipcode').value;
    let phone_num = document.getElementById('number').value;
    // let uform = document.querySelector('regform');

    const isEmpty = (check) => (check == "" ? true : false);
    const isBetween = (element_length, min, max) => {
        return element_length >= min && element_length <= max ? false : true;
    };
    const isvalidPassword = (check) => {
        const regexp =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        return regexp.test(check);
    };
    const isAlpha = (check) => {
        const regexp = /^[A-Za-z]+$/;
        return regexp.test(check);
    };

    let ctr=0;
    let ret = 0;
    
    function checkname(name){
        let nameVal = name.trim();
        
        let x =0;
        if(isEmpty(nameVal)){
            document.getElementById("fnamerr").innerHTML = `Names cannot be empty`;
            document.getElementById("fnamerr").style.color = "red";
        }else{
            document.getElementById("fnamerr").innerHTML = ``;
            x = 1;
        }
        return x;
    }
    function checkemail(email){
        let emailVal = email;
        
        let x=0;
        if(isEmpty(emailVal)){
            document.getElementById("emailerr").innerHTML = `Email cannot be empty`;
            document.getElementById("emailerr").style.color = "red";
        }else{
            document.getElementById("emailerr").innerHTML = ``;
            x = 1;
        }
        return x;
    }
    function checkpass(password){
        let passVal = pass;
        
        let min = 6;
        let max = 12;
        let x=0;
        if(isEmpty(passVal)){
            document.getElementById("passerr").innerHTML = `Password cannot be empty`;
            document.getElementById("passerr").style.color = "red";
        }else if(isBetween(passVal.length, min, max)){
            document.getElementById("passerr").innerHTML = (`Minimum of 6 to 12 characters`);
            document.getElementById("passerr").style.color = "red";
        }else if(!isvalidPassword(passVal)){
            document.getElementById("passerr").innerHTML=(`Invalid password must contain at least 1 Lower case, 1 Upper case, 1 Number, and 1 Special case character`);
            document.getElementById("passerr").style.color = "red";
        }else{
            document.getElementById("passerr").innerHTML=(``);
            x=1;
        }
        return x;
    }
    function checkconfirm(password, confirm){
        let passVal = pass.trim();
        let conVal = confirm.trim();
        
        let x=0;
        if(isEmpty(conVal)){
            document.getElementById("cpasserr").innerHTML = `Confirm Password cannot be empty`;
            document.getElementById("cpasserr").style.color = "red";
        }else if(passVal != conVal){
            document.getElementById("cpasserr").innerHTML = `Password Incorrect, Must Contain Same Input of Password`;
            document.getElementById("cpasserr").style.color = "red";
        }else{
            document.getElementById("cpasserr").innerHTML = ``;
            x=1;
        }
        return x;
    }
    function checkRegion(country) {
        const ucountrySelected =[... country.options].filter(option => option.selected).map(option => option.value);
        let x = 0;
        console.log(ucountrySelected);
        
        if (isEmpty(ucountrySelected)) {
        console.log(`Country Empty`);
        document.getElementById("countryerr").innerHTML = `Required`;
        document.getElementById("countryerr").style.color = "red";
        } else {
        console.log(`Nice!`);
        document.getElementById("countryerr").innerHTML = ``;
        x = 1;
        }
        if(ucountrySelected == ""){
            x=0;
        }
        return x;
    }
    function checkAddress(address){
        let addVal = address;
        let x=0;
        
        if(isEmpty(addVal)){
            document.getElementById("adderr").innerHTML = `Required`;
            document.getElementById("adderr").style.color = "red";
        }else{
            document.getElementById("adderr").innerHTML = ``;
            x=1;
        }
        return x;
    }
    function checkCity(city){
        let cityVal = city;
        let x=0;
        
        if(isEmpty(cityVal)){
            document.getElementById("cityerr").innerHTML = `Required`;
            document.getElementById("cityerr").style.color = "red";
        }else{
            document.getElementById("cityerr").innerHTML = ``;
            x=1;
        }
        return x;
    }
    function checkProvince(state){
        let stateVal = state;
        let x=0;
        
        if(isEmpty(stateVal)){
            document.getElementById("staterr").innerHTML = `Required`;
            document.getElementById("staterr").style.color = "red";
        }else{
            document.getElementById("staterr").innerHTML = ``;
            x=1;
        }
        return x;
    }
    function checkZip(zip){
        let zipVal = zip;
        let x=0;
        
        if(isEmpty(zipVal)){
            document.getElementById("ziperr").innerHTML = `Required`;
            document.getElementById("ziperr").style.color = "red";
        }else{
            document.getElementById("ziperr").innerHTML = ``;
            x=1;
        }
        return x;
    }
    function checkPhone(phone){
        let phoneVal = phone;
        let x=0;
        
        if(isEmpty(phoneVal)){
            document.getElementById("numerr").innerHTML = `Required`;
            document.getElementById("numerr").style.color = "red";
        }else if(phoneVal.length == 11){
            document.getElementById("numerr").innerHTML = ``;
            x=1;
        }else{
            document.getElementById("numerr").innerHTML = `Invalid Number`;
            document.getElementById("numerr").style.color = "red";
        }
        return x;
    }
    checkname(fname) == 1 ? ctr++: ctr;
    checkname(lname) == 1 ? ctr++: ctr;
    checkemail(uemail) == 1 ? ctr++: ctr;
    checkpass(pass) == 1 ? ctr++:ctr;
    checkconfirm(pass, cpass) == 1 ? ctr++:ctr;
    checkRegion(uregion) == 1 ? ctr++:ctr;
    checkAddress(uaddress) == 1 ? ctr++:ctr;
    checkCity(ucity) == 1 ? ctr++:ctr;
    checkProvince(uprovince) == 1 ? ctr++:ctr;
    checkZip(uzip) == 1 ? ctr++:ctr;
    checkPhone(phone_num) == 1 ? ctr++: ctr;
    
    if(ctr == 11){
        
        return true;
    }else{
        return false;
    }
}