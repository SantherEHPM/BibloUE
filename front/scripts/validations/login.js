'use strict';

import {Querier} from "./Querier.js";

    
const validateLogIn = async(e) =>{
    e.preventDefault();
    const email = document.getElementById('email').value
    const password = document.getElementById('password').value
    let errors
    let info = await Querier.getAdmins()
    console.warn(info)
    info.forEach(element => {
        console.log(element.admi_email+","+email)
        if(email === element.admi_email){
            alert("ajo")
        }
    });

}

let form = document.getElementById('login')

form.addEventListener('submit',(e)=>{validateLogIn(e)})