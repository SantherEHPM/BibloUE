import {Querier} from './Querier.js'

const form = document.querySelector('form')
const inputs = form.querySelectorAll('input')

form.addEventListener('submit',(e)=>{userSignUpHandler(e)})


const userSignUpHandler = (e) =>{
    e.preventDefault()
    let first_name = form.querySelector('#first_name').value
    let last_name = form.querySelector('#last_name').value
    let carnet = form.querySelector('#carnet').value
    let email = form.querySelector('#email').value
    let cellphone = form.querySelector('#cellphone').value
    let password = form.querySelector('#password').value
    let c_password = form.querySelector('#c_password').value
    Querier.userSignUp(first_name,last_name,carnet,email,cellphone,password)
}

