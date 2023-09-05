'use strict'

class Querier{
    static api
    static pageApi
    static response

    static {
        this.api = 'http://localhost/BibloUE/back/api/api.php'
        this.pageApi = axios.create({
            baseURL: this.api
        })
    }

    static pacman = ()=>{
        alert(':v')
    }

    static gettingApi = async(endpoint,params) => {
        params=Object.assign({},{query:endpoint})
        this.response = (await axios.get(this.api),params)
        return this.response
    }

    
    static postingApi = async(endpoint,params) => {
        params=Object.assign(params,{query:endpoint})
        this.response = (await axios.post(this.api),params)
        console.error(this.response)
    }
    
    static userSignUp = async(first_name,last_name,carnet,email,cellphone,password) =>{
        let params = {
            first_name:first_name,
            last_name:last_name,
            carnet:carnet,
            email:email,
            cellphone:cellphone,
            password:password
        }
        return await this.postingApi('userSignUp',params)
    }
}

export {Querier}
